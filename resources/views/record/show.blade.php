@extends('layouts.app')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fecha de registro:</strong>
                            {{ $record->record_date }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de empleado:</strong>
                            {{ $record->employee_name }}
                        </div>
                        <div class="form-group">
                            <strong>Accion:</strong>
                            {{ $record->action }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
