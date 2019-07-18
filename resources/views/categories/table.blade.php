<div class="table-responsive-sm">
    <table class="table table-striped" id="categories-table">
        <thead>
        <th>Nombre</th>
        <th>Descrición</th>
        <th>¿Es Activo?</th>
        <th colspan="3">Acción</th>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr>
            <td>{!! $categories->name !!}</td>
            <td>{!! $categories->description !!}</td>
            <td>{!! $categories->isActive !!}</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('categories.show', [$categories->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('categories.edit', [$categories->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>