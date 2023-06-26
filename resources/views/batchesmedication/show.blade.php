@extends('layouts.app')

@section('template_title')
    {{ $batchesmedication->name ?? "{{ __('Show') Batchesmedication" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Lotes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('batchesmedications.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $batchesmedication->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $batchesmedication->type }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de fabricacion:</strong>
                            {{ $batchesmedication->datr_fabication }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de vencimiento:</strong>
                            {{ $batchesmedication->date_due }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de compra:</strong>
                            {{ $batchesmedication->purchase_price }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $batchesmedication->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $batchesmedication->doses }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $batchesmedication->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedores:</strong>
                            {{ $batchesmedication->id_provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
