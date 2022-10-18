@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="bg-light shadow p-3">
        <h1>Dashboard</h1>
    </div>
@stop

@section('content')
    <div class="container bg-light shadow p-3">
        <div class="row">
            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-primary mb-3 mt-3 bg-opacity-50 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between">
                        <div class="">
                            <h6>Turnos</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $turns }}</h5>
                            <a href="{{ route('admin.turnos.index') }}" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>

            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-success mb-3 mt-3 bg-opacity-50 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between">
                        <div class="">
                            <h6>Empleados</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $empleados }}</h5>
                            <a href="" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-info mb-3 mt-3 bg-opacity-50 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between">
                        <div class="">
                            <h6>Roles</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $roles }}</h5>
                            <a href="" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-warning mb-3 mt-3 bg-opacity-50 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between text-white">
                        <div class="">
                            <h6>Labores</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $labores }}</h5>
                            <a href="" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-secondary mb-3 mt-3 bg-opacity-50 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between text-white">
                        <div class="">
                            <h6>Sedes</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $unidades }}</h5>
                            <a href="" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="card bg-danger bg-opacity-25 mb-3 mt-3 w-100" style="max-width: 18rem;">
                    <div class="card-body d-flex justify-content-between">
                        <div class="">
                            <h6>Unidades</h6>
                            <p>Foto</p>
                        </div>
                        <div class="ml-5">
                            <h5>{{ $sedes }}</h5>
                            <a href="" class="text-white">Ver más</a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>  
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop