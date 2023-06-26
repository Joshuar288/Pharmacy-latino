@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $sale->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $sale->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $sale->id_product }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
