@extends('layouts.app')

@section('template_title')
    {{ $entrancessale->name ?? "{{ __('Show') Entrancessale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entrancessale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrancessales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Entrance:</strong>
                            {{ $entrancessale->id_entrance }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sale:</strong>
                            {{ $entrancessale->id_sale }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
