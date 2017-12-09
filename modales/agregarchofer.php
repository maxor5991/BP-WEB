<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-user modal-icon"></i>
                                            <h4 class="modal-title">Agregar Chofer</h4>
                                        </div>
                                        <form action="add.php" method="post" name="form1">
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr><td><input type="text" name="DNI"></td></tr>
                                                    <tr><td><input type="text" name="Nombre"></td></tr>
                                                    <tr><td><input type="text" name="Apellido"></td></tr>
                                                    <tr><td><input type="text" name="Direccion"></td></tr>
                                                    <tr><td><input type="text" name="Celular"></td></tr>
                                                    <tr><td><input type="text" name="Correo"></td></tr>
                                                    <tr><td><input type="text" name="Contrasena"></td></tr>
                                                    <tr><td><input type="text" name="Estado"></td></tr>
                                                    <tr><td><input type="text" name="IdDistrito"></td></tr>   
                                                </table>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <input type="submit" name="Submit" value="Add" class="btn btn-primary">Save changes</input>
                                        </div>
                                    </div>
                                </div>
                            </div>