@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border-color:#e57373">
                    <div class="card-header" style="background-color:#e57373;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">Mostrar Producto</span>
                            <div class="float-right">
                                <a class="btn btn-outline" style="border-color:#e57373; color:#e57373; background-color:white;" href="{{ route('productos.index') }}"> Atrás</a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto:</strong>
                            {{ $producto->cantidad_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto:</strong>
                            {{ $producto->precio_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categorium->nombre_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Producto:</strong>
                            {{ $producto->descripcion_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
