@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Reportes de ecuaciones</h1>
@stop

@section('content')

    <!-- Button trigger modal -->
    <br>
    <table class="table table-hover">
        <thead>

            <tr>
                <th scope="col">Site</th>
                <th scope="col">Direccion</th>
                <th scope="col">Torre</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equation as $itemequation)
                <tr>
                    <td>{{ $itemequation->site }}</td>
                    <td>
                        @if ($itemequation->address)
                            {{ $itemequation->address->larga }}
                        @endif
                    </td>
                    <td>
                        @if ($itemequation->torre)
                        {{ $itemequation->torre->tipo }}

                        @endif
                    </td>
                    <td class="text-center"><a href="{{ route('report.show', $itemequation) }}"
                            class="btn bg-success">Excel</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>



    <!-- Modals -->
@stop

@section('css')
@stop

@section('js')
    <script src="/risar/public/vendor/adminlte/dist/js/bootstrap.bundle.min.js">
        console.log('Hi!');
    </script>

@stop
