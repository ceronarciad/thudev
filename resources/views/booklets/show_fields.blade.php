<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booklet->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $booklet->name !!}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Código:') !!}
    <p>{!! $booklet->code !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'URL:') !!}
    <p>{!! $booklet->url !!}</p>
</div>

<!-- Code Html Field -->
<div class="form-group">
    {!! Form::label('code_html', 'Código HTML') !!}
    <p>{!! $booklet->code_html !!}</p>
</div>

<!-- Isactive Field -->
<div class="form-group">
    {!! Form::label('isActive', '¿Es Active?:') !!}
    <p>{!! $booklet->isActive !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $booklet->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $booklet->updated_at !!}</p>
</div>

