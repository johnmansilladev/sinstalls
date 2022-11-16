@extends('layouts/contentLayoutMaster')

@section('title', 'Operadores')

@section('content')
<!-- Borderless table start -->
<div class="row" id="table-borderless">
    <div class="col-12">
        <div class="card">
            <!-- <div class="card-header">
                <h4 class="card-title">Borderless Table</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="borderless">
                        <tr>
                            <th>Operador</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($operadores as $operador)
                        <tr>
                            <td>
                                <img src="{{asset('images/icons/angular.svg')}}" class="me-75" height="20" width="20" alt="Angular" />
                                <span class="fw-bold">{{$operador->ope_nombre}}</span>
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
        </div>
    </div>
</div>
<!-- Borderless table end -->
@endsection