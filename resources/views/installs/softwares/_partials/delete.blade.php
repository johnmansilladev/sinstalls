<div class="modal fade" id="deleteSoftware{{$software->soft_id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                <div class="text-center mb-2">
                    <h1 class="mb-1">Eliminar software</h1>
                </div>
            <form action="{{route('softwares.destroy', $software->soft_id)}}" method="POST">
                <div class="modal-body">
                    <div class="container-fluid">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p>¿Estás seguro de eliminar a <strong>{{$software->soft_nombre}} ({{$software->marcasoftwares->mars_nombre}})</strong> ?</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50 pb-50">
                        <button type="submit" class="btn btn-danger">Si, eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>

              
            </form>
            
        </div>
    </div>
</div>