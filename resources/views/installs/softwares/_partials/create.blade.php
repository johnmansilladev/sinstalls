<!-- Edit User Modal -->
<div class="modal fade" id="newSoftware" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Registrar software</h1>
                </div>
                <form id="editSoftwareForm" action="{{ route('softwares.update', $software->soft_id) }}" method="POST"
                    class="row gy-1 pt-75">
                    @csrf                   
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserFirstName">Nombre</label>
                        <input type="text" class="form-control" name="soft_nombre" placeholder="Ingrese nombre del Software"
                            value="" data-msg="Ingrese nombre del software" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="soft_mars_id">Marca</label>
                        <select class="form-control form-select" id="soft_mars_id" name="soft_mars_id" required>
                            @foreach ($marcas_software as $marca)
                                <option value="{{ $marca->mars_id }}">
                                    {{ $marca->mars_nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="soft_catSf_id">Categoría</label>
                        <select class="form-select form-control" name="soft_catSf_id" required>
                            <option value="">Seleccione una</option>
                            @foreach ($categorias_software as $categoria)
                                <option value="{{ $categoria->catSf_id }}">
                                    {{ $categoria->catSf_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="">Descripción</label>
                        <textarea class="form-control" type="text" rows="5" name="soft_descripcion" required></textarea>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Registrar</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
