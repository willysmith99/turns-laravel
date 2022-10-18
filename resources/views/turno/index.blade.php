<x-app-layout>

    @section('css')
        
    @endsection

    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Lista de turnos
        </h2>
    </x-slot>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow ">

                <div class="card-header">
                    <div class="row ">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Buscar turnos">
                        </div>
                    </div>
                </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead class="text-uppercase table-primary text-center">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Empleado</th>
                                    <th>Auxiliar</th>
                                    <th>Hora inicial</th>
                                    <th>Hora final</th>
                                    <th colspan="1"></th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($turns as $turn)
                                    <tr class="text-center">
                                        <td>{{ $turn->date }}</td>
                                        <td>{{ $turn->empleados->name }} {{$turn->empleados->lastname}}</td>
                                        <td>{{ $turn->assistant }}</td>
                                        <td>{{ $turn->start_time }}</td>
                                        <td>{{ $turn->end_time }}</td>
                                        <td>                                            
                                            {{-- Botón para abrir el modal ver más --}}
                                            <button type="button" class="btn btn-info btn-sm" title="Ver más" data-bs-toggle="modal" data-bs-target="#verTurno{{ $turn->id }}">
                                                <i class="bi bi-info-circle-fill"></i>
                                            </button>         
                                        </td>
                                    </tr> 

                                    {{-- Modal para ver más --}}
                                    @include('turno.show')

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        {{ $turns->links() }}
                    </div>
      
            </div>
        </div>
    </div>
</x-app-layout>