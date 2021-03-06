@extends('layouts.admin')
@section('title','Crear Etiqueta')
@section('breadcrumb')
<li>
    <a href="{{('categories.index')}}">/ Etiquetas </a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de estiqueta</h3>
    </div>
    {!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}
    <div class="card-body">
        @include('admin.tags.form.form')
    </div>

    <div class="card-fooder">
        <a class="btn btn-danger float-right" href="{{route('tags.index')}}">Cancelar</a>
         
        <input type="submit" value="Guardar" class="btn btn-primary">
    </div> 
    {!! Form::close() !!} 
    
</div>
@endsection


