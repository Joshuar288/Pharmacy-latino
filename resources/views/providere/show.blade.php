@extends('layouts.app')

@section('template_title')
    {{ $providere->name ?? "{{ __('Show') Providere" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('provideres.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de proveedor:</strong>
                            {{ $providere->name_provider }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $providere->address }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electronico:</strong>
                            {{ $providere->address_mail }}
                        </div>
                        <div class="form-group">
                            <strong>Numero telefonico:</strong>
                            {{ $providere->number_phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
