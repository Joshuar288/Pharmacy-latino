@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Name:</strong>
                            {{ $client->user_name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
