<?php

namespace App\Http\Controllers;

use App\Models\Discard;
use App\Models\Pharmasproduct;
use Illuminate\Http\Request;

/**
 * Class DiscardController
 * @package App\Http\Controllers
 */
class DiscardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discards = Discard::paginate();
        $pharmasproducts = Pharmasproduct::all();

        return view('discard.index', compact('discards','pharmasproducts'))
            ->with('i', (request()->input('page', 1) - 1) * $discards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discard = new Discard();
        $pharmasproducts = Pharmasproduct::all();
        return view('discard.create', compact('discard','pharmasproducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    request()->validate(Discard::$rules);

        $discard = Discard::create($request->all());

    return redirect()->route('discards.index')
        ->with('success', 'Descarte hecho con exito');
}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discard = Discard::find($id);

        return view('discard.show', compact('discard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discard = Discard::find($id);
        $pharmasproducts = Pharmasproduct::all();

        return view('discard.edit', compact('discard','pharmasproducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Discard $discard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discard $discard)
    {
        request()->validate(Discard::$rules);

        $discard->update($request->all());

        return redirect()->route('discards.index')
            ->with('success', 'Descarte actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $discard = Discard::find($id)->delete();

        return redirect()->route('discards.index')
            ->with('success', 'Discarte eliminado');
    }
}
