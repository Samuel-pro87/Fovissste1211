@extends('layouts.app')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
    @inject('codigo', 'App\Services\Codigos')
    <!-- Page Content -->
    <!-- Dynamic Table Full -->
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                <thead class="table-info">
                    <tr>
                        <th class="text-center">Ejecutivo</th>
                        <th class="d-none d-sm-table-cell"><input id="ejecutivo" type="text" class="form-control"
                                name="ejecutivo" autocomplete="off" value="{{ $det->ejecutivo }}" disabled></th>
                        <th class="d-none d-sm-table-cell">Estatus</th>
                        <th class="d-none d-sm-table-cell"><input id="estatus" type="text" class="form-control"
                                name="estatus" autocomplete="off" value="{{ $det->estatus }}" disabled></th>
                    </tr>
                </thead>
            </table>

            <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="p-0">
                        <div class="form-group row">
                            <label for="rfc" class="col-md-5 col-form-label text-md-right">RFC:</label>
                            <div class="col-md-7">
                                <input id="rfc" type="text" class="form-control" name="rfc" value="{{ $det->rfc }}"
                                    readonly>
                            </div>
                            <label for="nombre" class="col-md-5 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-7">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $det->nombre }}"
                                    readonly>
                            </div>
                            <label for="idcredito" class="col-md-5 col-form-label text-md-right">Id Crédito:</label>
                            <div class="col-md-7">
                                <input id="idCredito" type="text" class="form-control" name="idCredito"
                                    value="{{ $det->idCredito }}" required>
                            </div>
                            <label for="curp" class="col-md-5 col-form-label text-md-right">CURP:</label>
                            <div class="col-md-7">
                                <input id="curp" type="text" class="form-control" name="curp" value="{{ $det->curp }}"
                                    readonly>
                            </div>
                            <label for="estatusL" class="col-md-5 col-form-label text-md-right">Estatus Laboral:</label>
                            <div class="col-md-7">
                                <input id="estatusL" type="text" class="form-control" name="estatusL"
                                    value="{{ $det->estatusLaboral }}" readonly>
                            </div>

                            <label for="calle" class="col-md-5 col-form-label text-md-right">Calle:</label>
                            <div class="col-md-7">
                                <input id="calle" type="text" class="form-control" name="calle" value="{{ $det->calle }}"
                                    readonly>
                            </div>
                            <label for="colonia" class="col-md-5 col-form-label text-md-right">Colonia:</label>
                            <div class="col-md-7">
                                <input id="colonia" type="text" class="form-control" name="colonia"
                                    value="{{ $det->colonia }}" readonly>
                            </div>
                            <label for="cp" class="col-md-5 col-form-label text-md-right">C. P.:</label>
                            <div class="col-md-7">
                                <input id="cp" type="text" class="form-control" name="cp" value="{{ $det->cp }}" readonly>
                            </div>
                            <label for="mora" class="col-md-5 col-form-label text-md-right">Mora:</label>
                            <div class="col-md-7">
                                <input id="mora" type="text" class="form-control" name="mora" value="{{ $det->mora }}"
                                    readonly>
                            </div>
                        </div>
                    </div>

                    <div class="p-0 border-t border-gray-200 dark:border-gray-700 md:border-t-0">
                        <div class="form-group row">
                            <label for="estatuspre" class="col-md-5 col-form-label text-md-right">Estatus
                                Preliminar:</label>
                            <div class="col-md-7">
                                <input id="estatuspre" type="text" class="form-control" name="estatuspre"
                                    value="{{ $det->ejecutivo }}" readonly>
                            </div>
                            <label for="estatuspre" class="col-md-5 col-form-label text-md-right">Segmento</label>
                            <div class="col-md-7">
                                <input id="estatuspre" type="text" class="form-control" name="estatuspre"
                                    value="{{ $det->segemento }}" readonly>
                            </div>

                            <label for="fasignacion" class="col-md-5 col-form-label text-md-right">Fecha Asignación:</label>
                            <div class="col-md-7">
                                <input id="fasignacion" type="text" class="form-control" name="fasignacion"
                                    value="{{ $det->fechaAsignacion }}" readonly>
                            </div>
                            <label for="fcredito" class="col-md-5 col-form-label text-md-right">Fecha Crédito:</label>
                            <div class="col-md-7">
                                <input id="fcredito" type="text" class="form-control" name="fcredito"
                                    value="{{ $det->fechaCredito }}" readonly>
                            </div>

                            <label for="montoI" class="col-md-5 col-form-label text-md-right">Monto Inicial:</label>
                            <div class="col-md-7">
                                <input id="montoI" type="text" class="form-control" name="montoI"
                                    value="{{ $det->montoInicial }}" readonly>
                            </div>
                            <label for="adeudoV" class="col-md-5 col-form-label text-md-right">Adeudo Vencido:</label>
                            <div class="col-md-7">
                                <input id="adeudoV" type="text" class="form-control" name="adeudoV"
                                    value="{{ $det->adeudoVencido }}" readonly>
                            </div>

                            <label for="saldoC" class="col-md-5 col-form-label text-md-right">Saldo Crédito:</label>
                            <div class="col-md-7">
                                <input id="saldoC" type="text" class="form-control" name="saldoC"
                                    value="{{ $det->saldoCredito }}" readonly>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-3 ">

                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-rounded btn-primary min-width-125 mb-10"
                                    data-toggle="tooltip" title="Actualiza Crédito"><i class="fas fa-save">Actualizar
                                        crédito</i></button>
                            </div>
                            <div class="col-md-3 ">

                            </div>
                        </div>
                    </div>

                    <div class="p-2 border-t border-gray-200 dark:border-gray-700 md:border-4">
                        <form action="{{ route('mail.store') }}" method="POST">
                            @csrf
                            <table class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                                <thead>
                                    <tr>
                                        <th class="d-none d-sm-table-cell"><input id="email" type="text"
                                                class="form-control" name="email" autocomplete="off"
                                                placeholder="Correo electronico" required></th>
                                        <th class="d-none d-sm-table-cell"><input id="rfc" type="text" class="form-control"
                                                name="rfc" value="{{ $det->rfc }}" required hidden><input id="ejecutivo"
                                                type="text" class="form-control" name="ejecutivo" autocomplete="off"
                                                value="{{ $det->ejecutivo }}" required hidden> </th>
                                        <th class="d-none d-sm-table-cell"><select name="tipoEmail"
                                                class="custom-select mr-sm-2" id="tipo">
                                                <option value="1" selected>Personal</option>
                                                <option value="2">Laboral</option>
                                            </select></th>
                                    </tr>
                                    <tr>
                                        <td><button type="submit" class="btn btn-rounded btn-primary min-width-125 mb-1"
                                                data-toggle="tooltip" title="Agregar Email">Agregar Email</button></td>
                                    </tr>
                                </thead>
                            </table>
                        </form>

                        <form action="{{ route('telefono.store') }}" method="POST">
                            @csrf
                            <div class="p-0 border-t border-gray-200 dark:border-gray-700">
                                <table
                                    class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                                    <thead>
                                        <tr>Teléfono <input id="telefono" type="text" class="form-control" name="telefono"
                                                autocomplete="off" placeholder="" required></tr>
                                        <tr>Tipo de Teléfono <select name="tipo" class="custom-select mr-sm-2" id="tipo">
                                                <option value="1" selected>Particular</option>
                                                <option value="2">Familiar</option>
                                                <option value="3">Laboral</option>
                                                <option value="4">Terceros</option>
                                            </select></tr>
                                        <tr>Estatus de Teléfono <select name="status" class="custom-select mr-sm-2"
                                                id="status">
                                                <option value="1" selected>Activo</option>
                                                <option value="2">Sin respuesta</option>
                                            </select></tr>
                                        <tr>ext. <input id="ext" type="text" class="form-control" name="ext"
                                                autocomplete="off" placeholder="ext."></tr>
                                        <br>
                                        <tr><button type="submit" class="btn btn-rounded btn-primary min-width-125 mb-1"
                                                data-toggle="tooltip" title="Agregar teléfono Nvo.">Agregar
                                                Teléfono</button></tr>
                                        <input id="rfc" type="text" class="form-control" name="rfc" value="{{ $det->rfc }}"
                                            required hidden>
                                        <input id="ejecutivo" type="text" class="form-control" name="ejecutivo"
                                            autocomplete="off" value="{{ $det->ejecutivo }}" required hidden>
                                    </thead>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-1">

                    <div class="block-content block-content-full">
                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            <form action="{{ route('gestion.store') }}" method="POST">
                                @csrf
                                <table
                                    class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                                    <thead>
                                        <tr>
                                            <div class="col-md-4">
                                                <input id="idCredito" type="text" class="form-control" name="idCredito"
                                                    value="{{ $det->idCredito }}" required hidden>
                                                <input id="ejecutivo" type="text" class="form-control" name="ejecutivo"
                                                    autocomplete="off" value="{{ $det->ejecutivo }}" required hidden>
                                            </div>
                                            <td>
                                                <input id="contacto" type="text" class="form-control"
                                                    placeholder="Nombre de Contacto" name="contacto" autocomplete="off">

                                                <select class="form-control custom-select mr-sm-1" name="accion"
                                                    id="accion_id">
                                                    @foreach ($codigo->get() as $index => $codigoAccion)
                                                        <option value="{{ $index }}"
                                                            {{ old('codigo_id') == $index ? 'selected' : '' }}>
                                                            {{ $codigoAccion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input id="telefono" type="text" class="form-control" placeholder="Teléfono"
                                                    name="telefono" required autocomplete="off">
                                                @error('telefono')

                                                    <strong>*{{ $message }}</strong>

                                                @enderror
                                                <select class="form-control custom-select mr-sm-1" name="resultado"
                                                    id="resultado_id">

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control custom-select mr-sm-2" name="parentesco"
                                                    id="parentesco">
                                                    <option selected>Contacto...</option>
                                                    <option value="1">Particular</option>
                                                    <option value="2">Familiar</option>
                                                    <option value="3">Laboral</option>
                                                    <option value="4">Terceros</option>
                                                </select>
                                                <textarea class="form-control" name="comentario" id="comentario" rows="2"
                                                    placeholder="Ingrea tú comentario"></textarea>
                                            </td>
                                            <td><button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                    title="Nueva Gestión">Iniciar Gestion</button></td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="block-content block-content-full">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <table class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                <div class="text-center">
                    <h3><b>Historial</b></h3>
                </div>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>tipo de llamada</th>
                        <th>Observación</th>
                        <th>Usuario</th>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <td>20/10/2020</td>
                    <td>llamada de salida</td>
                    <td>No conocen al titular</td>
                    <td>FOVI1</td>
                    <td></td>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

    <!-- END Page Content -->
@endsection

@section('sc')
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script>
        $(document).ready(function() {

            //función para cambiar el menú de respuesta de acuerdo al id de acción
            $('#accion_id').on('change', function() {
                var codigo_id = $(this).val();
                if ($.trim(codigo_id) != '') {
                    $.get('/codigos', {
                        id: codigo_id
                    }, function(resultados) {
                        //console.log(resultados);
                        $('#resultado_id').empty();
                        $('#resultado_id').append(
                            "<option value=''>Seleciona una respuesta</option>");
                        $.each(resultados, function(index, value) {
                            $('#resultado_id').append("<option value='" + index + "'>" +
                                value + "</option>");
                        })
                    });
                }
            });

        });

    </script>

@endsection
