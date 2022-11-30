@extends('layouts.app')

@section('template_title')
    Categorium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="card" style="border-color:#5e35b1;">
                        <div class="card-header" style="background-color:#b39ddb;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span class="ms-2 fw-bold" id="card_title">
                                    {{ __('Categoria') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('categoria.create') }}" class="btn btn-outline btn-sm float-right" style="border-color:#5e35b1; color:#5e35b1; background-color:white;" data-placement="left">
                                    {{ __('Crear Nueva Categoria') }}
                                    </a>
                                    <a href="{{ route('descarga-pdfcat') }}" class="btn btn-outline btn-sm float-right" style="border-color:#5e35b1; color:#5e35b1; background-color:white;" data-placement="left">
                                        Generar listado categorias(PDF)
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
                                            
                                            <th>Categoria</th>


                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categoria as $categorium)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $categorium->nombre_categoria }}</td>

                                                <td>
                                                    <form action="{{ route('categoria.destroy',$categorium->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-outline" style="border-color:#64b5f6; color:#64b5f6;" href="{{ route('categoria.show',$categorium->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar Categoria</a>
                                                        <a class="btn btn-sm btn-outline" style="border-color:#4caf50; color:#4caf50;" href="{{ route('categoria.edit',$categorium->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline btn-sm m-1" style="border-color:#d32f2f; color:#d32f2f;"><i class="fa fa-fw fa-trash"></i> Borrar</button>
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
                {!! $categoria->links() !!}
            </div>
        </div>
    </div>
@endsection
