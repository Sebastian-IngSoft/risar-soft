@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Site: {{ $equation->site }}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            {{-- DIRECCION VIEW --}}
            <div class="col-4 ">
                <div class="card mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Direccion:</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @if ($equation->address)
                            <li class="list-group-item">Completa: {{ $equation->address->larga }}</li>
                            <li class="list-group-item">Departamento: {{ $equation->address->departamento }}</li>
                            <li class="list-group-item">Provincia: {{ $equation->address->provincia }}</li>
                            <li class="list-group-item">Distrito: {{ $equation->address->distrito }}</li>
                            <li class="list-group-item">Latitud: {{ $equation->address->latitud }}</li>
                            <li class="list-group-item">Longitud: {{ $equation->address->longitud }}</li>
                        @endif
                    </ul>
                    <div class="card-body">
                        @if (!$equation->address)
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#direccion">
                                Añadir
                            </button>
                        @else
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editardireccion">
                                Editar
                            </button>
                        @endif

                    </div>
                </div>
            </div>
            {{-- TORRE VIEW --}}
            <div class="col-4 ">
                <div class="card mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Torre</h5>
                    </div>
                    <ul class="h-100 list-group list-group-flush">
                        @if ($equation->torre)
                            <li class="list-group-item">Tipo: {{ $equation->torre->tipo }}</li>
                            <li class="list-group-item">Altura: {{ $equation->torre->altura . 'm' }}</li>
                            <li class="list-group-item">Estación: {{ $equation->torre->estacion }}</li>
                        @endif
                    </ul>
                    <div class="card-body ">
                        @if (!$equation->torre)
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#torre">
                                Añadir
                            </button>
                        @else
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editartorre">
                                Editar
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            {{-- CONTACTOS VIEW --}}
            <div class="col-4 ">
                <div class="card mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Contactos</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @if ($equation->contactos)

                            @foreach ($equation->contactos as $itemcontacto)
                                <li class="list-group-item">
                                    Nombre: {{ $itemcontacto->nombre }}
                                    <br>
                                    Telefono: {{ $itemcontacto->telefono }}
                                </li>
                            @endforeach
                        @endif

                    </ul>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactos">
                            Añadir
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <h3>Subir imagenes</h3>
        <form action="{{ route('image.file', $equation) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" accept="image/*">
                <label for="">Descripcion</label>
                <br>
                <div class="d-flex">
                    <input type="text"class="form-control"name="descripcion">
                    <button type="submit" class="btn btn-primary">Subir</button>
                </div>
            </div>
        </form>
        {{-- galeria --}}
        <div class="d-flex">
            @foreach ($equation->images as $itemimage)
                <div class="m-2">
                    <img src="{{ asset($itemimage->url) }}" alt="" class="w-50 m-2">
                    <br>
                    {{$itemimage->descripcion}}
                    <br>
                    <a href="{{ route('image.destroy', $itemimage->id) }}" class="btn btn-danger">Eliminar</a>
                </div>
            @endforeach
        </div>
    </div>
    {{--
    <form action="{{ route('equation.excel') }}" method="POST" target="__blank">
        @csrf
        <button class="btn btn-primary" type="submit">excel</button>
    </form>
    --}}
    {{-- Modals --}}
    {{-- DIRECCION STORE --}}
    <div class="modal fade" id="direccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Direccion</h1>
                </div>
                <form action="{{ route('address.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input name="larga" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Direccion completa">
                        <input name="departamento" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Departamento">
                        <input name="provincia" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Provincia">
                        <input name="distrito" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Distrito">
                        <input name="latitud" type="number" step="any" class="form-control form-control-lg mb-1"
                            placeholder="Latitud">
                        <input name="longitud" type="number" step="any" class="form-control form-control-lg mb-1"
                            placeholder="Longitud">
                        <input name="equation_id" type="text" hidden value="{{ $equation->id }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- EDITAR DIRECCION --}}
    <div class="modal fade" id="editardireccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar direccion</h1>
                </div>
                @if ($equation->address)
                    <form action="{{ route('address.update', $equation->address) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <label for="">Direccion</label>
                            <input value="{{ $equation->address->larga }}" name="larga" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Direccion completa">
                            <label for="">Departamento</label>
                            <input value="{{ $equation->address->departamento }}" name="departamento" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Departamento">
                            <label for="">Provincia</label>
                            <input value="{{ $equation->address->provincia }}" name="provincia" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Provincia">
                            <label for="">Distrito</label>
                            <input value="{{ $equation->address->distrito }}" name="distrito" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Distrito">
                            <label for="">Latitud</label>
                            <input value="{{ $equation->address->latitud }}" name="latitud" type="number"
                                step="any" class="form-control form-control-lg mb-1" placeholder="Latitud">
                            <label for="">Longitud</label>
                            <input value="{{ $equation->address->longitud }}" name="longitud" type="number"
                                step="any" class="form-control form-control-lg mb-1" placeholder="Longitud">
                            <input value="{{ $equation->address->id }}" name="id" type="text" hidden
                                value="{{ $equation->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
    {{-- TORRES STORE --}}
    <div class="modal fade" id="torre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Torre</h1>
                </div>
                <form action="{{ route('torre.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input name="tipo" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Tipo">
                        <input name="altura" type="number" step="any" class="form-control form-control-lg mb-1"
                            placeholder="Altura">
                        <input name="estacion" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Estacion">
                        <input name="equation_id" type="text" hidden value="{{ $equation->id }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- EDITAR TORRE --}}
    <div class="modal fade" id="editartorre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar torre</h1>
                </div>
                @if ($equation->torre)
                    <form action="{{ route('torre.update', $equation->torre) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <label for="">Tipo de torre</label>
                            <input value="{{ $equation->torre->tipo }}" name="tipo" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Tipo de torre">
                            <label for="">Altura</label>
                            <input value="{{ $equation->torre->altura }}" name="altura" type="number" step="any"
                                class="form-control form-control-lg mb-1" placeholder="Altura">
                            <label for="">Estacion</label>
                            <input value="{{ $equation->torre->estacion }}" name="estacion" type="text"
                                class="form-control form-control-lg mb-1" placeholder="Provincia">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
    {{-- CONTACTOS AÑADIR --}}

    <div class="modal fade" id="contactos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo contacto</h1>
                </div>
                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="">Nombre</label>
                        <input name="nombre" type="text" class="form-control form-control-lg mb-1"
                            placeholder="Nombre">
                        <label for="">Telefono</label>
                        <input name="telefono" type="number" step="any" class="form-control form-control-lg mb-1"
                            placeholder="Telefono">
                        <input name="equation_id" type="text" hidden value="{{ $equation->id }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





@stop

@section('css')
@stop

@section('js')
    <script src="/risar/public/vendor/adminlte/dist/js/bootstrap.bundle.min.js"></script>

@stop
