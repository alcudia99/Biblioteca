<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Prestamos</h1>
    </div>
</div>
<button class="btn btn-primary mb-2" onclick="frmPrestar()"><i class="fa fa-plus"></i></button>
<div class="tile">
    <div class="tile-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped mt-4" id="tblPrestar">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Libro</th>
                        <th>Estudiante</th>
                        <th>Fecha Prestamo</th>
                        <th>Fecha Devolución</th>
                        <th>Cant</th>
                        <th>Observación</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d485962.8510659338!2d-93.41181697218954!3d17.904859080988864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x85edd37defbc8047%3A0x871bd3568add97d7!2sBiblioteca%20Pablo%20l.%20Sidar%2C%2086296%20Pablo%20L.%20Sidar%2C%20Tab.!3m2!1d17.8959142!2d-93.05637!5e0!3m2!1ses-419!2smx!4v1722964161075!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div id="prestar" class="modal fade" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="title">Prestar Libro</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmPrestar" onsubmit="registroPrestamos(event)">
                    <div class="form-group">
                        <label for="libro">Libro</label><br>
                        <select id="libro" class="form-control libro" name="libro" onchange="verificarLibro()" required style="width: 100%;">

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="estudiante">Estudiante</label><br>
                                <select name="estudiante" id="estudiante" class="form-control estudiante" required style="width: 100%;">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cantidad">Cant</label>
                                <input id="cantidad" class="form-control" min="1" type="number" name="cantidad" min="1" required onkeyup="verificarLibro()">
                                <strong id="msg_error"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_prestamo">Fecha de Prestamo</label>
                                <input id="fecha_prestamo" class="form-control" type="date" name="fecha_prestamo" value="<?php echo date("Y-m-d"); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_devolucion">Fecha de Devolución</label>
                                <input id="fecha_devolucion" class="form-control" type="date" name="fecha_devolucion" value="<?php echo date("Y-m-d"); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacion">Observación</label>
                        <textarea id="observacion" class="form-control" placeholder="Observación" name="observacion" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" id="btnAccion">Prestar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>