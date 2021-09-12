

<div id="content-wrapper">
  <div class="container-fluid mb-5">

    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Administración de Peticiones</li>
    </ol>

    <div class="accordion" id="accordionExample">
      <div class="card mb-3">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              INSTRUCCIONES
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            En esta Pantalla se podra administrar todos los usuarios que trabajaran con el sistema, ya sea poder editarlos, agregar nuevos o bien bloquearles el acceso al sistema
          </div>
        </div>
      </div>
    </div>

    <div style="padding-right: 30px; " >
      <button class="btn btn-success float-right" type='button' data-toggle="modal" data-target="#agregarPeticion" id="btn"><i class="fas fa-plus"></i> Agregar Usuario</button>
    </div>
    <div class="row mb-3"></div>
    <br>
    <br>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Lista de Peticiones
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="table-peticion" width="100%" cellspacing="0">
            <thead>
              <tr>
             
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Ver Detalles </th>
                <th>Cambiar estado </th>
                
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
   

  </div>
</div>


<div class="modal fade bd-example-modal-lg" id="agregarPeticion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo">Agregar Peticion</h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">
            <p id="UserModalInfo"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Nombre</label>
              <input type="text" class="form-control" id="name" name="name">
              <div class="invalid-feedback rut" style="display: none;  color:red">
                Ingrese un nombre porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Email</label>
              <input type="email" class="form-control" name="email" id="email">
              <div class="invalid-feedback name" style="display: none;  color:red">
                Ingrese su email porfavor.
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Telefono</label>
              <input type="tel" class="form-control" name="phone" id="phone">
              <div class="invalid-feedback email" style="display: none;  color:red">
                Ingrese telefono porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Descripcion</label>
              <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
              <div class="invalid-feedback rango" style="display: none;  color:red">
                Escriba una descripcion porfavor.
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="addPeticion" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="updatePeticion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo">Editar Peticion</h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">
            <p id="UserModalInfo"></p>
          </div>
        </div>
        <input id="invisible" type="hidden" >
        <div class="form-group">
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Nombre</label>
              <input type="text" class="form-control" id="e_name" name="name">
              <div class="invalid-feedback rut" style="display: none;  color:red">
                Ingrese un nombre porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Email</label>
              <input type="email" class="form-control" name="email" id="e_email">
              <div class="invalid-feedback name" style="display: none;  color:red">
                Ingrese su email porfavor.
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Telefono</label>
              <input type="tel" class="form-control" name="phone" id="e_phone">
              <div class="invalid-feedback email" style="display: none;  color:red">
                Ingrese telefono porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Descripcion</label>
              <textarea class="form-control" id="e_message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
              <div class="invalid-feedback rango" style="display: none;  color:red">
                Escriba una descripcion porfavor.
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="editPeticion" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="cambio_estado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header  text-center">
        <h5 class="modal-title " id="titulo">Cambiar estado petición</h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">
            <p id="UserModalInfo"></p>
          </div>
        </div>
        <div class="form-group">
         
          <div class="row mb-2 justify-content-md-center">
          <div class="col-md-12 col-lg-12 control-label">
                            <label for="actividad">Estado</label>
                            <select class="custom-select d-block w-100" id="estado" required="">
                                <option value="0">Opciones...</option>
                            </select>
                            <div class="invalid-feedback rango" style="display: none;  color:red">
                                Seleccione un rango porfavor.
                            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="addPeticion" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


    <script src="<?php echo base_url(); ?>assets/js_admin/adminPeticion.js"></script>

    