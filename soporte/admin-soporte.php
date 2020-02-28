<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php require_once '../php/funciones.php';
                                    $datos = selecionarDatos();
                                ?>
                                <?php foreach ($datos as $data):?>
                                    <td><?php echo $data['datos_solicitante_id']?></td>
                                    <td><?php echo $data['datos_nombre_correo']?></td>
                                    <td><?php echo $data['datos_sede']?></td>
                                    <td><?php echo $data['datos_area']?></td>
                                    <td><?php echo $data['datos_tipos_usuario']?></td>
                                    <td><?php echo $data['datos_reporte_via']?></td>
                                    <td><?php echo $data['datos_reporte_via_otro']?></td>
                                    <td><?php echo $data['datos_hardware']?></td>
                                    <td><?php echo $data['datos_software']?></td>
                                    <td><?php echo $data['datos_instalacion']?></td>
                                    <td><?php echo $data['datos_configuracion']?></td>
                                    <td><?php echo $data['datos_sin_acceso']?></td>
                                    <td><?php echo $data['datos_ruido']?></td>
                                    <td><?php echo $data['datos_sin_liena']?></td>
                                    <td><?php echo $data['datos_cableado']?></td>
                                    <td><?php echo $data['datos_cambio_numero']?></td>
                                    <td><?php echo $data['datos_cambio_aparato']?></td>
                                    <td><?php echo $data['datos_tele_otro']?></td>
                                    <td><?php echo $data['datos_apa_tel1']?></td>
                                    <td><?php echo $data['datos_apa_tel2']?></td>
                                    <td><?php echo $data['datos_apa_tel3']?></td>
                                    <td><?php echo $data['datos_apa_tel4']?></td>
                                    <td><?php echo $data['datos_apa_tel5']?></td>
                                    <td><?php echo $data['datos_roseta1']?></td>
                                    <td><?php echo $data['datos_roseta2']?></td>
                                    <td><?php echo $data['datos_roseta3']?></td>
                                    <td><?php echo $data['datos_roseta4']?></td>
                                    <td><?php echo $data['datos_roseta5']?></td>
                                    <td><?php echo $data['datos_tar_red1']?></td>
                                    <td><?php echo $data['datos_tar_red2']?></td>
                                    <td><?php echo $data['datos_tar_red3']?></td>
                                    <td><?php echo $data['datos_tar_red4']?></td>
                                    <td><?php echo $data['datos_tar_red5']?></td>
                                    <td><?php echo $data['datos_jack1']?></td>
                                    <td><?php echo $data['datos_jack2']?></td>
                                    <td><?php echo $data['datos_jack3']?></td>
                                    <td><?php echo $data['datos_jack4']?></td>
                                    <td><?php echo $data['datos_jack5']?></td>
                                    <td><?php echo $data['datos_modem1']?></td>
                                    <td><?php echo $data['datos_modem2']?></td>
                                    <td><?php echo $data['datos_modem3']?></td>
                                    <td><?php echo $data['datos_modem4']?></td>
                                    <td><?php echo $data['datos_modem5']?></td>
                                    <td><?php echo $data['datos_plug1']?></td>
                                    <td><?php echo $data['datos_plug2']?></td>
                                    <td><?php echo $data['datos_plug3']?></td>
                                    <td><?php echo $data['datos_plug4']?></td>
                                    <td><?php echo $data['datos_plug5']?></td>
                                    <td><?php echo $data['datos_num_inventario']?></td>
                                    <td><?php echo $data['datos_utp1']?></td>
                                    <td><?php echo $data['datos_utp2']?></td>
                                    <td><?php echo $data['datos_utp3']?></td>
                                    <td><?php echo $data['datos_utp4']?></td>
                                    <td><?php echo $data['datos_utp5']?></td>
                                    <td><?php echo $data['datos_utp6']?></td>
                                    <td><?php echo $data['datos_utp7']?></td>
                                    <td><?php echo $data['datos_multi_1']?></td>
                                    <td><?php echo $data['datos_multi_2']?></td>
                                    <td><?php echo $data['datos_multi_3']?></td>
                                    <td><?php echo $data['datos_multi_4']?></td>
                                    <td><?php echo $data['datos_multi_5']?></td>
                                    <td><?php echo $data['datos_multi_6']?></td>
                                    <td><?php echo $data['datos_multi_7']?></td>
                                    <td><?php echo $data['datos_persona']?></td>
                                    <td><?php echo $data['datos_observaciones']?></td>
                                    <td><?php echo $data['datos_estado_reporte']?></td>
                                    <td><?php echo $data['datos_des_motivo']?></td>
                                <?php endforeach?>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>




        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>
</html>