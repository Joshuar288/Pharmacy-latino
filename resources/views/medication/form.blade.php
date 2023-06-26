<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $medication->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $medication->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datr_fabication') }}
            {{ Form::text('datr_fabication', $medication->datr_fabication, ['class' => 'form-control' . ($errors->has('datr_fabication') ? ' is-invalid' : ''), 'placeholder' => 'Datr Fabication']) }}
            {!! $errors->first('datr_fabication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_due') }}
            {{ Form::text('date_due', $medication->date_due, ['class' => 'form-control' . ($errors->has('date_due') ? ' is-invalid' : ''), 'placeholder' => 'Date Due']) }}
            {!! $errors->first('date_due', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('purchase_price') }}
            {{ Form::text('purchase_price', $medication->purchase_price, ['class' => 'form-control' . ($errors->has('purchase_price') ? ' is-invalid' : ''), 'placeholder' => 'Purchase Price']) }}
            {!! $errors->first('purchase_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sale_price') }}
            {{ Form::text('sale_price', $medication->sale_price, ['class' => 'form-control' . ($errors->has('sale_price') ? ' is-invalid' : ''), 'placeholder' => 'Sale Price']) }}
            {!! $errors->first('sale_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doses') }}
            {{ Form::text('doses', $medication->doses, ['class' => 'form-control' . ($errors->has('doses') ? ' is-invalid' : ''), 'placeholder' => 'Doses']) }}
            {!! $errors->first('doses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $medication->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_provider') }}
            {{ Form::text('id_provider', $medication->id_provider, ['class' => 'form-control' . ($errors->has('id_provider') ? ' is-invalid' : ''), 'placeholder' => 'Id Provider']) }}
            {!! $errors->first('id_provider', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>