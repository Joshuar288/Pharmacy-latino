@extends('layouts.app')

@section('template_title')
    {{ $salesclient->name ?? "{{ __('Show') Salesclient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Salesclient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salesclients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sale:</strong>
                            {{ $salesclient->id_sale }}
                        </div>
                        <div class="form-group">
                            <strong>Id Client:</strong>
                            {{ $salesclient->id_client }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
