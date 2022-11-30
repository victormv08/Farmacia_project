@extends('layouts.app')

@section('template_title')
    {{ $categorium->name ?? 'Show Categorium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="card" style="border-color:#009688">
                        <div class="card-header" style="background-color:#009688;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span class="card-title">Mostrar Categoria</span>
                                <div class="float-right">
                                    <a class="btn btn-outline" style="border-color:#009688; color:#009688; background-color:white;" href="{{ route('categoria.index') }}"> Atrás</a>
                                </div>  
                                
                            </div>
                        </div>

                        <div class="card-body">
                            
                            <div class="form-group">
                                <strong>Nombre Categoria:</strong>
                                {{ $categorium->nombre_categoria }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
