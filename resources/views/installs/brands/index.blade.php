@extends('layouts/contentLayoutMaster')

@section('title', 'Softwares y versiones')
@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-file-uploader.css')) }}">
@endsection
@section('content')

    <section class="app-user-view-account">
        
        <div class="row">

            <!-- Softwares Content -->
            <div class="col-xl-9 col-lg-8 col-md-8">

                <!-- Software table -->
                <div class="card">
                    <div class="row d-flex justify-content-between align-items-center m-1 ">
                        <div class="col-lg-6 d-flex align-items-center">
                            <h4 class="card-header">Listado de marcas</h4>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                            
                            <button class="btn btn-primary btn-add-record ms-2" tabindex="0" type="button" data-bs-toggle="modal"
                            data-bs-target="#registerBrand">
                                <span>Registrar marca</span></button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between align-items-center mb-1 mx-1">
                        <div class="col-4">
                            <input class="form-control input w-100" type="text" placeholder="Buscar marca" tabindex="-1" data-search="">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable-project" id="tableVersionSoftwares">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Brand</th>
                                    <th>Logo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($brands->count() > 0)
                                    @foreach ($brands as $marca)
                                        <tr>
                                            <td>{{-- {{ $loop->iteration }} --}}
                                                {{ ++$i }}
                                                <input type="hidden" value="{{ $marca->mars_id }}" id="idSoftware" name="idSoftware">
                                            </td>
                                            <td>
                                                {{ $marca->mars_nombre }}
                                                
                                            </td>
                                            <td>
                                                {{--  {{ $marca->mars_logo }} --}}
                                                <img src="https://intidiesel.pe/storage/brands/scania.png" alt="" height="30px">
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                        data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#editSoftware{{ $marca->soft_id }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Editar</span>
                                                        </a>
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSoftware{{ $marca->soft_id }}">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Eliminar</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('installs.brands._partials.edit')
                                        @include('installs.brands._partials.delete')
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4">
                                            <div>
                                                No hay registros aún
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                @include('installs.brands._partials.edit')
                            </tbody>
                        </table>
                        <div class="row border-top p-2">
                            {{ $brands->render('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
                <!-- /Software table -->
            </div>
            <!--/ Softwares Content -->

            <!-- Version Sidebar -->
            <div class="col-xl-3 col-lg-5 col-md-4 order-1 order-md-0">
                <!-- Version Card -->
                <div class="card">
                    <div class="p-1" id="infoSoftware">
                        <div>
                            <h4 class="fw-bolder">Versiones</h4>
                        </div>
                    </div>
                    <div id="bodyVersions">
                        <div class="px-1 pb-1">
                            Haga doble click sobre un marca para ver sus versiones
                        </div>
                    </div>
                </div>
                <!-- /Version Card -->
            </div>
            <!--/ Version Sidebar -->
        </div>
    </section>
    @include('installs.brands._partials.create')
@endsection


@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/file-uploaders/dropzone.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-file-uploader.js')) }}"></script>
@endsection
