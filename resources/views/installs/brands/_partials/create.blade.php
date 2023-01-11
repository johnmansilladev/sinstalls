<!-- Edit User Modal -->
<div class="modal fade" id="registerBrand" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Registrar software</h1>
                </div>
                <form id="registerFormMarca" action="{{ route('marcas-softwares.store', $marca->mars_id) }}"
                    method="POST" class="row gy-1 pt-75">
                    @csrf
                    <div class="col-12">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" class="form-control" name="soft_nombre"
                            placeholder="Ingrese marca del Software" value=""
                            data-msg="Ingrese marca del software" required />
                    </div>                    
                    
                    <div class="col-12">
                        <label class="form-label" for="">Descripción</label>
                        <textarea class="form-control" type="text" rows="5" name="soft_descripcion" required></textarea>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Registrar</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Casncelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
