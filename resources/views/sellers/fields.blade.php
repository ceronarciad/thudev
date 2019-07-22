<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Short Description Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('short_description', 'Descripción breve:') !!}
        {!! Form::textarea('short_description', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
</div>

<div class="row">
    <!-- Description Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('description', 'Descripción:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Rfc Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Brand Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('brand', 'Razón Social:') !!}
        {!! Form::text('brand', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="row">    
    <!-- Bank Field -->
    <div class="form-group col-sm-4">
            {!! Form::label('bank', 'Banco:') !!}
            {!! Form::number('bank', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Bank Account Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('bank_account', 'Cuenta Bancaria:') !!}
        {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
    </div>    
    <!-- Bank Number Clabe Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('bank_number_clabe', 'Cuenta Clabe:') !!}
        {!! Form::text('bank_number_clabe', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::number('address', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('sellers.index') !!}" class="btn btn-default">Cancelar</a>
</div>