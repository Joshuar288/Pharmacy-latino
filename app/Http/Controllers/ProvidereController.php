<?php

namespace App\Http\Controllers;

use App\Models\Providere;
use Illuminate\Http\Request;

/**
 * Class ProvidereController
 * @package App\Http\Controllers
 */
class ProvidereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provideres = Providere::paginate();

        return view('providere.index', compact('provideres'))
            ->with('i', (request()->input('page', 1) - 1) * $provideres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providere = new Providere();
        return view('providere.create', compact('providere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Providere::$rules);

        $providere = Providere::create($request->all());

        return redirect()->route('provideres.index')
            ->with('success', 'Proveedor agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $providere = Providere::find($id);

        return view('providere.show', compact('providere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $providere = Providere::find($id);

        return view('providere.edit', compact('providere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Providere $providere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Providere $providere)
    {
        request()->validate(Providere::$rules);

        $providere->update($request->all());

        return redirect()->route('provideres.index')
            ->with('success', 'Proveedor actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $providere = Providere::find($id)->delete();

        return redirect()->route('provideres.index')
            ->with('success', 'Proveedor borrado');
    }
}
