
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mantenimiento
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Campo1</th>
                                    <th>Campo2</th>
                                    <th>Campo3</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($marca as $datos) { ?>
                                    <tr>
                                        <td><?php echo $datos->id_marca ?></td>
                                        <td><?php echo $datos->id_marca ?></td>
                                        <td><?php echo $datos->marca ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'mantenimiento/editar/'.$datos->id_marca ?>" class="btn btn-primary">Editar</a>
                                            <a href="" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
</div>
        <!-- /.content-wrapper -->
