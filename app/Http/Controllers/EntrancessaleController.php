<?php

namespace App\Http\Controllers;

use App\Models\Entrancessale;
use Illuminate\Http\Request;

/**
 * Class EntrancessaleController
 * @package App\Http\Controllers
 */
class EntrancessaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrancessales = Entrancessale::paginate(15);

        return view('entrancessale.index', compact('entrancessales'))
            ->with('i', (request()->input('page', 1) - 1) * $entrancessales->perPage(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrancessale = new Entrancessale();
        return view('entrancessale.create', compact('entrancessale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Entrancessale::$rules);

        $entrancessale = Entrancessale::create($request->all());

        return redirect()->route('entrancessales.index')
            ->with('success', 'Registro realizado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrancessale = Entrancessale::find($id);

        return view('entrancessale.show', compact('entrancessale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrancessale = Entrancessale::find($id);

        return view('entrancessale.edit', compact('entrancessale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Entrancessale $entrancessale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrancessale $entrancessale)
    {
        request()->validate(Entrancessale::$rules);

        $entrancessale->update($request->all());

        return redirect()->route('entrancessales.index')
            ->with('success', 'Actualizacion realizada.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrancessale = Entrancessale::find($id)->delete();

        return redirect()->route('entrancessales.index')
            ->with('success', 'Eliminacion realizada.');
    }
}
