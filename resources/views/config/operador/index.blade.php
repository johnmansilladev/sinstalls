@extends('layouts/contentLayoutMaster')

@section('title', 'Celulares & chips')

@section('content')
    <!-- Borderless table start -->
    <div class="row" id="table-borderless">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                <h4 class="card-title">Gestión de equipos celulares y chips</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
                </p>
            </div> --}}
                {{-- <div class="row">
                <div class="col-12">
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
                        @foreach ($operadores as $operador)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                            <td>                                
                                <span class="fw-bold">{{$operador->ope_nombre}}</span>
                            </td>
                            <td>
                              <img src="{{asset('images/icons/angular.svg')}}" class="me-75" height="20" width="20" alt="Angular" />
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
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
                    </tbody>
                </table>
                </div>
                
            </div> --}}
                <!-- Tabs with Icon starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Teléfonos</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon"
                                        aria-controls="home" role="tab" aria-selected="true"><i data-feather="home"></i>
                                        Números</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon"
                                        aria-controls="about" role="tab" aria-selected="false"><i
                                            data-feather="smartphone"></i>Operadores</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                    <p>
                                        Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy
                                        candy canes marzipan
                                        carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll.
                                        Icing croissant bonbon
                                        biscuit gummi bears. Pudding candy canes sugar plum cookie chocolate cake powder
                                        croissant.
                                    </p>
                                    <p>
                                        Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu
                                        caramels candy canes
                                        chocolate cake sweet roll liquorice icing cupcake. Candy cookie sweet roll bear claw
                                        sweet roll.
                                    </p>
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
                                            @foreach ($operadores as $operador)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span class="fw-bold">{{ $operador->ope_nombre }}</span>
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('images/icons/angular.svg') }}" class="me-75"
                                                            height="20" width="20" alt="Angular" />
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                                data-bs-toggle="dropdown">
                                                                <i data-feather="more-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">
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
    <!-- Borderless table end -->
@endsection
