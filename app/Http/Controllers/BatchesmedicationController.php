<?php

namespace App\Http\Controllers;

use App\Models\Batchesmedication;
use App\Models\Entrance;
use App\Models\Providere;
use Illuminate\Http\Request;

/**
 * Class BatchesmedicationController
 * @package App\Http\Controllers
 */
class BatchesmedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchesmedications = Batchesmedication::paginate();
        $provideres = Providere::all();

        return view('batchesmedication.index', compact('batchesmedications','provideres'))
            ->with('i', (request()->input('page', 1) - 1) * $batchesmedications->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batchesmedication = new Batchesmedication();
        $provideres = Providere::all();
        return view('batchesmedication.create', compact('batchesmedication','provideres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Batchesmedication::$rules);

        $batchesmedication = Batchesmedication::create($request->all());

        $entrances = Entrance::create($request->all());

        $batchesmedication->entrances()->attach($batchesmedication->id);

        return redirect()->route('batchesmedications.index')
            ->with('success', 'Lote Regristrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batchesmedication = Batchesmedication::find($id);

        return view('batchesmedication.show', compact('batchesmedication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batchesmedication = Batchesmedication::find($id);

        return view('batchesmedication.edit', compact('batchesmedication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Batchesmedication $batchesmedication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batchesmedication $batchesmedication)
    {
        request()->validate(Batchesmedication::$rules);

        $valact = $batchesmedication->quantity;

        if ($valact <= $request->quantity)
        {
            $batchesmedication->update($request->all());

            $entranceData = $request->except('id');
            $entrance = Entrance::create($entranceData);
            $batchesmedication->entrances()->attach($batchesmedication->id);
            $batchesmedication->quantity = $request->quantity - $valact;
            $batchesmedication->save();

            return redirect()->route('batchesmedications.index')
                ->with('success', 'Lote Actualizado');
        }

        else
        {
            return redirect()->route('batchesmedications.index')
                ->with('error', 'No se pueden hacer ventas desde esta herramienta');
        }

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $batchesmedication = Batchesmedication::find($id)->delete();

        return redirect()->route('batchesmedications.index')
            ->with('success', 'Lote Eliminado');
    }
}
