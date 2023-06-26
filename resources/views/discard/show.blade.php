@extends('layouts.app')

@section('template_title')
    {{ $discard->name ?? "{{ __('Show') Discard" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Descarte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('discards.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Razon:</strong>
                            {{ $discard->reason }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $discard->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $discard->id_product }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
