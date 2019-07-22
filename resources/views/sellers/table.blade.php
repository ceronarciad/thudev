{{-- <div class="table-responsive-sm">
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
</div> --}}



<div class="table-responsive-sm">
    <table class="table table-striped" id="table" class="display" style="width:100%" >
         <thead>
             <tr class="thead-dark">
                 <th>#</th>
                 <th>Nombre</th>
                 <th>Descrición breve</th>
                 <th>RFC</th>
                 <th>Razón Social</th>
                 <th>¿Es Activo?</th>
                 <th class="no-sort">Accíon</th>
             </tr>
         </thead>
         <tbody>
             <?php $a = 0; ?>
             @foreach($sellers as $seller)
             <?php $a++; ?>  
             <tr>          
                    <td class="bg-info" width="5%"> {{$a}}  </td>
                    <td>{!! $seller->name !!}</td>
                    <td>{!! $seller->short_description !!}</td>               
                    <td>{!! $seller->rfc !!}</td>
                    <td>{!! $seller->brand !!}</td>
                     <td width="12%" align="center"> 
                         @if ($seller->isActive == 1)
                             <p class="text-success">ACTIVO</p>
                         @else
                             <p class="text-danger" disabled="">INACTIVO</p>
                         @endif
                     </td>    
                     <td width="13%">
                             {!! Form::open(['route' => ['sellers.destroy', $seller->id], 'method' => 'delete']) !!}
                             <div class='btn-group'>
                                 <a href="{!! route('sellers.show', [$seller->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                 <a href="{!! route('sellers.edit', [$seller->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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