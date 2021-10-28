@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Calculadora</h1>
    <a class="btn btn-block btn-dark my-2" href="{{route('calculadora.create')}}">Nueva operación</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Valor 1</th>
                        <th scope="col">Valor 2</th>
                        <th scope="col">Operador</th>
                        <th scope="col">Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($calculadora as $operacion)
                    <tr>
                        <th scope="row">{{$operacion->valor1}}</th>
                        <td>{{$operacion->valor2}}</td>
                        <td>{{$operacion->operador}}</td>
                        <td>{{$operacion->resultado}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="my-2">
        {{ $calculadora->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection
