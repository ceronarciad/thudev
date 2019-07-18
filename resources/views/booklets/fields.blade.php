<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Code Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Código') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="row">
    <!-- Url Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('url', 'URL') !!}
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Code Html Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('code_html', 'Código HTML') !!}
        {!! Form::textarea('code_html', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('booklets.index') !!}" class="btn btn-default">Cancelar</a>
    </div>
</div>
