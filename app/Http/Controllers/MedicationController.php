<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use App\Models\Entrance;
use Illuminate\Http\Request;

/**
 * Class MedicationController
 * @package App\Http\Controllers
 */
class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medications = Medication::paginate();

        return view('medication.index', compact('medications'))
            ->with('i', (request()->input('page', 1) - 1) * $medications->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medication = new Medication();
        return view('medication.create', compact('medication'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medication::$rules);

        $medication = Medication::create($request->all());

        $entrances = Entrance::create($request->all());

        $medication->entrances()->attach($medication->id);

        return redirect()->route('medications.index')
            ->with('success', 'Medication created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medication = Medication::find($id);

        return view('medication.show', compact('medication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medication = Medication::find($id);

        return view('medication.edit', compact('medication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medication $medication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medication)
    {
        request()->validate(Medication::$rules);

        $valact = $medication->quantity;

        if ($valact <= $request->quantity)
        {
            $medication->update($request->all());

            $entranceData = $request->except('id');
            $entrance = Entrance::create($entranceData);
            $medication->entrances()->attach($medication->id);
            $entrance->quantity = $request->quantity - $valact;
            $entrance->save();

            return redirect()->route('medications.index')
                ->with('success', 'Medicina Registrada');
        }

        else
        {
            return redirect()->route('medications.index')
                ->with('error', 'Si quiere registrar una salida, hágalo en la opción de salida.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medication = Medication::find($id)->delete();

        return redirect()->route('medications.index')
            ->with('success', 'Medication deleted successfully');
    }
}
