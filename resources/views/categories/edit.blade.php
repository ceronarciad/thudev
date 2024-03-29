@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('categories.index') !!}">Categorias</a>
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
                              <strong>Actualizar Categoria</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => 'patch']) !!}

                              @include('categories.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection