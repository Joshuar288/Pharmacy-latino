@extends('layouts.app')

@section('template_title')
    {{ $provider->name ?? "{{ __('Show') Provider" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Provider</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('providers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Provider:</strong>
                            {{ $provider->name_provider }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $provider->address }}
                        </div>
                        <div class="form-group">
                            <strong>Address Mail:</strong>
                            {{ $provider->address_mail }}
                        </div>
                        <div class="form-group">
                            <strong>Number Phone:</strong>
                            {{ $provider->number_phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
