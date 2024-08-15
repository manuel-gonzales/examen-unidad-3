@csrf
<tr>
    <th>
        Nombres y apellidos
    </th>
    <td>
        <input type="text" name="nombres" value="{{ old('nombres', $cliente->nombres) }}"><br>
        {{ $errors->first('nombres') }}
    </td>
</tr>
<tr>
    <th>
        Correo electrónico
    </th>
    <td>
        <input type="text" name="email" value="{{ old('email', $cliente->email) }}"><br>
        {{ $errors->first('email') }}
    </td>
</tr>
<tr>
    <th>
        Dirección
    </th>
    <td>
        <input type="text" name="direccion" value="{{ old('direccion', $cliente->direccion) }}"><br>
        {{ $errors->first('direccion') }}
    </td>
</tr>
<tr>
    <th>
        Teléfono
    </th>
    <td>
        <input type="number" name="telefono" inputmode="numeric" value="{{ old('telefono', $cliente->telefono) }}"><br>
        {{ $errors->first('telefono') }}
    </td>
</tr>
<tr>
    <td colspan="2" text-align="center">
        <button>
            {{ $btnText }}
        </button>
    </td>
</tr>