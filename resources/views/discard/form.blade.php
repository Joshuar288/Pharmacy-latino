<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Razon') }}
            {{ Form::text('reason', $discard->reason, ['class' => 'form-control' . ($errors->has('reason') ? ' is-invalid' : ''), 'placeholder' => 'Razon']) }}
            {!! $errors->first('reason', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('quantity', $discard->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-3">
            <label for="product" class="form-label">
                <i class="fas fa-tag text-info"></i> Proveedores
            </label>
            <select class="form-control" id="product" name="id_product" required>
                <option value="">Seleccionar producto</option>
                @foreach ($pharmasproducts as $pharmasproduct)
                    <option value="{{ $pharmasproduct->id }}">{{ $pharmasproduct->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
