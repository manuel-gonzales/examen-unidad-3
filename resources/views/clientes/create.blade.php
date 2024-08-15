@extends('layout.layout')

@section('title', 'Registrar cliente')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Crear nuevo registro de cliente
            </th>
        </tr>
        <form action="{{ route('clientes.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
@endsection