@extends('layouts.app')

@section('template_title')
    Create Categorium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="container">
                    <div class="card card-default" style="border-color:#009688;">
                        <div class="card-header" style="background-color:#009688">
                            <span class="card-title">Crear Categoria</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('categoria.store') }}"  role="form" enctype="multipart/form-data">
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
