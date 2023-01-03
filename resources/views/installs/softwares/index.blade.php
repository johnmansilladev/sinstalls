@extends('layouts/contentLayoutMaster')

@section('title', 'Softwares y versiones')
@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
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
                            <h4 class="card-header">Listado de softwares</h4>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                            
                            <button class="btn btn-primary btn-add-record ms-2" tabindex="0" type="button">
                                <span>Registrar software</span></button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between align-items-center mb-1 mx-1">
                        <div class="col-4">
                            <input class="form-control input w-100" type="text" placeholder="Buscar software" tabindex="-1" data-search="">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable-project" id="tableVersionSoftwares">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Software</th>
                                    <th>Brand</th>
                                    <th>Categories</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($softwares->count() > 0)
                                    @foreach ($softwares as $software)
                                        <tr>
                                            <td>{{-- {{ $loop->iteration }} --}}
                                                {{ ++$i }}
                                                <input type="hidden" value="{{ $software->soft_id }}" id="idSoftware"
                                                    name="idSoftware">
                                            </td>
                                            <td>
                                                <span class="fw-bold">{{ $software->soft_nombre }}</span>
                                                {{-- <span class="badge bg-light-primary">
                                                    @foreach ($software->versionSoftwares as $version)
                                                        <span class="badge bg-primary">{{$version->verSf_nombre }}</span>
                                                    @endforeach  --}}
                                                {{-- {{ $software->categoriasoftwares->catSf_nombre }} 
                                                </span> --}}
                                            </td>
                                            <td>
                                                {{-- @foreach ($software->versionSoftwares as $version)
                                                    <span class="badge bg-primary">{{$version->verSf_nombre }}</span>
                                                @endforeach --}}
                                                <span>{{ $software->marcasoftwares->mars_nombre }}</span>
                                            </td>
                                            {{-- <td class="text-center">
                                                <span class="fw-bold">{{ $software->versionSoftwares->count() }}</span>
                                            </td> --}}
                                            <td>
                                                {{ $software->categoriasoftwares->catSf_nombre }}
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
                                                            data-bs-target="#editSoftware{{ $software->soft_id }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Editar</span>
                                                        </a>
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSoftware{{ $software->soft_id }}">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Eliminar</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('installs.softwares._partials.edit')
                                        @include('installs.softwares._partials.delete')
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
                            </tbody>
                        </table>
                        <div class="row border-top p-2">
                            {{ $softwares->render('pagination::bootstrap-5') }}
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
                            Haga doble click sobre un software para ver sus versiones
                        </div>
                    </div>
                </div>
                <!-- /Version Card -->
            </div>
            <!--/ Version Sidebar -->
        </div>
    </section>
    @include('installs.softwares._partials.create')
@endsection



@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/softwares/functions.js')) }}"></script>
@endsection
