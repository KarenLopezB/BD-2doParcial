@extends('layout')
          
    @section('content')
    <div class="container">
        <a href="/agregar" class="btn btn-primary">CREAR</a>

      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @forelse ($datos as $dato)
        <tbody>    
          
          <tr>
              <td>{{ $dato->id }}</td>
              <td>{!! $dato->codigo !!}</td>
              <td>{{ $dato->descripcion }}</td>
              <td>{{ $dato->cantidad }}</td>
              <td>{{ $dato->precio }}</td>
              <td>
              <form action="{{ url("/{$dato->id}") }}" method="POST">
                <a href="{{ route('datos.editar', ['id' =>$dato->id]) }}" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>          
              </td>        
          </tr>
          @empty
            <p>No hay datos disponibles </br> <a href="/agregar">Agregar notas</a></p>
        </tbody>
        @endforelse
      </table>
      
    </div>
    @endsection