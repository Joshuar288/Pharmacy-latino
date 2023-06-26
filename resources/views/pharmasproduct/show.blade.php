@extends('layouts.app')

@section('template_title')
    {{ $pharmasproduct->name ?? "{{ __('Show') Pharmasproduct" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pharmasproducts.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pharmasproduct->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $pharmasproduct->type }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de fabricacion:</strong>
                            {{ $pharmasproduct->datr_fabication }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de vencimiento:</strong>
                            {{ $pharmasproduct->date_due }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de compra:</strong>
                            {{ $pharmasproduct->purchase_price }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $pharmasproduct->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $pharmasproduct->doses }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pharmasproduct->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $pharmasproduct->id_provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
