<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Code Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Código:') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Description Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('description', 'Descripción:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row justify-content-md-center">
    <div class="col-sm-2">
        <!-- IsActive Field -->
        <div class="form-group">
                {!! Form::label('isActive', '¿Es Activo? ') !!}
            <div class="form-check">
                <label class="switch switch-pill switch-primary">
                {!! Form::checkbox('isActive',null) !!}
                </label>
            </div>
        </div>  
    </div>    
</div>


<br>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('banks.index') !!}" class="btn btn-default">Cancelar</a>
</div>
