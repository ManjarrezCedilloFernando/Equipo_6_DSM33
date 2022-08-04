<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar el nuevo horario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeH.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Id del horario </label>
                <input type="number" name="id_horario" class="form-control" placeholder="Introduzca el id del horario">
            </div>
            <div class="form-group">
                <label> Grupo </label>
                <input type="text" name="grupo" class="form-control" placeholder="Introduzca el nombre del grupo">
            </div>
            <div class="form-group">
                <label> Hora de inicio </label>
                <input type="text" name="hora_i" class="form-control" placeholder="Introduzca la hora de inicio de la clase">
            </div>
            <div class="form-group">
                <label> Hora de fin</label>
                <input type="text" name="hora_f" class="form-control" placeholder="Introduzca la hora de fin de la clase">
            </div>
            <div class="form-group">
                <label> Id del cuatrimestre </label>
                <input type="text" name="id_cuatrimestre" class="form-control" placeholder="Ingrese el id del cuatrimestre que cursa">
            </div>
            <div class="form-group">
                <label> Id de la materia</label>
                <input type="text" name="id_materia" class="form-control" placeholder="Introduzca el id de la materia que cursa">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" placeholder="Introduzca su contraseña">
                </div>

            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control checking_email" placeholder="Introdusca su correo">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Confirmar contraseña</label>
                <input type="password" name="confirmacontra" class="form-control" placeholder="Confirme la contraseña">
            </div>
            <div class="form-group">
                <label>Clase</label>
                <input type="text" name="clase" class="form-control" placeholder="Introduzca la clase que se esta tomando">
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
Agregar el nuevo horario
</button>
</div>