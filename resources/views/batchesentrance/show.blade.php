@extends('layouts.app')

@section('template_title')
    {{ $batchesentrance->name ?? "{{ __('Show') Batchesentrance" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Batchesentrance</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('batchesentrances.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Batche:</strong>
                            {{ $batchesentrance->id_batche }}
                        </div>
                        <div class="form-group">
                            <strong>Id Entrance:</strong>
                            {{ $batchesentrance->id_entrance }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
