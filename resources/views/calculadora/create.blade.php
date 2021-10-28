@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Operacion nueva</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('calculadora.store')}}" method="post">
                @csrf
                <div class="d-flex">
                    <div class="form-group mr-2">
                        <input name="valor1" class="form-control" type="number" placeholder="valor1">
                    </div>
                    <div class="form-group mr-2">
                        <select name="operador" class="form-control">
                            @foreach ($operadores as $operador)
                            <option value="{{$operador}}">{{$operador}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-2">
                        <input name="valor2" class="form-control" type="number" placeholder="valor2">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
