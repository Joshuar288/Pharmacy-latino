@extends('layouts.app')

@section('template_title')
    {{ $entrance->name ?? "{{ __('Show') Entrance" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrances.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $entrance->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $entrance->type }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de fabricacion:</strong>
                            {{ $entrance->datr_fabication }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de vencimiento:</strong>
                            {{ $entrance->date_due }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de compra:</strong>
                            {{ $entrance->purchase_price }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $entrance->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $entrance->doses }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $entrance->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $entrance->id_provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
