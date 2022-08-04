<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar al nuevo profesor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codep.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nombre del profesor </label>
                <input type="text" name="nombre_p" class="form-control" placeholder="Introduzca el nombre">
            </div>
            <div class="form-group">
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
                <label>Grupo</label>
                <input type="text" name="grupo" class="form-control" placeholder="Introduzca su numero">
            </div>
            <div class="form-group">
                <label>Clase</label>
                <input type="text" name="clase" class="form-control" placeholder="Introduzca la clase que da">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" placeholder="Introduzca su contraseña">
                </div>
            <div class="form-group">
                <label>Confirmar contraseña</label>
                <input type="password" name="confirmacontra" class="form-control" placeholder="Confirme la contraseña">
            </div>

            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
Agregar Profesor
</button>
</div>