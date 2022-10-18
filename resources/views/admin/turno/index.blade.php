@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="bg-light shadow p-3">
        <h1>Dashboard</h1>
    </div>
@stop

@section('content')


    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead class="text-uppercase">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Empleado</th>
                                    <th>Auxiliar</th>
                                    <th>Hora inicial</th>
                                    <th>Hora final</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($turns as $turn)
                                    <tr>
                                        <td>{{ $turn->date }}</td>
                                        <td>{{ $turn->empleados->name }} {{$turn->empleados->lastname}}</td>
                                        <td>{{ $turn->assistant }}</td>
                                        <td>{{ $turn->start_time }}</td>
                                        <td>{{ $turn->end_time }}</td>
                                        <td width="50">                                            
                                            {{-- Botón para abrir el modal ver más --}}
                                            <button type="button" class="btn btn-secondary btn-sm" title="Ver más" data-bs-toggle="modal" data-bs-target="#verTurnoAdmin{{ $turn->id }}">
                                                <i class="bi bi-info-circle-fill"></i>
                                            </button>         
                                        </td>
                                        <td width="50">
                                            <a href="" class="btn btn-primary btn-sm" title="Editar">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </td>
                                        <td width="50">
                                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr> 
                                    @include('admin.turno.show')
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
    
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@stop
