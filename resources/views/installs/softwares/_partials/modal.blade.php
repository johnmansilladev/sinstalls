<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Registrar software</h1>

                </div>
                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserFirstName">Nombre</label>
                        <input type="text" id="" name="" class="form-control" placeholder="John"
                            value="" data-msg="Please enter your first name" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="">Logo</label>
                        <input type="text" id="" name="" class="form-control" placeholder="Doe"
                            value="" data-msg="Please enter your last name" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="">Descripción</label>
                        <textarea class="form-control" type="text" rows="3" placeholder="Descripción de operador"></textarea>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Registrar</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
