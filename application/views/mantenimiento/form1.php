
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ingrese Campos
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <?php $url = isset($marca->marca) ? base_url().'index.php/mantenimiento/actualizar' : base_url().'index.php/mantenimiento/guardar' ?>
                        <form action="<?php echo $url ?>" method="POST">

                            <div class="form-group">
                                <label>Marca</label>
                                <input class="form-control" type="text" name="marca" placeholder="Ingrese nombre de marca" required="" value="<?php echo isset($marca->marca) ? $marca->marca : '' ?>">
                            </div>

                            <input class="form-control" type="text" name="id" style="display: none" value="<?php echo isset($marca->id_marca) ? $marca->id_marca : ''  ?>">



                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
</div>
        <!-- /.content-wrapper -->