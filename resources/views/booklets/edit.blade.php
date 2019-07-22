@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('booklets.index') !!}">Catalogos</a>
          </li>
          <li class="breadcrumb-item active">Actualizar</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Actualizar Catalogo</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($booklet, ['route' => ['booklets.update', $booklet->id], 'method' => 'patch']) !!}

                              @include('booklets.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection