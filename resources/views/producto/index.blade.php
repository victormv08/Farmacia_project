@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <span> 
            <div class="container text-center">
                <h3 class="ms-3">Bienvenido {{ Auth::user()->name }}</h3>
            </div>
        </span>
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="card" style="border-color:#5e35b1;">
                        <div class="card-header" style="background-color:#b39ddb;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- Mostrar mensaje de Bienvenida al usuario que haga login-->
                                <span class="ms-2 fw-bold" id="card_title">
                                    {{ __('Productos') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('productos.create') }}" class="btn btn-outline btn-sm float-right" style="border-color:#5e35b1; color:#5e35b1; background-color:white;"  data-placement="left">
                                    {{ __('Crear Nuevo Producto') }}
                                    </a>
                                    <a href="{{ route('descarga-pdf') }}" class="btn btn-outline btn-sm float-right" style="border-color:#5e35b1; color:#5e35b1; background-color:white;"  data-placement="left">
                                        Generar listado productos(PDF)
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped  table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>N°</th>
                                            
                                            <th>Nombre Producto</th>
                                            <th>Cantidad Producto</th>
                                            <th>Precio Producto</th>
                                            <th>Categoria</th>
                                            <th>Descripcion Producto</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $producto)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $producto->nombre_producto }}</td>
                                                <td>{{ $producto->cantidad_producto }}</td>
                                                <td>{{ $producto->precio_producto }}</td>
                                                <td>{{ $producto->categorium->nombre_categoria }}</td>
                                                <td>{{ $producto->descripcion_producto }}</td>

                                                <td>
                                                    <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-outline" style="border-color:#64b5f6; color:#64b5f6;" href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                        <a class="btn btn-sm btn-outline" style="border-color:#4caf50; color:#4caf50;" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        <br>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline btn-sm m-1" style="border-color:#d32f2f; color:#d32f2f;"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
