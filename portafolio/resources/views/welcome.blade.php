@extends('layouts.template')
@section('content')

@foreach ($proyectos as $proyecto)
<tr>
    <td>
        {{$proyecto->nombre}}
    </td>
    <td>
        {{$proyecto->imagen}}
    </td>
    <td>
        {{$proyecto->descripcion}}
    </td>
    <td>
        {{$proyecto->url}}
    </td>
</tr>
@endforeach
@endsection