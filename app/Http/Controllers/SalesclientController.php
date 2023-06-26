<?php

namespace App\Http\Controllers;

use App\Models\Salesclient;
use Illuminate\Http\Request;

/**
 * Class SalesclientController
 * @package App\Http\Controllers
 */
class SalesclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesclients = Salesclient::paginate();

        return view('salesclient.index', compact('salesclients'))
            ->with('i', (request()->input('page', 1) - 1) * $salesclients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesclient = new Salesclient();
        return view('salesclient.create', compact('salesclient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Salesclient::$rules);

        $salesclient = Salesclient::create($request->all());

        return redirect()->route('salesclients.index')
            ->with('success', 'Salesclient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesclient = Salesclient::find($id);

        return view('salesclient.show', compact('salesclient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesclient = Salesclient::find($id);

        return view('salesclient.edit', compact('salesclient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Salesclient $salesclient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salesclient $salesclient)
    {
        request()->validate(Salesclient::$rules);

        $salesclient->update($request->all());

        return redirect()->route('salesclients.index')
            ->with('success', 'Salesclient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salesclient = Salesclient::find($id)->delete();

        return redirect()->route('salesclients.index')
            ->with('success', 'Salesclient deleted successfully');
    }
}
