@extends('layouts.app')

@section('template_title')
    Crear Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="container">
                    <div class="card card-default" style="border-color:#e57373">
                        <div class="card-header" style="background-color:#e57373;">
                            <span class="card-title">Crear Producto</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('productos.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('producto.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
