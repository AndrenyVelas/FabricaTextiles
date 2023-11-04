
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $marca->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese <b>nombre</b> de la marca</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $marca->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese <b>estado</b> de la marca</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ Route('marca.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
