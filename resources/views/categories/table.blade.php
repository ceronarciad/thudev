{{-- <div class="table-responsive-sm">
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
</div> --}}




<div class="table-responsive-sm">
        <table class="table table-striped" id="table" class="display" style="width:100%" >
             <thead>
                 <tr class="thead-dark">
                     <th>#</th>
                     <th>Nombre</th>
                     <th>Descrición</th>
                     <th>¿Es Activo?</th>
                     <th class="no-sort">Accíon</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $a = 0; ?>
                 @foreach($categories as $category)
                 <?php $a++; ?>  
                 <tr>          
                     <td class="bg-info" width="5%"> {{$a}}  </td>
                         <td width="15%">{!! $category->name !!}</td>
                         <td width="45%">{!! $category->description !!}</td>
                         <td width="12%" align="center"> 
                             @if ($category->isActive == 1)
                                 <p class="text-success">ACTIVO</p>
                             @else
                                 <p class="text-danger" disabled="">INACTIVO</p>
                             @endif
                         </td>    
                         <td width="13%">
                                 {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                                 <div class='btn-group'>
                                     <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                     <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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