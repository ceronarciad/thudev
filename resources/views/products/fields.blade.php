<div class="row">
    <!-- Sku Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('sku', 'SKU:') !!}
        {!! Form::text('sku', null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- Code Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Código de Barras:') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Short Description Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('short_description', 'Titulo o Descripción breve:') !!}
        {!! Form::textarea('short_description', null, ['class' => 'form-control', 'rows' => '1']) !!}
    </div>

    <!-- Category Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('category', 'Categoria:') !!}
        {!! Form::number('category', null, ['class' => 'form-control']) !!}
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
    <!-- Price Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('price', 'Precio Recomendado:') !!}
        {!! Form::number('price', null,['class' => 'form-control','step'=>'any']) !!}
    </div>

    <!-- Hasdiscount Field -->
    <div class="form-check col-sm-2">
            {!! Form::label('hasDiscount', '¿Tiene Descuento? ') !!}
            <br>
            {!! Form::checkbox('hasDiscount', null ) !!}
    </div>
    
    <!-- Discount Percent Field -->
    <div class="form-group col-sm-2">
            {!! Form::label('discount_percent', 'Porcentaje de descuento:') !!}
            {!! Form::number('discount_percent', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
    </div>
        
    <!-- Discount Price Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('discount_price', 'Precio de Descuento:') !!}
        {!! Form::number('discount_price', null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- Stock Field -->
    <div class="form-group col-sm-2">
            {!! Form::label('stock', 'Stock:') !!}
            {!! Form::number('stock', null, ['class' => 'form-control']) !!}
    </div>    

</div>    

<br>

<!-- IsActive Field -->
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
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancelar</a>
</div>


@section('scripts')
<script type="text/javascript">

function setDiscount(price,percent){
        var result = price*percent/100;
        result = price - result;
        $("#discount_price").val(result);
}


$(document).ready(function() {
        var price = 0;
        var percent = 0;
        
        $('#hasDiscount').change(function() {
        if($(this).is(":checked")) {
            $('#discount_percent').prop("disabled", false); 
        }else{
            $('#discount_percent').prop("disabled", true);       
        }          
        });

        $('#price').keyup(function() {
            price = this.value;
            if ($('#hasDiscount').is(':checked')) {
                setDiscount(price,percent)                
            }
        });      
        
        $('#discount_percent').keyup(function() {
            percent = this.value;
            if ($('#hasDiscount').is(':checked')) {
                setDiscount(price,percent)                
            }
        });   

} 

);
</script>
@stop