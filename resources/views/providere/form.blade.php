<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre_del_proveedor') }}
            {{ Form::text('name_provider', $providere->name_provider, ['class' => 'form-control' . ($errors->has('name_provider') ? ' is-invalid' : ''), 'placeholder' => 'Name de proveedor']) }}
            {!! $errors->first('name_provider', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('address', $providere->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_electronico') }}
            {{ Form::text('address_mail', $providere->address_mail, ['class' => 'form-control' . ($errors->has('address_mail') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('address_mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_telefonico') }}
            {{ Form::text('number_phone', $providere->number_phone, ['class' => 'form-control' . ($errors->has('number_phone') ? ' is-invalid' : ''), 'placeholder' => 'Numero telefonico']) }}
            {!! $errors->first('number_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
