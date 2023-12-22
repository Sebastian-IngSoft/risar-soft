<table>
    <thead style="">
        <tr>
            <th scope="col" style="width: 2.08cm"></th>
            <th scope="col" style="width: 0.54cm"></th>
            <th scope="col" style="width: 3.57cm"></th>
            <th scope="col" style="width: 4.20cm"></th>
            <th scope="col" style="width: 1.91cm"></th>
            <th scope="col" style="width: 1.80cm"></th>
            <th scope="col" style="width: 1.16cm"></th>
            <th scope="col" style="width: 2.23cm"></th>
            <th scope="col" style="width: 2.21cm"></th>
            <th scope="col" style="width: 3.56cm"></th>
            <th scope="col" style="width: 2.02cm"></th>
            <th scope="col" style="width: 2.37cm"></th>
            <th scope="col" style="width: 2.40cm"></th>
        </tr>
        <tr>
            <th scope="col" colspan="3" rowspan="3"></th>
            <th scope="col" colspan="7" rowspan="2">
                <div>TIPO DE DOCUMENTO:</div>
                <div class="fw-light">FORMATO</div>
            </th>
            <th scope="col" colspan="3" style="text-align: center">Código: CI-F-002</th>
        </tr>
        <tr>
            <th scope="col">Versión: 3</th>
            <th scope="col" colspan="2" style="height: 1.1cm">Fecha Vigencia: <br> 01/09/2017 </th>
        </tr>
        <tr>
            <th scope="col" colspan="7">
                <div>TÍTULO:</div>
                <div class="fw-light">REPORTE DE VISITA{{ $equation->site }}</div>
            </th>
            <th scope="col" colspan="3" style="height: 1.1cm">MACROPROCESO: <br>CONSTRUCCION</th>

        </tr>
        <tr>
            <th colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" style="background: #daeef3" colspan="13">I.- DATOS DEL PROYECTO</th>
        </tr>
        <tr>
            <th scope="col"colspan="3">Nombre Site Entel: </th>
            <th scope="col"colspan="6" style="text-align: center">{{ $equation->site }}</th>
            <th scope="col">ID Entel:</th>
            <th scope="col" colspan="3" style="text-align: center">0134676</th>
        </tr>
        <tr>
            <th scope="col"colspan="3">Nombre Site Operador / Torreta: </th>
            <th scope="col"colspan="6" style="text-align: center">{{ $equation->site }}</th>
            <th scope="col">ID O/T:</th>
            <th scope="col" colspan="3" style="text-align: center">PE-IC-1019</th>
        <tr>
            <th scope="col"colspan="2">Direccion: </th>
            <th scope="col"colspan="7" style="text-align: center">{{ $equation->address->larga }}</th>
            <th scope="col">Distrito:</th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->address->distrito }}</th>
        </tr>
        <tr>
            <th scope="col" colspan="2">Provincia: </th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->address->provincia }}</th>
            <th scope="col" colspan="2">Departamento</th>
            <th scope="col" colspan="2">{{ $equation->address->departamento }}</th>
            <th scope="col">Altura Torre:</th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->torre->altura }}</th>
        </tr>
        <tr>
            <th scope="col" colspan="2">Tipo Site: </th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->torre->estacion }}</th>
            <th scope="col" colspan="2">Tipo Torre:</th>
            <th scope="col" colspan="2">{{ $equation->torre->tipo }}</th>
            <th scope="col">Altura Edificación:</th>
            <th scope="col" colspan="3" style="text-align: center">{{ '-------' }}</th>
        </tr>
        <tr>
            <th scope="col" colspan="2">Longitud: </th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->address->longitud }}</th>
            <th scope="col" colspan="2">Latitud:</th>
            <th scope="col" colspan="2" style="text-align: center">{{ $equation->address->latitud }}</th>
            <th scope="col">Altura Total:</th>
            <th scope="col" colspan="3" style="text-align: center">{{ $equation->torre->altura }}</th>
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
            <th scope="col"colspan="10" style="text-align: center">RISAR INGENIEROS ESTRUCTURALES S.A.C.</th>
        </tr>
        <tr>
            <th scope="col"colspan="3">Supervisor de Contratista: </th>
            <th scope="col"colspan="6" style="text-align: center">Ing. Juan Rivera Hurtado</th>
            <th scope="col">Celular</th>
            <th scope="col" colspan="3" style="text-align: center">975 299 683</th>
        </tr>
        <tr>
            <th colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" style="background: #daeef3" colspan="13">III.- Fechas Compromiso:</th>
        </tr>
        <tr>
            <th scope="col" colspan="3">Fecha Inicio Real de obra:</th>
            <th scope="col" colspan="4" style="text-align: center">09/02/2021</th>
            <th scope="col" colspan="2">Fecha Termino Cronograma:</th>
            <th scope="col" colspan="4" style="text-align: center">09/02/2021</th>
        </tr>
        <tr>
            <th scope="col" colspan="3">Periodo de avance de obtra:</th>
            <th scope="col" colspan="2" style="text-align: center">Del: 09/02/021</th>
            <th scope="col" colspan="2" style="text-align: center">Hasta: 09/02/2021</th>
            <th scope="col" colspan="2">Fecha de Supervisión</th>
            <th scope="col" colspan="2" style="text-align: center">09/02/2021</th>{{-- no se respeto las proporciones con el original --}}
            <th scope="col" colspan="1">% Avance</th>
            <th scope="col" colspan="1" style="text-align: center">100%</th>
        </tr>
        <tr>
            <th colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" style="background: #daeef3" colspan="13">IV.- FOTOS PANORAMICAS DEL SITE:</th>
        </tr>
        <tr>
            <th scope="col" colspan="7" style="height: 12cm"></th>
            <th scope="col" colspan="6" style="height: 12cm"></th>
        </tr>
        <tr>
            <th scope="col" colspan="7" style="height: 12cm"></th>
            <th scope="col" colspan="6" style="height: 12cm"></th>
        </tr>
        <tr>
            <th colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" style="background: #daeef3" colspan="13">V.- PARTIDAS DE OBRA EN EJECUCIÓN:</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">ITEM</th>
            <th scope="col" colspan="11">PARTIDA DE OBRA SEGÚN AVANCE SEMANAL</th>
            <th scope="col">% DE AVANCE</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">1.00</th>
            <th scope="col" colspan="11">{{ $equation->images[4]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">2.00</th>
            <th scope="col" colspan="11">{{ $equation->images[5]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">3.00</th>
            <th scope="col" colspan="11">{{ $equation->images[6]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">4.00</th>
            <th scope="col" colspan="11">{{ $equation->images[7]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">5.00</th>
            <th scope="col" colspan="11">{{ $equation->images[8]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">6.00</th>
            <th scope="col" colspan="11">{{ $equation->images[9]->descripcion }}</th>
            <th scope="col" style="text-align: center">100</th>
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
            <th scope="col" colspan="6" style="height: 6cm"></th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="6"></th>
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
            <th scope="col" colspan="4">{{ $equation->images[4]->descripcion }}</th>
            <th scope="col" colspan="1">1</th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="1">2.00</th>
            <th scope="col" colspan="4">{{ $equation->images[5]->descripcion }}</th>
            <th scope="col" colspan="1">2</th>
        </tr>
        <tr>
            <th scope="col" colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" colspan="6" style="height: 6cm"></th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="6"></th>
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
            <th scope="col" colspan="4">{{ $equation->images[6]->descripcion }}</th>
            <th scope="col" colspan="1">3</th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="1">4.00</th>
            <th scope="col" colspan="4">{{ $equation->images[7]->descripcion }}</th>
            <th scope="col" colspan="1">4</th>
        </tr>
        <tr>
            <th scope="col" colspan="13"></th>
        </tr>
        <tr>
            <th scope="col" colspan="6" style="height: 6cm"></th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="6"></th>
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
            <th scope="col" colspan="4">{{ $equation->images[8]->descripcion }}</th>
            <th scope="col" colspan="1">5</th>
            <th scope="col" colspan="1"></th>
            <th scope="col" colspan="1">6.00</th>
            <th scope="col" colspan="4">{{ $equation->images[9]->descripcion }}</th>
            <th scope="col" colspan="1">6</th>
        </tr>

    </thead>
    <tbody>

        <tr>
        </tr>
    </tbody>
</table>
