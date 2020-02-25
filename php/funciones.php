<?php

function conexion(){
    $conexion = mysqli_connect('localhost','root','','servicios');
    return $conexion;
}


function insertarDatos($datos_servicio){

    $conexion = conexion();
    $sql = "insert into datos_solicitante(datos_nombre_correo, datos_sede, datos_area, datos_tipos_usuario, datos_reporte_via, datos_reporte_via_otro, datos_hardware, datos_software, datos_instalacion, datos_configuracion, datos_sin_acceso, datos_ruido, datos_sin_liena, datos_cableado, datos_cambio_numero, datos_cambio_aparato, datos_tele_otro, datos_apa_tel1, datos_apa_tel2, datos_apa_tel3, datos_apa_tel4, datos_apa_tel5, datos_roseta1, datos_roseta2, datos_roseta3, datos_roseta4, datos_roseta5, datos_tar_red1, datos_tar_red2, datos_tar_red3, datos_tar_red4, datos_tar_red5, datos_jack1, datos_jack2, datos_jack3, datos_jack4, datos_jack5, datos_modem1, datos_modem2, datos_modem3, datos_modem4, datos_modem5, datos_plug1, datos_plug2, datos_plug3, datos_plug4, datos_plug5, datos_num_inventario, datos_utp1, datos_utp2, datos_utp3, datos_utp4, datos_utp5, datos_utp6, datos_utp7, datos_multi_1, datos_multi_2, datos_multi_3, datos_multi_4, datos_multi_5, datos_multi_6, datos_multi_7, datos_persona, datos_observaciones, datos_estado_reporte, datos_des_motivo) 
                                    value ('$datos_servicio[0]','$datos_servicio[1]','$datos_servicio[2]','$datos_servicio[3]','$datos_servicio[4]','$datos_servicio[5]','$datos_servicio[5]','$datos_servicio[6]','$datos_servicio[7]','$datos_servicio[8]','$datos_servicio[9]','$datos_servicio[10]','$datos_servicio[11]','$datos_servicio[12]','$datos_servicio[13]','$datos_servicio[14]','$datos_servicio[15]','$datos_servicio[16]','$datos_servicio[17]','$datos_servicio[18]','$datos_servicio[19]','$datos_servicio[20]','$datos_servicio[21]','$datos_servicio[22]','$datos_servicio[23]','$datos_servicio[24]','$datos_servicio[25]','$datos_servicio[26]','$datos_servicio[27]','$datos_servicio[29]','$datos_servicio[30]','$datos_servicio[31]','$datos_servicio[32]','$datos_servicio[33]','$datos_servicio[34]','$datos_servicio[35]','$datos_servicio[36]','$datos_servicio[37]','$datos_servicio[38]','$datos_servicio[39]','$datos_servicio[40]','$datos_servicio[41]','$datos_servicio[42]','$datos_servicio[43]','$datos_servicio[44]','$datos_servicio[45]','$datos_servicio[46]','$datos_servicio[47]','$datos_servicio[48]','$datos_servicio[49]','$datos_servicio[50]','$datos_servicio[51]','$datos_servicio[52]','$datos_servicio[53]','$datos_servicio[54]','$datos_servicio[55]','$datos_servicio[56]','$datos_servicio[57]','$datos_servicio[58]','$datos_servicio[59]','$datos_servicio[60]','$datos_servicio[61]','$datos_servicio[62]','$datos_servicio[63]','$datos_servicio[64]','$datos_servicio[65]')";
    $result = mysqli_query($conexion,$sql);
    if ($result){
        return true;
    }else{
        return false;
    }

}