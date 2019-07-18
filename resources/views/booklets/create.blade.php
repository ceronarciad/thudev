@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('booklets.index') !!}">Catalogo</a>
      </li>
      <li class="breadcrumb-item active">Agregar</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Agregar Catalogo</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'booklets.store']) !!}

                                   @include('booklets.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
