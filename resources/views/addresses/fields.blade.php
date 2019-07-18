
<div class="row">
    <!-- Street Field -->
    <div class="form-group col-sm-8">
        {!! Form::label('street', 'Calle:') !!}
        {!! Form::text('street', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Street Number Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('street_number', 'Numero exterior:') !!}
        {!! Form::text('street_number', null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- Suite Number Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('suite_number', 'Numero Interior:') !!}
        {!! Form::text('suite_number', null, ['class' => 'form-control']) !!}
    </div>    
</div>



<div class="row">
    <!-- Country Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('country', 'País:') !!}
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
    </div>

    <!-- State Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('state', 'Estado:') !!}
        {!! Form::text('state', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Suite Number Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('city', 'Ciudad:') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>  

    <!-- Zip Code Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('zip_code', 'Código Postal:') !!}
        {!! Form::text('zip_code', null, ['class' => 'form-control', 'min' => '5', 'max' => '5']) !!}
    </div>        
</div>



<div class="row">
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('addresses.index') !!}" class="btn btn-default">Cancel</a>
    </div>

</div>