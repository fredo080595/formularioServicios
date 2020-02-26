<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>REPORTE DE SERVICIOS</title>
</head>
<body>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="formularioServicio">
                <div>
                    <h2 class="text-center">REPORTE DE SERVICIO</h2>
                    <p class="text-danger text-center">*Obligatorio</p>
                    <h4 class="text-center">DATOS DEL SOLICITANTE</h4>
                </div>
                <div class="form-row card p-3">
                    <div class="form-group col-md-12">
                        <label for="nombreCorreo">Nombre-Correo-TEL. y/o Ext. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nombreCorreo" id="nombreCorreo" placeholder="Tu respuesta" required>
                    </div>
                    <div class="form-group col-md-12">
                        <p>SEDE <span class="text-danger">*</span></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sede" id="exampleRadios1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                GAM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sede" id="exampleRadios2" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                COYOACÁN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sede" id="exampleRadios3" value="3" >
                            <label class="form-check-label" for="exampleRadios3">
                                AZCAPOTZALCO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sede" id="exampleRadios4" value="4">
                            <label class="form-check-label" for="exampleRadios4">
                                CAMPUS VIRTUAL
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sede" id="exampleRadios5" value="5" >
                            <label class="form-check-label" for="exampleRadios5">
                                JUSTO SIERRA
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="area">Área o Departamento al que pertenece <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="area" name="area" required placeholder="Tu respuesta">
                    </div>
                    <div class="form-group col-md-12">
                        <p>Usuario <span class="text-danger">*</span></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="usuario" id="usuario1" value="Administrativo" checked>
                            <label class="form-check-label" for="usuario1">
                                Administrativo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="usuario" id="usuario2" value="Académico">
                            <label class="form-check-label" for="usuario2">
                                Académico
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="usuario" id="usuario3" value="Alumno" >
                            <label class="form-check-label" for="usuario3">
                                Alumno
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="usuario" id="usuario4" value="Otro" >
                            <label class="form-check-label" for="usuario4">
                                Otro
                            </label>
                            <div class="form-group col-md-12">
                                <label for="usuario">Especifica</label>
                                <input type="text" class="form-control" name="usuarioOtro" id="usuario">
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <p>Reporte vía  <span class="text-danger">*</span></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reporte" id="reporte0" value="Telefónica" checked>
                            <label class="form-check-label" for="reporte0">
                                Telefónica
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reporte" id="reporte1" value="Personal">
                            <label class="form-check-label" for="reporte1">
                                Personal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reporte" id="reporte2" value="Escrito" >
                            <label class="form-check-label" for="reporte2">
                                Escrito
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reporte" id="reporte3" value="Chat" >
                            <label class="form-check-label" for="reporte3">
                                Chat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reporte" id="reporte4" value="Otro" >
                            <label class="form-check-label" for="reporte4">
                                Otro
                            </label>
                            <div class="form-group col-md-12">
                                <label for="reporte">Especifica</label>
                                <input type="text" class="form-control" name="reporteOtro" id="reporte">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center">
                    <h3>TIPO DE REPORTE</h3>
                    <p>SELECCIONE EL CAMPO DE REPORTE</p>
                </div>

                <div class="form-row card p-3">
                    <p>PC</p>
                    <div class="form-group col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hardware" value="HARDWARE" id="HARDWARE">
                            <label class="form-check-label" for="HARDWARE">
                                HARDWARE
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="software" value="SOFTWARE" id="software" >
                            <label class="form-check-label" for="software">
                                SOFTWARE
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-row card p-3">
                    <p>RED</p>
                    <div class="form-group col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="instalacion" name="instalacion" id="instalacion">
                            <label class="form-check-label" for="instalacion">
                                INSTALACIÓN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="configuracion" name="configuracion" id="configuracion" >
                            <label class="form-check-label" for="configuracion">
                                CONFIGURACIÓN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sin_red" value="sin red" id="sin_red" >
                            <label class="form-check-label" for="sin_red">
                                SIN ACCESO A LA RED
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-row card p-3">
                    <p>TELEFÓNICO</p>
                    <div class="form-group col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="RUIDO EN LÍNEA" name="ruido" id="ruido">
                            <label class="form-check-label" for="ruido">
                                RUIDO EN LÍNEA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SIN LÍNEA" name="sin_linea" id="sin_linea" >
                            <label class="form-check-label" for="sin_linea">
                                SIN LÍNEA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="CABLEADO" name="cableado" id="cableado">
                            <label class="form-check-label" for="cableado">
                                CABLEADO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="CAMBIO DE NÚMERO" name="cambio_numero" id="cambio_numero" >
                            <label class="form-check-label" for="cambio_numero">
                                CAMBIO DE NÚMERO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="CAMBIO DE APARATO" name="cambio_aparato" id="cambio_aparato" >
                            <label class="form-check-label" for="cambio_aparato">
                                CAMBIO DE APARATO
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="otro">Otro</label>
                            <input type="text" name="otro" class="form-control" id="otro">
                        </div>

                    </div>
                </div>

                <div class="text-center">
                    <h3>MATERIAL UTILIZADO</h3>
                    <p>Seleccione las opciones</p>
                </div>

                <div class="form-row card p-3">
                    <p>Material utilizado PIEZAS</p>
                    <div class="form-group col-md-12">
                        <p>APARATO TELEFÓNICO</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="apartadoTelefonico1" id="apartadoTelefonico1" value="1">
                            <label class="form-check-label" for="apartadoTelefonico1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="apartadoTelefonico2" id="apartadoTelefonico2" value="2">
                            <label class="form-check-label" for="apartadoTelefonico2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="apartadoTelefonico3" id="apartadoTelefonico3" value="3">
                            <label class="form-check-label" for="apartadoTelefonico3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="apartadoTelefonico4" id="apartadoTelefonico4" value="4">
                            <label class="form-check-label" for="apartadoTelefonico4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="apartadoTelefonico5" id="apartadoTelefonico5" value="5">
                            <label class="form-check-label" for="apartadoTelefonico5">5</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <p>ROSETA</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roseta1" name="roseta1" value="1">
                            <label class="form-check-label" for="roseta1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roseta2" name="roseta2" value="2">
                            <label class="form-check-label" for="roseta2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roseta3" name="roseta3" value="3">
                            <label class="form-check-label" for="roseta3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roseta4" name="roseta4" value="4">
                            <label class="form-check-label" for="roseta4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roseta5" name="roseta5" value="5">
                            <label class="form-check-label" for="roseta5">5</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <p>TARJETA DE RED</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tarjetaRed1" name="tarjetaRed1" value="1">
                            <label class="form-check-label" for="tarjetaRed1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tarjetaRed2" name="tarjetaRed2" value="2">
                            <label class="form-check-label" for="tarjetaRed2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tarjetaRed3" name="tarjetaRed3" value="3">
                            <label class="form-check-label" for="tarjetaRed3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tarjetaRed4" name="tarjetaRed4" value="4">
                            <label class="form-check-label" for="tarjetaRed4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tarjetaRed5" name="tarjetaRed5" value="5">
                            <label class="form-check-label" for="tarjetaRed5">5</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <p>JACK</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jack1" name="jack1" value="1">
                            <label class="form-check-label" for="jack1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jack2" name="jack2" value="2">
                            <label class="form-check-label" for="jack2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jack3" name="jack3" value="3">
                            <label class="form-check-label" for="jack3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jack4" name="jack4" value="4">
                            <label class="form-check-label" for="jack4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jack5" name="jack5" value="5">
                            <label class="form-check-label" for="jack5">5</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <p>MODEM</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="modem1" name="modem1" value="1">
                            <label class="form-check-label" for="modem1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="modem2" name="modem2" value="2">
                            <label class="form-check-label" for="modem2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="modem3" name="modem3" value="3">
                            <label class="form-check-label" for="modem3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="modem4" name="modem4" value="4">
                            <label class="form-check-label" for="modem4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="modem5" name="modem5" value="5">
                            <label class="form-check-label" for="modem5">5</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <p>PLUGS</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="plugs1" name="plugs1" value="1">
                            <label class="form-check-label" for="plugs1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="plugs2" name="plugs2" value="2">
                            <label class="form-check-label" for="plugs2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="plugs3" name="plugs3" value="3">
                            <label class="form-check-label" for="plugs3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="plugs4" name="plugs4" value="4">
                            <label class="form-check-label" for="plugs3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="plugs5" name="plugs5" value="5">
                            <label class="form-check-label" for="plugs3">5</label>
                        </div>
                    </div>
                </div>

                <div class="form-row card p-3">
                    <div class="form-group col-md-12">
                        <label for="">NÚMERO DE INVENTARIO MATERIALES</label>
                        <input type="text" name="num_material" class="form-control" placeholder="Tu respuesta">
                    </div>
                </div>

                <div class="form-row card p-3">
                    <p>Material utilizado metros</p>
                    <div class="form-group col-md-12">
                        <p>CABLE UTP</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp1" name="cableUp1" value="1">
                            <label class="form-check-label" for="cableUp1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp2" name="cableUp2" value="2">
                            <label class="form-check-label" for="cableUp2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp3" name="cableUp3" value="3">
                            <label class="form-check-label" for="cableUp3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp4" name="cableUp4" value="4">
                            <label class="form-check-label" for="cableUp4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp5" name="cableUp5" value="5">
                            <label class="form-check-label" for="cableUp5">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp6" name="cableUp6" value="5 A 10">
                            <label class="form-check-label" for="cableUp6">5 A 10</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="cableUp7" name="cableUp7" value="10 A 15">
                            <label class="form-check-label" for="cableUp7">10 A 15</label>
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <p>MULTIPAR</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar1" name="multipar1" value="1">
                            <label class="form-check-label" for="multipar1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar2" name="multipar2" value="2">
                            <label class="form-check-label" for="multipar2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar3" name="multipar3" value="3">
                            <label class="form-check-label" for="multipar3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar4" name="multipar4" value="4">
                            <label class="form-check-label" for="multipar4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar5" name="multipar5" value="5">
                            <label class="form-check-label" for="multipar5">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar6" name="multipar6" value="5 A 10">
                            <label class="form-check-label" for="multipar6">5 A 10</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="multipar7" name="multipar7" value="10 A 15">
                            <label class="form-check-label" for="multipar7">10 A 15</label>
                        </div>

                    </div>
                </div>

                <div class="form-row card p-3">

                    <label for="persona">PERSONA QUE REALIZÓ EL SERVICIO</label>
                    <select class="form-control" id="persona" name="persona">
                        <option value="">Elige</option>
                        <option value="Ing. Alexis Raúl Joffre Torres">Ing. Alexis Raúl Joffre Torres</option>
                        <option value="Ing. Iliana Verenize Medina Muñoz">Ing. Iliana Verenize Medina Muñoz</option>
                        <option value="Ing. Edgar A. Velázquez Ríos">Ing. Edgar A. Velázquez Ríos</option>
                    </select>

                </div>

                <div class="form-row card p-3">
                    <div class="form-group col-md-12">
                        <label for="Observaciones">Observaciones</label>
                        <input type="text" name="Observaciones" class="form-control" id="Observaciones">
                    </div>
                </div>
                <div class="form-row card p-3">
                    <div class="form-group col-md-12">
                        <label for="">ESTADO DEL REPORTE</label>
                        <select class="form-control" id="estadoReporte" name="estadoReporte">
                            <option value="0">...</option>
                            <option value="terminado">TERMINADO</option>
                            <option value="En proceso">EN PROCESO</option>
                            <option value="No concluido">NO CONCLUIDO</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="noConcluMotivo">Si seleccionó no concluido, describa el motivo.</label>
                        <input type="text" class="form-control" name="noConcluMotivo" id="noConcluMotivo" placeholder="Tu respuesta">
                    </div>
                </div>

                <div class="form-row card p-3">
                    <button class="btn btn-primary"  id="enviarDatos">Enviar</button>
                </div>
            </form>

        </div>
    </div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {

        $('#enviarDatos').on('click', function (e) {
            e.preventDefault();

            let datos = $('#formularioServicio').serializeArray();

            $.ajax({
                url: 'php/servicios.php',
                type: 'POST',
                dataType: 'json',
                data: datos,
                success: function (r) {
                    if(r){
                        alert('Se envió la informacion');
                    }else{
                        alert('Error al enviar la información');
                    }
                }
            })

        });

    });
</script>

</body>
</html>