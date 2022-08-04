<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar el nuevo cuatrimestre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeC.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Id del cuatrimestre </label>
                <input type="number" name="id_cuatrimestre" class="form-control" placeholder="Introduzca id del cuatrimestre">
            </div>
            <div class="form-group">
                <label>Nombre del cuatrimestre</label>
                <input type="text" name="nom_cuatri" class="form-control checking_email" placeholder="Introduzca el nombre de el cuatrimestre">
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
Agregar el cuatrimestre
</button>
</div>