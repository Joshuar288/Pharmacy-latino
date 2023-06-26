<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use Illuminate\Http\Request;

/**
 * Class EntranceController
 * @package App\Http\Controllers
 */
class EntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrances = Entrance::paginate();

        return view('entrance.index', compact('entrances'))
            ->with('i', (request()->input('page', 1) - 1) * $entrances->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrance = new Entrance();
        return view('entrance.create', compact('entrance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Entrance::$rules);

        $entrance = Entrance::create($request->all());

        return redirect()->route('entrances.index')
            ->with('success', 'Entrada creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrance = Entrance::find($id);

        return view('entrance.show', compact('entrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrance = Entrance::find($id);

        return view('entrance.edit', compact('entrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Entrance $entrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrance $entrance)
    {
        request()->validate(Entrance::$rules);

        $entrance->update($request->all());

        return redirect()->route('entrances.index')
            ->with('success', 'Entrada actualizada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrance = Entrance::find($id)->delete();

        return redirect()->route('entrances.index')
            ->with('success', 'Entrada eliminada');
    }
}
