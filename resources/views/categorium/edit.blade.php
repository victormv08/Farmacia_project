@extends('layouts.app')

@section('template_title')
    Update Categorium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="container">
                    <div class="card card-default" style="border-color:#009688">
                        <div class="card-header" style="background-color:#009688;">
                            <span class="card-title">Actualizar Categoria</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('categoria.update', $categorium->id) }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf

                                @include('categorium.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
