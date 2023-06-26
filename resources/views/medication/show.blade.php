@extends('layouts.app')

@section('template_title')
    {{ $medication->name ?? "{{ __('Show') Medication" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medication</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medications.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $medication->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $medication->type }}
                        </div>
                        <div class="form-group">
                            <strong>Datr Fabication:</strong>
                            {{ $medication->datr_fabication }}
                        </div>
                        <div class="form-group">
                            <strong>Date Due:</strong>
                            {{ $medication->date_due }}
                        </div>
                        <div class="form-group">
                            <strong>Purchase Price:</strong>
                            {{ $medication->purchase_price }}
                        </div>
                        <div class="form-group">
                            <strong>Sale Price:</strong>
                            {{ $medication->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Doses:</strong>
                            {{ $medication->doses }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $medication->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Id Provider:</strong>
                            {{ $medication->id_provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
