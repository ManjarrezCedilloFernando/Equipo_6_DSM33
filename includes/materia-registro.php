<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar el la materia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeM.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Id de la materia </label>
                <input type="text" name="id_materia" class="form-control" placeholder="Introduzca el id de la materia">
            </div>
            <div class="form-group">
            <div class="form-group">
                <label>Nombre de la materia</label>
                <input type="text" name="nombre" class="form-control " placeholder="Introduzca el nombre de la materia">
            </div>
            
                <label>Id del profesor</label>
                <input type="text" name="Id_profesor" class="form-control" placeholder="Introduzca el id de el profesor">
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
Agregar Materia
</button>
</div>