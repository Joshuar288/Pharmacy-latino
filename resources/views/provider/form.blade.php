<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_provider') }}
            {{ Form::text('name_provider', $provider->name_provider, ['class' => 'form-control' . ($errors->has('name_provider') ? ' is-invalid' : ''), 'placeholder' => 'Name Provider']) }}
            {!! $errors->first('name_provider', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $provider->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_mail') }}
            {{ Form::text('address_mail', $provider->address_mail, ['class' => 'form-control' . ($errors->has('address_mail') ? ' is-invalid' : ''), 'placeholder' => 'Address Mail']) }}
            {!! $errors->first('address_mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_phone') }}
            {{ Form::text('number_phone', $provider->number_phone, ['class' => 'form-control' . ($errors->has('number_phone') ? ' is-invalid' : ''), 'placeholder' => 'Number Phone']) }}
            {!! $errors->first('number_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>