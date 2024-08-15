@extends('layout.layout')

@section('title', 'Clientes')

@section('content')
    <table class="table">
        <tbody>
            <tr>
                <td colspan="4">
                    <a href="{{ route('clientes.create') }}">
                        Nuevo cliente
                    </a>
                </td>
            </tr>
            <tr>
                <th colspan="4">
                    <h3>Listado de clientes</h3>
                </th>
            </tr>
            <tr>
                @if($clientes)
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>
                                <a href="{{ route('clientes.show', ['id' => $cliente->id]) }}">
                                    {{ $cliente->nombres }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>No existe ningún cliente para mostrar.</p>
                @endif
            </tr>
        </tbody>
    </table>
@endsection