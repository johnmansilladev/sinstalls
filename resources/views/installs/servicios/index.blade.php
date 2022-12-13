@extends('layouts/contentLayoutMaster')

@section('title', 'Celulares & chips')

@section('content')
    <!-- Borderless table start -->
    <div class="row" id="table-borderless">
        <div class="col-12">
            <div class="card">
                <!-- Tabs with Icon starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Servicios</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon"
                                        aria-controls="home" role="tab" aria-selected="true">
                                        # Números</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon"
                                        aria-controls="about" role="tab" aria-selected="false">
                                        <i data-feather="smartphone"></i>Operadores</a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                    <div class="d-flex justify-content-start mb-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Ingrese número">
                                        </div>
                                        <button class="btn btn-primary">Búsqueda </button>
                                        <button class="btn btn-dark"><i data-feather="printer"></i> </button>                                       
                                    </div>
                                    
                                    <div>
                                        <table class="table">
                                            <thead class="borderless">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Servicio</th>
                                                    <th>Descripción</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($servicios->count() > 0)
                                                    @foreach ($servicios as $servicio)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <span class="fw-bold">{{ $servicio->serv_nombre }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-bold">{{ $servicio->serv_descripcion }}</span>
                                                                
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
                                    </div>

                                </div>

                                <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                    
                                    <table class="table">
                                        <thead class="borderless">
                                            <tr>
                                                <th>#</th>
                                                <th>Operador</th>
                                                <th>Logo</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($servicios->count() > 0)
                                                @foreach ($servicios as $servicio)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <span class="fw-bold">{{ $servicio->ope_nombre }}</span>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('images/icons/angular.svg') }}"
                                                                class="me-75" height="20" width="20"
                                                                alt="Angular" />
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabs with Icon ends -->
            </div>
        </div>
    </div>
    @include('config.operador._partials.modal')
    <!-- Borderless table end -->

@endsection

