{{-- <div class="table-responsive-sm">
    <table class="table table-striped" id="booklets-table">
        <thead>
        <th>Nombre</th>
        <th>Código</th>
        <th>URL</th>
        <th>Código HTML</th>
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
</div> --}}


<div class="table-responsive-sm">
        <table class="table table-striped" id="table" class="display" style="width:100%" >
             <thead>
                 <tr class="thead-dark">
                     <th>#</th>
                     <th>Nombre</th>
                     <th>Código</th>
                     <th>URL</th>
                     <th>Código HTML</th>
                     <th>¿Es Activo?</th>
                     <th class="no-sort">Accíon</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $a = 0; ?>
                 @foreach($booklets as $booklet)
                 <?php $a++; ?>  
                 <tr>          
                     <td class="bg-info" width="5%"> {{$a}}  </td>
                     <td width="20%">{!! $booklet->name !!}</td>
                     <td width="10%">{!! $booklet->code !!}</td>
                     <td width="15%"><a href="{!! $booklet->url !!}">Ver</a></td>
                     <td width="38%">{!! $booklet->code_html !!}</td>
                         <td width="12%" align="center"> 
                             @if ($booklet->isActive == 1)
                                 <p class="text-success">ACTIVO</p>
                             @else
                                 <p class="text-danger" disabled="">INACTIVO</p>
                             @endif
                         </td>    
                         <td width="13%">
                                 {!! Form::open(['route' => ['booklets.destroy', $booklet->id], 'method' => 'delete']) !!}
                                 <div class='btn-group'>
                                     <a href="{!! route('booklets.show', [$booklet->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                     <a href="{!! route('booklets.edit', [$booklet->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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
     }
     
  
        
     );
     </script>
     @stop