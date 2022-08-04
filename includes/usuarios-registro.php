<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar al nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeU.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Matricula </label>
                <input type="number" name="matricula" class="form-control" placeholder="Introduzca su matricula">
            </div>
            <div class="form-group">
                <label> Nombre del alumno</label>
                <input type="text" name="nombre_u" class="form-control" placeholder="Introduzca su nombre">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" placeholder="Introduzca su contraseña">
                </div>
            <div class="form-group">
                <label>Confirmar contraseña</label>
                <input type="password" name="confirmacontra" class="form-control" placeholder="Confirme la contraseña">
            </div>
            <div class="form-group">
                <label> Grupo </label>
                <input type="text" name="grupo" class="form-control" placeholder="Introduzca su grupo">
            </div>
            <div class="form-group">
                <label> ID cuatrimestre </label>
                <input type="number" name="id_cuatrimestre" class="form-control" placeholder="Introduzca el id del cuatrimestre que cursa">
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
Agregar al usuario
</button>
</div>