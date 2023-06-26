<?php

namespace App\Http\Controllers;

use App\Models\Batchesentrance;
use Illuminate\Http\Request;

/**
 * Class BatchesentranceController
 * @package App\Http\Controllers
 */
class BatchesentranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchesentrances = Batchesentrance::paginate(15);

        return view('batchesentrance.index', compact('batchesentrances'))
            ->with('i', (request()->input('page', 1) - 1) * $batchesentrances->perPage(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batchesentrance = new Batchesentrance();
        return view('batchesentrance.create', compact('batchesentrance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Batchesentrance::$rules);

        $batchesentrance = Batchesentrance::create($request->all());

        return redirect()->route('batchesentrances.index')
            ->with('success', 'Lote de medicamento agregado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batchesentrance = Batchesentrance::find($id);

        return view('batchesentrance.show', compact('batchesentrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batchesentrance = Batchesentrance::find($id);

        return view('batchesentrance.edit', compact('batchesentrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Batchesentrance $batchesentrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batchesentrance $batchesentrance)
    {
        request()->validate(Batchesentrance::$rules);

        $batchesentrance->update($request->all());

        return redirect()->route('batchesentrances.index')
            ->with('success', 'Lote de medicamento actualizado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $batchesentrance = Batchesentrance::find($id)->delete();

        return redirect()->route('batchesentrances.index')
            ->with('success', 'Lote de medicamento eliminado.');
    }
}
