{{-- <div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
        <th>SKU</th>
        <th>Código de Barras</th>
        <th>Descripción breve</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Precio de Desceunto</th>
        <th>Stock</th>
        <th>Categoria</th>
        <th>¿Tiene Descuento?</th>
        <th>¿Es Activo?</th>
        <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
            <td>{!! $product->sku !!}</td>
            <td>{!! $product->code !!}</td>
            <td>{!! $product->short_description !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->discount_price !!}</td>
            <td>{!! $product->stock !!}</td>
            <td>{!! $product->category !!}</td>
            <td>{!! $product->hasDiscount !!}</td>
            <td>{!! $product->isActive !!}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div> --}}




<div class="table-responsive-sm">
    <table class="table table-striped" id="table" class="display" style="width:100%" >
         <thead>
             <tr class="thead-dark">
                 <th>#</th>
                 <th>SKU</th>
                 <th>Código de Barras</th>
                 <th>Precio</th>
                 <th>¿Tiene Descuento?</th>
                 <th>Precio de Descuento</th>
                 <th>Stock</th>
                 <th>Categoria</th>
                 <th>¿Es Activo?</th>
                 <th class="no-sort">Accíon</th>
             </tr>
         </thead>
         <tbody>
             <?php $a = 0; ?>
             @foreach($products as $product)
             <?php $a++; ?>  
             <tr>          
                 <td class="bg-info" width="5%"> {{$a}}  </td>
                 <td width="15%">{!! $product->sku !!}</td>
                 <td width="15%">{!! $product->code !!}</td>
                 <td width="5%">{!! $product->price !!}</td>
                 <td width="10%">
                    @if ($product->hasDiscount == 1)
                        <p class="text-warning"><b>DESCUENTO</b></p>
                    @else
                        <p class="text-info" disabled="">NA</p>
                    @endif
                 </td>
                 <td width="5%">{!! $product->discount_price !!}</td>
                 <td width="5%">{!! $product->stock !!}</td>
                 <td width="5%">{!! $product->category !!}</td>
                <td width="12%" align="center"> 
                         @if ($product->isActive == 1)
                             <p class="text-success">ACTIVO</p>
                         @else
                             <p class="text-danger" disabled="">INACTIVO</p>
                         @endif
                </td>    
                <td width="5%">
                             {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                             <div class='btn-group'>
                                 <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                 <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                 {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Es Activo?')"]) !!}
                             </div>
                             {!! Form::close() !!}
                     </td>
                 </tr>
             @endforeach
         </tbody>
     </table>
 
</div>
 
 
 @section('scripts')
 <script type="text/javascript">
 
 
 $(document).ready(function() {
     $('#table').DataTable( {
         "language": {
             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
         },
         "order" : [[0,"desc"]],
         "columnDefs": [{
           "targets": 'no-sort',
           "orderable": false,
         }],
         "pageLength": 25,
     } );
 } );
 </script>
 @stop  