<?php

namespace App\Http\Controllers;

use App\Models\Entrancesdiscard;
use Illuminate\Http\Request;

/**
 * Class EntrancesdiscardController
 * @package App\Http\Controllers
 */
class EntrancesdiscardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrancesdiscards = Entrancesdiscard::paginate(15);

        return view('entrancesdiscard.index', compact('entrancesdiscards'))
            ->with('i', (request()->input('page', 1) - 1) * $entrancesdiscards->perPage(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrancesdiscard = new Entrancesdiscard();
        return view('entrancesdiscard.create', compact('entrancesdiscard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Entrancesdiscard::$rules);

        $entrancesdiscard = Entrancesdiscard::create($request->all());

        return redirect()->route('entrancesdiscards.index')
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
        $entrancesdiscard = Entrancesdiscard::find($id);

        return view('entrancesdiscard.show', compact('entrancesdiscard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrancesdiscard = Entrancesdiscard::find($id);

        return view('entrancesdiscard.edit', compact('entrancesdiscard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Entrancesdiscard $entrancesdiscard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrancesdiscard $entrancesdiscard)
    {
        request()->validate(Entrancesdiscard::$rules);

        $entrancesdiscard->update($request->all());

        return redirect()->route('entrancesdiscards.index')
            ->with('success', 'Actualizacion realizada.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrancesdiscard = Entrancesdiscard::find($id)->delete();

        return redirect()->route('entrancesdiscards.index')
            ->with('success', 'Eliminacion realizada.');
    }
}
