  <!-- Modal -->
  <div class="modal fade modal-lg" id="verTurnoAdmin{{ $turn->id }}" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary bg-opacity-50">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Información del turno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h6 class="text-uppercase"><span class="text-danger">*</span> Empleado</h6>
                        <pre class="fs-6"> {{ $turn->empleados->name }} {{$turn->empleados->lastname}}</pre>
                    </div>
                    <div class="col-6">
                        <h6 class="text-uppercase"><span class="text-danger">*</span> Auxiliar</h6>
                        <pre class="fs-6"> {{ $turn->assistant }}</pre>
                    </div>
                </div>
              
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i> Cerrar
                </button>
            </div>
          </div>
    </div>
</div>