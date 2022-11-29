@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Atras</a>
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
