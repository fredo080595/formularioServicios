<?php

function conexion(){
    $conexion = mysqli_connect('localhost','root','','servicios');
    return $conexion;
}


function insertarDatos($datos_servicio){

    $conexion = conexion();
    $sql = "insert into datos_solicitante(datos_nombre_correo, datos_sede, datos_area, datos_tipos_usuario, datos_reporte_via, datos_hardware, datos_software, datos_instalacion, datos_configuracion, datos_sin_acceso, datos_cambio_numero, datos_sin_liena, datos_cableado, datos_cambio_aparato, datos_apa_tel3, datos_tele_otro, datos_apa_tel1, datos_apa_tel2, datos_ruid_liena, datos_apa_tel4, datos_apa_tel5, datos_roseta1, datos_roseta2, datos_roseta3, datos_roseta4, datos_roseta5, datos_tar_red1, datos_tar_red2, datos_tar_red3, datos_tar_red4, datos_tar_red5, datos_jack1, datos_jack2, datos_jack3, datos_jack4, datos_jack5, datos_modem1, datos_modem2, datos_modem3, datos_modem4, datos_modem5, datos_plug1, datos_plug2, datos_plug3, datos_plug4, datos_plug5, datos_num_inventario, datos_utp1, datos_utp2, datos_utp3, datos_utp4, datos_utp5, datos_utp6, datos_utp7, datos_multi_1, datos_multi_2, datos_multi_3, datos_multi_4, datos_multi_5, datos_multi_6, datos_multi_7, datos_persona, datos_observaciones, datos_estado_reporte) 
                                    value ('$datos_servicio[0]','$datos_servicio[1]','')";



}