@extends('layouts.app')

@section('template_title')
    {{ $categorium->name ?? 'Show Categorium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Atras</a>
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
    </section>
@endsection
