<div class="table-responsive-sm">
    <table class="table table-striped" id="banks-table">
        <thead>
        <th>Nombre</th>
        <th>Código</th>
        <th>Descripción</th>
        <th>¿Es Activo?</th>
            <th colspan="3">Acción</th>
        </thead>
        <tbody>
        @foreach($banks as $bank)
            <tr>
            <td>{!! $bank->name !!}</td>
            <td>{!! $bank->code !!}</td>
            <td>{!! $bank->description !!}</td>
            <td>{!! $bank->isActive !!}</td>
                <td>
                    {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('banks.show', [$bank->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('banks.edit', [$bank->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Es Activo?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>