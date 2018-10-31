<?php 
	if (isset($_SESSION['id'])) {
?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LISTADO DE ESTUDIANTES -
                            <?php
                            if (isset($datos[1][0]['nombre'])){
                                echo $datos[1][0]['nombre'];
                            }

                            ?></h3>
                    </div>
                    <div class="panel-body">

                        <?php
                        if (sizeof($datos[0])>0){
                            ?>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($datos[0] as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>


                            <?php
                        } else {
                            echo 'No tiene estudiantes';
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
<?php
	} else {
		header("Location: " . URL . "login");
	}
	
?>

