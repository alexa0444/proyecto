<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $estudiante->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Curso') }}
            {{ Form::text('Curso', $estudiante->Curso, ['class' => 'form-control' . ($errors->has('Curso') ? ' is-invalid' : ''), 'placeholder' => 'Curso']) }}
            {!! $errors->first('Curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>