<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('ID_libro') }}
            {{ Form::text('ID_libro', $prestamo->ID_libro, ['class' => 'form-control' . ($errors->has('ID_libro') ? ' is-invalid' : ''), 'placeholder' => 'Id Libro']) }}
            {!! $errors->first('ID_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_libro') }}
            {{ Form::text('Nombre_libro', $prestamo->Nombre_libro, ['class' => 'form-control' . ($errors->has('Nombre_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Libro']) }}
            {!! $errors->first('Nombre_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_prestamo') }}
            {{ Form::text('Fecha_prestamo', $prestamo->Fecha_prestamo, ['class' => 'form-control' . ($errors->has('Fecha_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Prestamo']) }}
            {!! $errors->first('Fecha_prestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_devolucion') }}
            {{ Form::text('Fecha_devolucion', $prestamo->Fecha_devolucion, ['class' => 'form-control' . ($errors->has('Fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion']) }}
            {!! $errors->first('Fecha_devolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_estudiante') }}
            {{ Form::text('ID_estudiante', $prestamo->ID_estudiante, ['class' => 'form-control' . ($errors->has('ID_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiante']) }}
            {!! $errors->first('ID_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_estudiante') }}
            {{ Form::text('Nombre_estudiante', $prestamo->Nombre_estudiante, ['class' => 'form-control' . ($errors->has('Nombre_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Estudiante']) }}
            {!! $errors->first('Nombre_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $prestamo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
