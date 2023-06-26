<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha_de_registro') }}
            {{ Form::text('record_date', $record->record_date, ['class' => 'form-control' . ($errors->has('record_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de registro']) }}
            {!! $errors->first('record_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_de_empleado') }}
            {{ Form::text('employee_name', $record->employee_name, ['class' => 'form-control' . ($errors->has('employee_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de empleado']) }}
            {!! $errors->first('employee_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Accion') }}
            {{ Form::text('action', $record->action, ['class' => 'form-control' . ($errors->has('action') ? ' is-invalid' : ''), 'placeholder' => 'Accion']) }}
            {!! $errors->first('action', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
