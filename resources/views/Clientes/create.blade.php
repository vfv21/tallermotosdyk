@extends('layouts.app')
@section('titulo', 'Crear Cliente')
@section('cabecera', 'Crear Cliente')
@section('contenido') 
 <div class="flex justify-center">
 <div class="card w-96 shadow-2xl bg-base-100">
 <div class="card-body">
 <form action="{{route('clientes.store')}}" method="POST">
 @csrf
 <div class="form-control">
 <label class="label" for="nombre">
 <span class="label-text">Nombre</span>
 </label>
 <input type="text" name="nombre" placeholder="Nombre cliente" maxlength="45" 
class="input input-bordered" required />
 </div>
 <div class="form-control">
 <label class="label" for="apellido">
 <span class="label-text">Apellido</span>
 </label>
 <input type="text" name="apellido" placeholder="Escriba el apellido" maxlength="45" class="input 
input-bordered" />
 </div>
 <div class="form-control">
    <label class="label" for="celular">
    <span class="label-text">celular</span>
    </label>
    <input type="text" name="celular" placeholder="Escriba el celular" maxlength="45" class="input 
   input-bordered" />
    </div>
 <div class="form-control mt-6">
 <button class="btn btn-primary">Crear Cliente</button>
 <a href="{{ route('clientes.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
 </div>
 </form>
 </div>
 </div>
 </div>
@endsection