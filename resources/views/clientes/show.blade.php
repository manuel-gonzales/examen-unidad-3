@extends('layout.layout')

@section('title', 'Cliente | '.$cliente->id)

@section('content')
    <table class="table">
        <tr>
            <td colspan="4">
                <strong>{{ $cliente->nombres }}</strong>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Correo electrónico: {{ $cliente->email }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Dirección: {{ $cliente->direccion }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Teléfono: {{ $cliente->telefono }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Registro creado: {{ $cliente->created_at->diffForHumans() }}
            </td>
        </tr>
    </table>
    <a href="{{ route('clientes.edit', $cliente) }}">
        Editar
    </a><br>
    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>
            Eliminar
        </button>
    </form>
    <a href="/clientes">
        <- Regresar
    </a>
@endsection