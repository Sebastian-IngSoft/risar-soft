@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <div class="d-flex">
        <h1>Reporte: {{ $equation->site }}</h1>
        <form class="ml-auto" action="{{ route('report.export', $equation) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success"> Exportar excel</button>
        </form>
    </div>
@stop

@section('content')

    <div class="">
        <table class="table table-bordered"">
            <thead>
                <tr>
                    <th scope="col" colspan="3" rowspan="3"><img src="{{ asset('/storage/client/entel.jpeg') }}"
                            alt=""></th>
                    <th scope="col" colspan="7" rowspan="2">
                        <div>TIPO DE DOCUMENTO:</div>
                        <div class="fw-light">FORMATO</div>
                    </th>
                    <th scope="col" colspan="3" class="text-center">Código: CI-F-002</th>
                </tr>
                <tr>
                    <th scope="col">Versión: 3</th>
                    <th scope="col" colspan="2">Fecha Vigencia: <br> 01/09/2017 </th>
                </tr>
                <tr>
                    <th scope="col" colspan="7">
                        <div>TÍTULO:</div>
                        <div class="fw-light">REPORTE DE VISITA{{ $equation->site }}</div>
                    </th>
                    <th scope="col" colspan="3">MACROPROCESO: <br>CONSTRUCCION</th>

                </tr>
                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">I.- DATOS DEL PROYECTO</th>
                </tr>
                <tr>
                    <th scope="col"colspan="3">Nombre Site Entel: </th>
                    <th scope="col"colspan="6" class="text-center">{{ $equation->site }}</th>
                    <th scope="col">ID Entel:</th>
                    <th scope="col" colspan="3" class="text-center">0134676</th>
                </tr>
                <tr>
                    <th scope="col"colspan="3">Nombre Site Operador / Torreta: </th>
                    <th scope="col"colspan="6" class="text-center">{{ $equation->site }}</th>
                    <th scope="col">ID O/T:</th>
                    <th scope="col" colspan="3" class="text-center">PE-IC-1019</th>
                <tr>
                    <th scope="col"colspan="2">Direccion: </th>
                    <th scope="col"colspan="7" class="text-center">{{ $equation->address->larga }}</th>
                    <th scope="col">Distrito:</th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->address->distrito }}</th>
                </tr>
                <tr>
                    <th scope="col" colspan="2">Provincia: </th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->address->provincia }}</th>
                    <th scope="col" colspan="2">Departamento</th>
                    <th scope="col" colspan="2">{{ $equation->address->departamento }}</th>
                    <th scope="col">Altura Torre:</th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->torre->altura }}</th>
                </tr>
                <tr>
                    <th scope="col" colspan="2">Tipo Site: </th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->torre->estacion }}</th>
                    <th scope="col" colspan="2">Tipo Torre:</th>
                    <th scope="col" colspan="2">{{ $equation->torre->tipo }}</th>
                    <th scope="col">Altura Edificación:</th>
                    <th scope="col" colspan="3" class="text-center">{{ '-------' }}</th>
                </tr>
                <tr>
                    <th scope="col" colspan="2">Longitud: </th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->address->longitud }}</th>
                    <th scope="col" colspan="2">Latitud:</th>
                    <th scope="col" colspan="2">{{ $equation->address->latitud }}</th>
                    <th scope="col">Altura Total:</th>
                    <th scope="col" colspan="3" class="text-center">{{ $equation->torre->altura }}</th>
                </tr>
                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">II.- DATOS DE LOS RESPONSABLES DE OBRA
                        DE
                        LA CONTRATISTA:</th>
                </tr>
                <tr>
                    <th scope="col"colspan="3">Contratista: </th>
                    <th scope="col"colspan="10" class="text-center">RISAR INGENIEROS ESTRUCTURALES S.A.C.</th>
                </tr>
                <tr>
                    <th scope="col"colspan="3">Supervisor de Contratista: </th>
                    <th scope="col"colspan="6" class="text-center">Ing. Juan Rivera Hurtado</th>
                    <th scope="col">Celular</th>
                    <th scope="col" colspan="3" class="text-center">975 299 683</th>
                </tr>
                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">III.- Fechas Compromiso:</th>
                </tr>
                <tr>
                    <th scope="col" colspan="3">Fecha Inicio Real de obra:</th>
                    <th scope="col" colspan="4" class="text-center">09/02/2021</th>
                    <th scope="col" colspan="2">Fecha Termino Cronograma:</th>
                    <th scope="col" colspan="4" class="text-center">09/02/2021</th>
                </tr>
                <tr>
                    <th scope="col" colspan="3">Periodo de avance de obtra:</th>
                    <th scope="col" colspan="2" class="text-center">Del: 09/02/021</th>
                    <th scope="col" colspan="2" class="text-center">Hasta: 09/02/2021</th>
                    <th scope="col" colspan="2">Fecha de Supervisión</th>
                    <th scope="col" colspan="2" class="text-center">09/02/2021</th>{{-- no se respeto las proporciones con el original --}}
                    <th scope="col" colspan="1">% Avance</th>
                    <th scope="col" colspan="1" class="text-center">100%</th>
                </tr>
                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">IV.- FOTOS PANORAMICAS DEL SITE:</th>
                </tr>
                @if ($equation->images->count() >= 4)
                    <tr>
                        <th scope="col" colspan="7">
                            <center><img src="{{ asset($equation->images[0]->url) }}" class="w-25" alt="">
                            </center>
                        </th>
                        <th scope="col" colspan="6">
                            <center><img src="{{ asset($equation->images[1]->url) }}" class="w-25" alt="">
                            </center>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="7">
                            <center><img src="{{ asset($equation->images[2]->url) }}" class="w-25" alt="">
                            </center>
                        </th>
                        <th scope="col" colspan="6">
                            <center><img src="{{ asset($equation->images[3]->url) }}" class="w-25" alt="">
                            </center>
                        </th>
                    </tr>
                    
                @else
                    <tr>
                        <th colspan="13"><h1 class="text-danger">SE NECESITA 4 IMAGENES</h1></th>
                    </tr>                    
                @endif

                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">V.- PARTIDAS DE OBRA EN EJECUCIÓN:</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">ITEM</th>
                    <th scope="col" colspan="11">PARTIDA DE OBRA SEGÚN AVANCE SEMANAL</th>
                    <th scope="col">% DE AVANCE</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">1.00</th>
                    <th scope="col" colspan="11">{{$equation->images[4]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">2.00</th>
                    <th scope="col" colspan="11">{{$equation->images[5]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">3.00</th>
                    <th scope="col" colspan="11">{{$equation->images[6]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">4.00</th>
                    <th scope="col" colspan="11">{{$equation->images[7]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">5.00</th>
                    <th scope="col" colspan="11">{{$equation->images[8]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">6.00</th>
                    <th scope="col" colspan="11">{{$equation->images[9]->descripcion}}</th>
                    <th scope="col" class="text-center">100</th>
                </tr>
                <tr>
                    <th colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" style="background: #daeef3" colspan="13">VI.- REPORTE GRAFICO</th>
                </tr>
                <tr>
                    <th scope="col" colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[4]->url) }}" class="w-50"></center></th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[5]->url) }}" class="w-50"></center></th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">1.00</th>
                    <th scope="col" colspan="4">{{$equation->images[4]->descripcion}}</th>
                    <th scope="col" colspan="1">1</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">2.00</th>
                    <th scope="col" colspan="4">{{$equation->images[5]->descripcion}}</th>
                    <th scope="col" colspan="1">2</th>
                </tr>
                <tr>
                    <th scope="col" colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[6]->url) }}" class="w-50"></center></th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[7]->url) }}" class="w-50"></center></th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">3.00</th>
                    <th scope="col" colspan="4">{{$equation->images[6]->descripcion}}</th>
                    <th scope="col" colspan="1">3</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">4.00</th>
                    <th scope="col" colspan="4">{{$equation->images[7]->descripcion}}</th>
                    <th scope="col" colspan="1">4</th>
                </tr>
                <tr>
                    <th scope="col" colspan="13"></th>
                </tr>
                <tr>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[8]->url) }}" class="w-50"></center></th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="6"><center><img src="{{ asset($equation->images[9]->url) }}" class="w-50"></center></th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">ITEM</th>
                    <th scope="col" colspan="4">PARTIDA</th>
                    <th scope="col" colspan="1">FOTO</th>
                </tr>
                <tr>
                    <th scope="col" colspan="1">5.00</th>
                    <th scope="col" colspan="4">{{$equation->images[8]->descripcion}}</th>
                    <th scope="col" colspan="1">5</th>
                    <th scope="col" colspan="1"></th>
                    <th scope="col" colspan="1">6.00</th>
                    <th scope="col" colspan="4">{{$equation->images[9]->descripcion}}</th>
                    <th scope="col" colspan="1">6</th>
                </tr>

            </thead>
            <tbody>

                <tr>
                </tr>
            </tbody>
        </table>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="/risar/public/vendor/adminlte/dist/js/bootstrap.bundle.min.js">
        console.log('Hi!');
    </script>

@stop
