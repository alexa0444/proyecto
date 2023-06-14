
    <div class="row g-3">
        <center>
        
        <div class="col-md-10">
            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Nombre', ['class' => 'input-group-text custom-class', 'id' => 'inputGroup-sizing-lg'])}}
                {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div><br>
        <div class="col-md-10">
            <div class="input-group input-group-lg">
                {{ Form::label('materia', 'Materia', ['class' => 'input-group-text custom-class', 'id' => 'inputGroup-sizing-lg']) }}
                {{ Form::text('materia', $tarea->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : '')]) }}
                {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div><br>
        <div class="col-md-10">
            <div class="input-group input-group-lg">
                {{ Form::label('fecha', 'Fecha', ['class' => 'input-group-text custom-class', 'id' => 'inputGroup-sizing-lg']) }}
                {{ Form::date('fecha', $tarea->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : '')]) }}
                {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div><br>
        <div class="col-md-10">
            <div class="input-group input-group-lg">
                {{ Form::label('estado', 'Estado', ['class' => 'input-group-text custom-class', 'id' => 'inputGroup-sizing-lg']) }}
                {{ Form::text('estado', $tarea->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div><br>

    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <br>
        <button type="submit" class="btn btn-primary">{{ __('CREAR') }}</button>
        <br>
    </div>

</center>
