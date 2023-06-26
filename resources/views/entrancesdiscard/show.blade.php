@extends('layouts.app')

@section('template_title')
    {{ $entrancesdiscard->name ?? "{{ __('Show') Entrancesdiscard" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entrancesdiscard</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrancesdiscards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Entrance:</strong>
                            {{ $entrancesdiscard->id_entrance }}
                        </div>
                        <div class="form-group">
                            <strong>Id Discard:</strong>
                            {{ $entrancesdiscard->id_discard }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
