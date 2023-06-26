<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Pharmasproduct;
use App\Models\Medication;
use App\Models\Entrance;
use Illuminate\Http\Request;

/**
 * Class SaleController
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::paginate();
        $pharmasproducts = Pharmasproduct::all();

        return view('sale.index', compact('sales','pharmasproducts'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        $pharmasproducts = Pharmasproduct::all();
        return view('sale.create', compact('sale','pharmasproducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales = new Sale;
        $sales->sale_price = $request->input('sale_price');
        $sales->quantity = $request->input('quantity');
        $sales->id_product = $request->input('id_product');


        $pharmasproducts = Pharmasproduct::find($sales->id_product);

        if ($pharmasproducts)
        {
            $stockDisponible = $pharmasproducts->quantity;

            if ($sales->quantity <= $stockDisponible)
            {
                $pharmasproducts->quantity -= $sales->quantity;
                $pharmasproducts->save();
                $sales->save();
                return redirect()->route('sales.index')->with('success', 'Venta registrada exitosamente.');
            }

            else
            {
                return redirect()->route('sales.index')->with('error','No hay suficiente stock disponible. Cantidad disponible: ' . $stockDisponible)->withInput();
            }
        }



        else
        {
            return redirect()->route('sales.index')->with('error','No se encontro el producto ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);

        return view('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);
        $pharmasproducts = Pharmasproduct::all();

        return view('sale.edit', compact('sale','pharmasproducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        request()->validate(Sale::$rules);

        $sale->update($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Venta actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sale = Sale::find($id)->delete();

        return redirect()->route('sales.index')
            ->with('success', 'Venta eliminada');
    }
}
