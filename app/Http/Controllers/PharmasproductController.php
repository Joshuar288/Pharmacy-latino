<?php

namespace App\Http\Controllers;

use App\Models\Pharmasproduct;
use App\Models\Providere;
use App\Models\Entrance;
use Illuminate\Http\Request;

/**
 * Class PharmasproductController
 * @package App\Http\Controllers
 */
class PharmasproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmasproducts = Pharmasproduct::paginate();
        $provideres = Providere::all();

        return view('pharmasproduct.index', compact('pharmasproducts','provideres'))
            ->with('i', (request()->input('page', 1) - 1) * $pharmasproducts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharmasproduct = new Pharmasproduct();
        $provideres = Providere::all();
        return view('pharmasproduct.create', compact('pharmasproduct','provideres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pharmasproduct::$rules);

        $pharmasproduct = Pharmasproduct::create($request->all());

        $entranceData = $request->except('id');

        $entrances = Entrance::create($entranceData);

        $pharmasproduct->entrances()->attach($pharmasproduct->id);

        return redirect()->route('pharmasproducts.index')
            ->with('success', 'Producto registrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pharmasproduct = Pharmasproduct::find($id);

        return view('pharmasproduct.show', compact('pharmasproduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmasproduct = Pharmasproduct::find($id);
        $provideres = Providere::all();

        return view('pharmasproduct.edit', compact('pharmasproduct','provideres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pharmasproduct $pharmasproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmasproduct $pharmasproduct)
    {
        request()->validate(Pharmasproduct::$rules);

        $valact = $pharmasproduct->quantity;

        if ($valact <= $request->quantity)
        {
            $pharmasproduct->update($request->all());

            $entranceData = $request->except('id');
            $entrance = Entrance::create($entranceData);
            $pharmasproduct->entrances()->attach($pharmasproduct->id);
            $entrance->quantity = $request->quantity - $valact;
            $entrance->save();

            return redirect()->route('pharmasproducts.index')
                ->with('success', 'Producto actualizado');
        }

        else
        {
            return redirect()->route('pharmasproducts.index')
            ->with('error', 'No puede realizar salidas aqui');
        }


    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pharmasproduct = Pharmasproduct::find($id)->delete();

        return redirect()->route('pharmasproducts.index')
            ->with('success', 'Producto eliminado');
    }
}
