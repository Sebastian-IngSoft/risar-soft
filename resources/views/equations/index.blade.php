@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ecuaciones</h1>
@stop

@section('content')

    <!-- Button trigger modal -->
    <div  class="d-flex">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo site
        </button>
        <div class="ml-auto ">
            <form action="{{ route('import.equations') }}" method="POST" enctype="multipart/form-data" class="d-flex">
                @csrf
                <input type="file" name="file" id="" class="form-control" accept=".csv,.xlsx">
                <button type="submit" class="btn btn-success">Importar</button>
            </form>
        </div>
    </div>
    <br>
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
                    <td class="text-center"><a href="{{ route('equation.show', $itemequation->id) }}"
                            class="btn btn-primary">Ver</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>



    <!-- Modals -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear site</h1>
                </div>
                <form action="{{ route('equation.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input name="site" type="text" class="form-control form-control-lg" placeholder="Nombre">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="/risar/public/vendor/adminlte/dist/js/bootstrap.bundle.min.js">
        console.log('Hi!');
    </script>

@stop
