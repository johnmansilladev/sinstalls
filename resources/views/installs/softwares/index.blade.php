@extends('layouts/contentLayoutMaster')

@section('title', 'Softwares y versiones')
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')
    <!-- Borderless table start -->
    <div class="row" id="table-borderless">
        <div class="col-12">
            <div class="card">
                <!-- Tabs with Icon starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Softwares</h4>
                            <a class="btn  btn-primary" data-bs-toggle="modal" data-bs-target="#newSoftware">Registrar software</a>
                        </div>
                        <div class="card-body ">

                            <div class="row">
                                <div class="col-xl-8">
                                    <table class="table border-dark">
                                        <thead class="borderless">
                                            <tr>
                                                <th>#</th>
                                                <th>Software</th>
                                                <th>Marca</th>
                                                {{--  <th>Versiones</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($softwares->count() > 0)
                                                @foreach ($softwares as $software)
                                                    <tr>
                                                        <td>{{-- {{ $loop->iteration }} --}}
                                                            {{ ++$i }}
                                                        </td>
                                                        <td>
                                                            <span class="fw-bold">{{ $software->soft_nombre }}</span>
                                                            <span class="badge bg-primary">
                                                                {{ $software->categoriasoftwares->catSf_nombre }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            {{-- @foreach ($software->versionSoftwares as $version)
                                                                <span class="badge bg-primary">{{$version->verSf_nombre }}</span>
                                                            @endforeach --}}
                                                            <span class="text-uppercase"><small>{{ $software->marcasoftwares->mars_nombre }}</small></span>
                                                        </td>
                                                        {{-- <td class="text-center">
                                                            <span class="fw-bold">{{ $software->versionSoftwares->count() }}</span>
                                                        </td> --}}
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                                    data-bs-toggle="dropdown">
                                                                    <i data-feather="more-vertical"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#editSoftware{{$software->soft_id}}">
                                                                        <i data-feather="edit-2" class="me-50"></i>
                                                                        <span>Editar</span>
                                                                    </a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteSoftware{{$software->soft_id}}">
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
                                    <div class="row pt-2">
                                        <div class="col-md-12">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-center">
                                                    @if ($softwares->count() > 0)
                                                        {{ $softwares->render('pagination::bootstrap-4') }}
                                                    @else
                                                        <br><br><br><br><br><br>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card  border-dark">
                                        <div class="card-header">
                                            <h4 class="card-title">Versiones</h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead class="borderless">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Version</th>
                                                        {{-- <th>Launch date</th> --}}
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr>
                                                        <td></td>                                                        
                                                        <td></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                                    data-bs-toggle="dropdown">
                                                                    <i data-feather="more-vertical"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#editUser">
                                                                        <i data-feather="edit-2" class="me-50"></i>
                                                                        <span>Editar</span>
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i data-feather="trash" class="me-50"></i>
                                                                        <span>Eliminar</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" colspan="4">
                                                            <div>
                                                                Seleccione un software para ver sus versiones
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tabs with Icon ends -->
            </div>
        </div>
    </div>
    
    <!-- Borderless table end -->
    @include('installs.softwares._partials.create')
@endsection



@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection
