<div class="table-responsive-sm">
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
</div>