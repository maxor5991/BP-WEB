<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-user modal-icon"></i>
                                            <h4 class="modal-title">Agregar Chofer</h4>
                                        </div>
                                        <form action="modales\add.php" method="post" name="form1">
                                            <div class="modal-body">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="usr">DNI:</label>
                                                    <input type="text" class="form-control" id="DNI">
                                                    <label for="usr">Nombres:</label>
                                                    <input type="text" class="form-control" id="Nombre">
                                                    <label for="usr">Apellidos:</label>
                                                    <input type="text" class="form-control" id="Apellido">
                                                    <label for="usr">Imagen:</label>
                                                    <input type="text" class="form-control" id="Imagen">

                                                </div>
                                                    
                                                <div class="col-sm-6">
                                                    <label for="usr">Direccion:</label>
                                                    <input type="text" class="form-control" id="Direccion">
                                                    <label for="usr">Celular:</label>
                                                    <input type="text" class="form-control" id="Celular">
                                                    <label for="usr">Correo:</label>
                                                    <input type="text" class="form-control" id="Correo">
                                                    <label for="usr">Contraseña:</label>
                                                    <input type="text" class="form-control" id="Contrasena">
                                                </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>