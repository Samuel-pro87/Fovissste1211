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
    <!-- Page Content -->
            <!-- Dynamic Table Full -->
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <form action="{{route('detalle.store')}}" method="POST">
                @csrf
                    <table class="table table-bordered small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">Ejecutivo</th>
                                <th class="d-none d-sm-table-cell"><input id="ejecutivo" type="text" class="form-control"
                                        name="ejecutivo" autocomplete="off" value=""></th>
                                <th class="d-none d-sm-table-cell">Estatus</th>
                                <th class="d-none d-sm-table-cell"><input id="estatus" type="text" class="form-control"
                                        name="estatus" autocomplete="off" value=""></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--<tr><td><b>Detalles del crédito </b></td></tr>-->
                        </tbody>
                    </table>
                <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-0">
                            <div class="form-group row">
                                <label for="rfc" class="col-md-4 col-form-label text-md-right">RFC:</label>
                                <div class="col-md-8">
                                    <input id="rfc" type="text" class="form-control" name="rfc" value="">
                                </div>
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                                <div class="col-md-8">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="">
                                </div>
                                <label for="idcredito" class="col-md-4 col-form-label text-md-right">Id Crédito:</label>
                                <div class="col-md-8">
                                    <input id="idCredito" type="text" class="form-control" name="idCredito" value="" required>
                                </div>
                                <label for="curp" class="col-md-4 col-form-label text-md-right">CURP:</label>
                                <div class="col-md-8">
                                    <input id="curp" type="text" class="form-control" name="curp" value="">
                                </div>
                                <label for="estatusL" class="col-md-4 col-form-label text-md-right">Estatus Laboral:</label>
                                <div class="col-md-8">
                                    <input id="estatusL" type="text" class="form-control" name="estatusL" value="">
                                </div>

                                <label for="calle" class="col-md-4 col-form-label text-md-right">Calle:</label>
                                <div class="col-md-8">
                                    <input id="calle" type="text" class="form-control" name="calle" value="">
                                </div>
                                <label for="colonia" class="col-md-4 col-form-label text-md-right">Colonia:</label>
                                <div class="col-md-8">
                                    <input id="colonia" type="text" class="form-control" name="colonia" value="">
                                </div>
                                <label for="cp" class="col-md-4 col-form-label text-md-right">C. P.:</label>
                                <div class="col-md-8">
                                    <input id="cp" type="text" class="form-control" name="cp" value="">
                                </div>
                                <label for="mora" class="col-md-4 col-form-label text-md-right">Mora:</label>
                                <div class="col-md-8">
                                    <input id="mora" type="text" class="form-control" name="mora" value="">
                                </div>
                            </div>
                        </div>

                        <div class="p-0 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="form-group row">
                                <label for="estatuspre" class="col-md-4 col-form-label text-md-right">Estatus Preliminar:</label>
                                <div class="col-md-6">
                                    <input id="estatuspre" type="text" class="form-control" name="estatuspre" value="">
                                </div>
                                <label for="estatuspre" class="col-md-4 col-form-label text-md-right">Segmento</label>
                                <div class="col-md-6">
                                    <input id="estatuspre" type="text" class="form-control" name="estatuspre" value="">
                                </div>

                                <label for="fasignacion" class="col-md-4 col-form-label text-md-right">Fecha Asignación:</label>
                                <div class="col-md-6">
                                    <input id="fasignacion" type="text" class="form-control" name="fasignacion" value="">
                                </div>
                                <label for="fcredito" class="col-md-4 col-form-label text-md-right">Fecha Crédito:</label>
                                <div class="col-md-6">
                                    <input id="fcredito" type="text" class="form-control" name="fcredito" value="">
                                </div>

                                <label for="montoI" class="col-md-4 col-form-label text-md-right">Monto Inicial:</label>
                                <div class="col-md-6">
                                    <input id="montoI" type="text" class="form-control" name="montoI" value="">
                                </div>
                                <label for="adeudoV" class="col-md-4 col-form-label text-md-right">Adeudo Vencido:</label>
                                <div class="col-md-6">
                                    <input id="adeudoV" type="text" class="form-control" name="adeudoV" value="">
                                </div>

                                <label for="saldoC" class="col-md-4 col-form-label text-md-right">Saldo Crédito:</label>
                                <div class="col-md-6">
                                    <input id="saldoC" type="text" class="form-control" name="saldoC" value="">
                                </div>
                                <label for="digitoV" class="col-md-4 col-form-label text-md-right">Dígito Verificador:</label>
                                <div class="col-md-6">
                                    <input id="digitoV" type="text" class="form-control" name="digitoV" value="">
                                </div>
                                <div class="col-md-4 ">

                                </div>
                                <div class="col-md-4 ">
                                    <button type="submit" class="btn btn-rounded btn-primary min-width-125 mb-10" data-toggle="tooltip" title="Crear nuevo registro"><i class="fas fa-save">Guardar</i></button>
                               </div>
                                <div class="col-md-4 ">

                                </div>
                            </div>
                        </div>
                    </form>
                        <form>
                        <div class="p-0 border-t border-gray-200 dark:border-gray-700">
                            <table class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                                <thead>
                                    <tr>
                                        <th>Teléfono</th>
                                        <th>Red</th>
                                        <th>tipo de Teléfono</th>
                                        <th>Estatus de Teléfono</th>
                                        <th>ext.</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>Teléfono</td>
                                        <td>Red</td>
                                        <td>tipo de Teléfono</td>
                                        <td>Estatus de Teléfono</td>
                                        <td>ext.</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="tooltip" title="Agregar teléfono">+</button></td>
                                </tbody>
                            </table>
                        </div>
                        </form>

                        <div class="p-0 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <table class="table small table-striped table-vcenter js-dataTable-full-pagination table-hover">
                                <thead>
                                    <tr>
                                        <th>Email:</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>Nuevo Email:</td>
                                        <td>texbox</td>
                                        <td><button type="button" class="btn btn-info" data-toggle="tooltip" title="Agregar E-mail">+</button></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    <!-- END Page Content -->
@endsection
