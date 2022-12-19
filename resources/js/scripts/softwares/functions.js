
$("#tableVersionSoftwares tbody tr").click(function(){
    emptyTBody();
    var idSoftware = $(this).find('td:first input#idSoftware').val();
    
    //console.log(idSoftware);
    axios.get('/installs/response/getVersionsByIdSoftware/'+ idSoftware)   
    .then(function(response){
        console.log(response.data.versions);
        let data = response.data.versions;
        let tbody = '';
        data.forEach(obj => {
            tbody +=`<tr>
                <td>${obj['verSf_nombre']}</td>                                                        
                <td>${obj['verSf_size']}</td>
                <td>
                    <div class="dropdown">
                        <button type="button"
                            class="btn btn-sm dropdown-toggle hide-arrow py-0"
                            data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#editSoftware">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            <span>Editar</span>
                        </a>
                        <a class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#deleteSoftware">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            <span>Eliminar</span>
                        </a>
                    </div>
                    </div>
                </td>
            </tr>`
        });

        $('#bodyVersions').append(
            `<table class="table">
            <thead class="borderless">
                <tr>
                    <th>Versión</th>
                    <th>Size</th>                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>`
            +tbody+                      
            `</tbody>
        </table>`    
        );

    }).catch(function(error){
        console.log(error);
    });

    
});


function emptyTBody(){
    $('#bodyVersions table').remove();
    $('#bodyVersions div').remove();
}