
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $proveedore->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese el <b>nombre</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion') }}</label>
    <div>
        {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' .
        ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
        {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese <b>direccion</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $proveedore->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ingrese <b>telefono</b></small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('proveedore.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Actualizar</button>
            </div>
        </div>
    </div>
