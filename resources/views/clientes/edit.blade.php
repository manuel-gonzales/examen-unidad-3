@extends('layout.layout')

@section('title', 'Editar cliente')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Editar cliente
            </th>
        </tr>
        <form action="{{ route('clientes.update', $cliente) }}" method="POST">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
@endsection