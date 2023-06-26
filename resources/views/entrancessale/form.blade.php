<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_entrance') }}
            {{ Form::text('id_entrance', $entrancessale->id_entrance, ['class' => 'form-control' . ($errors->has('id_entrance') ? ' is-invalid' : ''), 'placeholder' => 'Id Entrance']) }}
            {!! $errors->first('id_entrance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sale') }}
            {{ Form::text('id_sale', $entrancessale->id_sale, ['class' => 'form-control' . ($errors->has('id_sale') ? ' is-invalid' : ''), 'placeholder' => 'Id Sale']) }}
            {!! $errors->first('id_sale', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>