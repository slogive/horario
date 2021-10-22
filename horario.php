<?php require("php/data.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Horario | Nata</title>
        <?php echo $data ?>
    </head>
    <body onload="DivSize()" onresize="DivSize()">
        <center><h1>Horario</h1></center>

        <div class="Scheduler" style="display: block; position: relative;">
            <div class="Horario" id="Horario">

                <!-- Header -->

                <div class="item em"><span>Horas</span></div>

                <div class="item em"><span>Lunes</span></div>

                <div class="item em"><span>Martes</span></div>

                <div class="item em"><span>Miercoles</span></div>

                <div class="item em"><span>Jueves</span></div>

                <div class="item em"><span>Horas</span></div>

                <div class="item em"><span>Viernes</span></div>

                <!-- Hours -->

                <div class="item horas" style="grid-row: 2;"><span>7:00 am - 7:30 am</span></div>

                <div class="item horas" style="grid-row: 3;"><span>7:30 am - 8:10 am</span></div>

                <div class="item horas" style="grid-row: 4;"><span>8:10 am - 8:50 am</span></div>

                <div class="item horas" style="grid-row: 5;"><span>8:50 am - 9:20 am</span></div>

                <div class="item horas" style="grid-row: 6;"><span>9:20 am - 10:00 am</span></div>

                <div class="item horas" style="grid-row: 7;"><span>10:00 am - 10:40 am</span></div>

                <div class="item horas" style="grid-row: 8;"><span>10:40 am - 10:55 am</span></div>

                <div class="item horas" style="grid-row: 9;"><span>10:55 am - 11:35 am</span></div>

                <div class="item horas" style="grid-row: 10;"><span>11:35 am - 12:15</span></div>

                <div class="item horas" style="grid-row: 11;"><span>12:15 pm - 1:00 pm</span></div>

                <div class="item horas" style="grid-row: 12;"><span>1:00 pm - 1:40 pm</span></div>

                <div class="item horas" style="grid-row: 13;"><span>1:40 pm - 2:20 pm</span></div>
                
                    <!-- Hours Viernes -->

                    <div class="item horas" style="grid-row: 2; grid-column: 6 !important;"><span>7:00 am - 7:30 am</span></div>

                    <div class="item horas" style="grid-row: 3; grid-column: 6 !important;"><span>7:30 am - 8:00 am</span></div>

                    <div class="item horas" style="grid-row: 4; grid-column: 6 !important;"><span>8:00 am - 8:30 am</span></div>

                    <div class="item horas" style="grid-row: 5; grid-column: 6 !important;"><span>8:30 am - 9:00 am</span></div>

                    <div class="item horas" style="grid-row: 6; grid-column: 6 !important;"><span>9:00 am - 9:30 am</span></div>

                    <div class="item horas" style="grid-row: 7; grid-column: 6 !important;"><span>9:30 am - 10:00 am</span></div>

                    <div class="item horas" style="grid-row: 8; grid-column: 6 !important;"><span>10:00 am - 10:15 am</span></div>

                    <div class="item horas" style="grid-row: 9; grid-column: 6 !important;"><span>10:15 am - 10:40 am</span></div>

                    <div class="item horas" style="grid-row: 10; grid-column: 6 !important;"><span>10:40 am - 11:10 am</span></div>

                    <div class="item horas" style="grid-row: 11; grid-column: 6 !important;"><span>11:10 am - 11:25 am</span></div>

                    <div class="item horas" style="grid-row: 12; grid-column: 6 !important;"><span>11:25 am - 12:00 pm</span></div>

                <!-- Class -->

                <!-- Lunes -->

                    <div class="item activeItem" style="grid-row: 2; grid-column: 2;">
                        <span>Dirección de grupo</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 3; grid-column: 2;">
                        <span class="title">1 Hora</span>
                        <span>Ciencias Naturales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 4; grid-column: 2;">
                        <span class="title">2 Hora</span>
                        <span>Danza - Teatro</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 6; grid-column: 2;">
                        <span class="title">3 Hora</span>
                        <span>Danza - Teatro</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 7; grid-column: 2;">
                        <span class="title">4 Hora</span>
                        <span>Ingles</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 9 / span 2; grid-column: 2;">
                        <span class="title">5|6 Hora</span>
                        <span>Matematicas</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 12; grid-column: 2;">
                        <span class="title">7 Hora</span>
                        <span>Ed. Religiosa</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 13; grid-column: 2;">
                        <span class="title">8 Hora</span>
                        <span>Lengua Castellana</span>
                    </div>

                <!-- Martes -->

                <div class="item activeItem" style="grid-row: 2; grid-column: 3;">
                        <span>Proyecto Transversal</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 3 / span 2; grid-column: 3;">
                        <span class="title">1|2 Hora</span>
                        <span>Ed. Fisica</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 6; grid-column: 3;">
                        <span class="title">3 Hora</span>
                        <span>Lengua Castellana</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 7; grid-column: 3;">
                        <span class="title">4 Hora</span>
                        <span>Ed. Religiosa</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 9; grid-column: 3;">
                        <span class="title">5 Hora</span>
                        <span>Danza - Teatro</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 10; grid-column: 3;">
                        <span class="title">6 Hora</span>
                        <span>Ciencias Naturales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 12; grid-column: 3;">
                        <span class="title">7 Hora</span>
                        <span>Ciencias Sociales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 13; grid-column: 3;">
                        <span class="title">8 Hora</span>
                        <span>Ingles</span>
                    </div>

                <!-- Miercoles -->

                <div class="item activeItem" style="grid-row: 2; grid-column: 4;">
                        <span>Dirección de grupo</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 3; grid-column: 4;">
                        <span class="title">1 Hora</span>
                        <span>Catedra para la paz</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 4; grid-column: 4;">
                        <span class="title">2 Hora</span>
                        <span>Matematica Financiera</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 6; grid-column: 4;">
                        <span class="title">3 Hora</span>
                        <span>Lengua Castellana</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 7; grid-column: 4;">
                        <span class="title">4 Hora</span>
                        <span>Ingles</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 9; grid-column: 4;">
                        <span class="title">5 Hora</span>
                        <span>OPL</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 10; grid-column: 4;">
                        <span class="title">6 Hora</span>
                        <span>Ciencias Sociales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 12; grid-column: 4;">
                        <span class="title">7 Hora</span>
                        <span>Tecnologia</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 13; grid-column: 4;">
                        <span class="title">8 Hora</span>
                        <span>Ciencias Sociales</span>
                    </div>

                <!-- Jueves -->

                <div class="item activeItem" style="grid-row: 2; grid-column: 5;">
                        <span>Proyecto Transversal</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 3 / span 2; grid-column: 5;">
                        <span class="title">1|2 Hora</span>
                        <span>Matematica</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 6; grid-column: 5;">
                        <span class="title">3 Hora</span>
                        <span>Ciencias Naturales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 7; grid-column: 5;">
                        <span class="title">4 Hora</span>
                        <span>Lengua Castellana</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 9 / span 2; grid-column: 5;">
                        <span class="title">5|6 Hora</span>
                        <span>Ed. Fisica</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 12; grid-column: 5;">
                        <span class="title">7 Hora</span>
                        <span>Ingles</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 13; grid-column: 5;">
                        <span class="title">8 Hora</span>
                        <span>Lengua Castellana</span>
                    </div>

                <!-- Viernes -->

                    <div class="item activeItem" style="grid-row: 2; grid-column: 7;">
                        <span class="title">1 Hora</span>
                        <span>Ingles</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 3; grid-column: 7;">
                        <span class="title">2 Hora</span>
                        <span>OPL</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 4; grid-column: 7;">
                        <span class="title">3 Hora</span>
                        <span>Tecnologia</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 6; grid-column: 7;">
                        <span class="title">4 Hora</span>
                        <span>Ciencias Sociales</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 7; grid-column: 7;">
                        <span class="title">5 Hora</span>
                        <span>Matematicas</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 9; grid-column: 7;">
                        <span class="title">6 Hora</span>
                        <span>Emprend | Form. artis</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 10; grid-column: 7;">
                        <span class="title">7 Hora</span>
                        <span>Matematica Financiera</span>
                    </div>

                    <div class="item activeItem" style="grid-row: 12; grid-column: 7;">
                        <span class="title">8 Hora</span>
                        <span>Ciencias Naturales</span>
                    </div>

                <!-- Espacios -->

                <div class="item activeItem" style="grid-row: 5; grid-column: 2 / span 4;">
                    <span class="title">Descanso</span>
                </div>
                
                <div class="item activeItem" style="grid-row: 8; grid-column: 2 / span 4;">
                    <span class="title">Pausa Activa</span>
                </div>

                <div class="item activeItem" style="grid-row: 11; grid-column: 2 / span 4;">
                    <span class="title">Descanso</span>
                </div>

                <div class="item activeItem" style="grid-row: 5; grid-column: 7;">
                    <span class="title">Descanso</span>
                </div>
                
                <div class="item activeItem" style="grid-row: 8; grid-column: 7;">
                    <span class="title">Pausa Activa</span>
                </div>

                <div class="item activeItem" style="grid-row: 11; grid-column: 7;">
                    <span class="title">Pausa Activa</span>
                </div>
            </div>

            <div class="HorarioBotton" style="position: absolute; top: 0; z-index: -1;" id="HorarioBotton">
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
                <div class="item rowcolor1"><span></span></div>
                <div class="item rowcolor0"><span></span></div>
            </div>
        </div>

        <script>
            
        </script>
    </body>
    <script src="js/functions.js"></script>
</html>