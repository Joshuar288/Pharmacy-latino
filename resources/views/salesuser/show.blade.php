@extends('layouts.app')

@section('template_title')
    {{ $salesuser->name ?? "{{ __('Show') Salesuser" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Salesuser</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salesusers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sale:</strong>
                            {{ $salesuser->id_sale }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $salesuser->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
