<div class="table-responsive-sm">
    <table class="table table-striped" id="table" class="display" style="width:100%" >
        <thead>
            <tr class="thead-dark">
                <th>#</th>
                <th>Calle</th>
                <th>Número Int</th>
                <th>Número Ext</th>
                <th>País</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Código Postal</th>
                <th class="no-sort">Accíon</th>
            </tr>
        </thead>
        <tbody>
            <?php $a = 0; ?>
            @foreach($addresses as $address)
            <?php $a++; ?>  
            <tr>          
                <td class="bg-info"> {{$a}}  </td>
                    <td>{!! $address->street !!}</td>
                    <td>{!! $address->street_number !!}</td>
                    <td>{!! $address->suite_number !!}</td>
                    <td>{!! $address->country !!}</td>
                    <td>{!! $address->city !!}</td>
                    <td>{!! $address->state !!}</td>
                    <td>{!! $address->zip_code !!}</td>
                    <td>
                        {!! Form::open(['route' => ['addresses.destroy', $address->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('addresses.show', [$address->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{!! route('addresses.edit', [$address->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
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
        "pageLength": 25
    } );
} );
</script>
@stop