@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color:#5e35b1;">
                <div class="card-header">{{ __('Cuidado!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya iniciaste sesión!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
