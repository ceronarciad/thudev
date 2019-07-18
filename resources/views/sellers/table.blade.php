<div class="table-responsive-sm">
    <table class="table table-striped" id="sellers-table">
        <thead>
        <th>Nombre</th>
        <th>Descrición breve</th>
        <th>Descrición</th>
        <th>RFC</th>
        <th>Razón Social</th>
        <th>Banco</th>
        <th>Dirección</th>
        <th>Cuenta Bancaria</th>
        <th>Número Cuenta Clabe</th>
        <th>¿Es Activo?</th>
            <th colspan="3">Acción</th>
        </thead>
        <tbody>
        @foreach($sellers as $seller)
            <tr>
            <td>{!! $seller->name !!}</td>
            <td>{!! $seller->short_description !!}</td>
            <td>{!! $seller->description !!}</td>
            <td>{!! $seller->rfc !!}</td>
            <td>{!! $seller->brand !!}</td>
            <td>{!! $seller->bank !!}</td>
            <td>{!! $seller->address !!}</td>
            <td>{!! $seller->bank_account !!}</td>
            <td>{!! $seller->bank_number_clabe !!}</td>
            <td>{!! $seller->isActive !!}</td>
                <td>
                    {!! Form::open(['route' => ['sellers.destroy', $seller->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sellers.show', [$seller->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('sellers.edit', [$seller->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>