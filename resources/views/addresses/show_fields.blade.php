<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $addresses->id !!}</p>
</div>

<!-- Street Field -->
<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
    <p>{!! $addresses->street !!}</p>
</div>

<!-- Street Number Field -->
<div class="form-group">
    {!! Form::label('street_number', 'Street Number:') !!}
    <p>{!! $addresses->street_number !!}</p>
</div>

<!-- Suite Number Field -->
<div class="form-group">
    {!! Form::label('suite_number', 'Suite Number:') !!}
    <p>{!! $addresses->suite_number !!}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{!! $addresses->city !!}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $addresses->country !!}</p>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    <p>{!! $addresses->state !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $addresses->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $addresses->updated_at !!}</p>
</div>

