<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $pharmasproduct->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $pharmasproduct->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_fabricacion') }}
            {{ Form::text('datr_fabication', $pharmasproduct->datr_fabication, ['class' => 'form-control' . ($errors->has('datr_fabication') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de fabricacion']) }}
            {!! $errors->first('datr_fabication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_vencimiento') }}
            {{ Form::text('date_due', $pharmasproduct->date_due, ['class' => 'form-control' . ($errors->has('date_due') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de vencimiento']) }}
            {!! $errors->first('date_due', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio_de_compra') }}
            {{ Form::text('purchase_price', $pharmasproduct->purchase_price, ['class' => 'form-control' . ($errors->has('purchase_price') ? ' is-invalid' : ''), 'placeholder' => 'Precio de compra']) }}
            {!! $errors->first('purchase_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio_de_venta') }}
            {{ Form::text('sale_price', $pharmasproduct->sale_price, ['class' => 'form-control' . ($errors->has('sale_price') ? ' is-invalid' : ''), 'placeholder' => 'Precio de venta']) }}
            {!! $errors->first('sale_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dosis') }}
            {{ Form::text('doses', $pharmasproduct->doses, ['class' => 'form-control' . ($errors->has('doses') ? ' is-invalid' : ''), 'placeholder' => 'Dosis']) }}
            {!! $errors->first('doses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('quantity', $pharmasproduct->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-3">
            <label for="providere" class="form-label">
                <i class="fas fa-tag text-info"></i> Proveedores
            </label>
            <select class="form-control" id="providere" name="id_provider" required>
                <option value="">Seleccionar Proveedor</option>
                @foreach ($provideres as $providere)
                    <option value="{{ $providere->id }}">{{ $providere->name_provider }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
