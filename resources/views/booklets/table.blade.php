<div class="table-responsive-sm">
    <table class="table table-striped" id="booklets-table">
        <thead>
        <th>Nombre</th>
        <th>Código</th>
        <th>URL</th>
        <th>Códifo HTML</th>
        <th>¿Es Activo?</th>
            <th colspan="3">Acción</th>
        </thead>
        <tbody>
        @foreach($booklets as $booklet)
            <tr>
            <td>{!! $booklet->name !!}</td>
            <td>{!! $booklet->code !!}</td>
            <td>{!! $booklet->url !!}</td>
            <td>{!! $booklet->code_html !!}</td>
            <td>{!! $booklet->isActive !!}</td>
                <td>
                    {!! Form::open(['route' => ['booklets.destroy', $booklet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('booklets.show', [$booklet->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('booklets.edit', [$booklet->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Estás Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>