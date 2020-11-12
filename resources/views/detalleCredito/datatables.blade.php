@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection


@section('content')
    <!-- Page Content -->
            <!-- Dynamic Table Full -->
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <div class="container">
                <div class="card p-2">
                    <div class="body-card">
                         <table id="creditos" class="table table-bordered small table-striped table-vcenter" style="width:95%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%">#</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%">Id Crédito</th>
                                    <th>  </th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">RFC</th>
                                    <th class="d-none d-sm-table-cell" style="width: 35%">Nombre</th>
                                    <th class="d-none text-center d-sm-table-cell" style="width: 15%;">Estatus
                                    </th>
                                    <th class="d-none text-center d-sm-table-cell" style="width: 10%;">Ejecutivo</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        <!-- END Dynamic Table Full -->
    <!-- END Page Content -->
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script>
     $('#creditos').DataTable({
         responsive: true,
         autoWidth: false,
         "ajax": "{{route('datable.credito')}}",
         "columns": [
             {data: 'id'},
             {data: 'idCredito'},
             {data: 'btn'},
             {data: 'rfc'},
             {data: 'nombre'},
             {data: 'estatus'},
             {data: 'ejecutivo'},
         ]
     });
</script>
@endsection
