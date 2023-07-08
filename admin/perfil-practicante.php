<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
    <?php include 'includes/menu-bar-practicante.php'; ?>
    <div  class="container-fluid" id="grid-perfil">
        <div class="d-flex estilo-card-perfil">
            
            <div class="tarjeta-perfil" id="perfil">
                <div>
                    <?php
                        $cadena = $row['firstname'];
                        $separador = " ";
                        $array = explode($separador, $cadena);
                    ?>
                    <h2 class="letraNavBar colorletraperfil"><?php
                        if ($row['gender'] == 'Female'){
                            echo 'Bienvenida, ';
                        } else {
                            echo 'Bienvenido, ';
                        }
                    ?> <?php echo $array[0] ;?></h2>
                    <p class="letraNavBar colorletraperfil  text-wraper">Aquí encontrarás información necesaria sobre tus estadísticas y desempeño.</p>
                </div>
                <div class="d-flex perfil-presentacion">
                    <h6 class="letraNavBar  colorletraperfil fw-normal" style="margin-left: 30px;"><?php echo $row['position'] ;?></h6>
                    <h6 class="letraNavBar colorletraperfil fw-normal tipo-job" style="margin-left: 70px;">Pre Profesional</h6>
                </div>
                <h6 class="letraNavBar perfil-presentacion2 colorletraperfil fw-normal" style="margin-left: 30px;"><?php echo $row['negocio'] ;?></h6>
                <div class="d-flex perfil-contrato">
                    <h6 class="letraNavBar diseñoFechaIngreso">Ingreso:</h6>
                    <div class="ps-1 d-flex contenedor-fecha ms-2">
                        <?php
                            $cadena2 = $row['created_on'];
                            $separador2 = "-";
                            $array2 = explode($separador2, $cadena2);
                        ?>
                        <h6 class="letraNavBar posicion-border3 diseñofecha text-center"><?php echo $array2[2] ;?></h6>
                        <h6 class="letraNavBar posicion-border1 diseñofecha text-center" style="margin-left: 10px;"><?php echo $array2[1] ;?></h6>
                        <h6 class="letraNavBar posicion-border2 diseñofecha text-center" style="margin-left: 10px;"><?php echo $array2[0][2].$array2[0][3] ;?></h6>
                    </div>
                    <h6 class="letraNavBar diseñoFechaSalida">Salida:</h6>
                    <div class="ps-1 d-flex contenedor-fecha ms-2">
                        <h6 class="letraNavBar posicion-border3  diseñofecha text-center">09</h6>
                        <h6 class="letraNavBar posicion-border1  diseñofecha text-center" style="margin-left: 10px;">08</h6>
                        <h6 class="letraNavBar posicion-border2  diseñofecha text-center" style="margin-left: 10px;">23</h6>
                    </div>
                </div>
            </div>
            <div  class="perfil-yuntas">
                <?php include 'includes/perfil_hombre-mijer.php'?>
            </div>
        </div>
        <div class="card perfil-estadistica-desempeño" id="estadistica-desempeño">
            <div class="d-flex encabezado">
                <div>
                    <h6 class="letraNavBar colorletraperfil">Estadísticas de desempeño</h6>
                    <p class="letraNavBar colorletraperfil">Última semana</p>
                </div>
                <div class="ver-mas">
                    <a class="letraNavBar colorletraperfil">Ver más >></a>
                </div>
            </div>
            <div class="grafico-container">
                <canvas id="bar-chart"></canvas>
            </div>
        </div>
        <div class="card perfil-estado-perfil" id="estado">
            <h5 class="letraNavBar colorletraperfil">ESTADO DEL PERFIL</h5>
            <hr class="mt-0 colorlinea">
            <div id="estados-evaluados">
                <div id="estado-1">
                    <div class="d-flex">
                        <img src="../img/horas-realizadas.webp">
                        <p class="letraNavBar colorletraperfil">Total horas realizadas</p>
                    </div>
                    <div class="progress-circular">
                            <span class="letraNavBar value">160<span class="letraNavBar letra-pequena">Horas</span></span>
                    </div>
                </div>
                <div id="estado-2">
                    <div class="d-flex">
                        <img class="icono-estado" src="../img/dias-agregados.webp">
                        <p class="letraNavBar colorletraperfil">Días agregados</p>
                    </div>
                    <div class="progress-circular">
                            <span class="letraNavBar value2">2<span class="letraNavBar letra-pequena">Días</span></span>
                    </div>
                </div>
                <div id="estado-3">
                    <div class="d-flex">
                        <img src="../img/icono-faltas-injustificadas.webp">
                        <p class="letraNavBar colorletraperfil">Faltas injustificadas</p>
                    </div>
                    <div class="progress-circular2">
                            <span class="letraNavBar value2">1<span class="letraNavBar letra-pequena">Días</span></span>
                    </div>
                </div>
                <div id="estado-4">
                    <div class="d-flex">
                        <img class="icono-estado" src="../img/icono-horas-pendientes.webp">
                        <p class="letraNavBar colorletraperfil">Horas pendientes de recuperación</p>
                    </div>
                    <div class="progress-circular2">
                            <span class="letraNavBar value">4.5<span class="letraNavBar letra-pequena">Horas</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card perfil-logros" id="logros">
            <div class="d-flex encabezado">
                <h6 class="letraNavBar colorletraperfil">Logros</h6>
                <a class="letraNavBar colorletraperfil">Ver más >></a>
            </div>
            <div class="d-flex">
                <div class="circle-logro"></div>
                <div class="circle-logro2"></div>
                <div class="circle-logro2"></div>
            </div>
            <hr class=" colorlinea">
            <div class="d-flex encabezado">
                <h6 class="letraNavBar colorletraperfil">Recordatorio Semanal</h6>
                <a class="letraNavBar colorletraperfil">Ver más >></a>
            </div>
            <div class="mt-3">
                <div class="d-flex">
                    <img src="../img/icono-recordatorio.webp">
                    <p class="letraNavBar colorletraperfil">Viernes 23 de Junio - Exposición de informes mensuales</p>
                </div>
                <div class="d-flex">
                    <img src="../img/icono-recordatorio.webp">
                    <p class="letraNavBar colorletraperfil">Sábado 24 de Junio - Presentación página web</p>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        var ctx = document.getElementById('bar-chart').getContext('2d');

        var data = {
            labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            datasets: [
                {
                    label: 'Compromiso',
                    data: [1, 2, 3, 4, 5, 6],
                    backgroundColor: '#00D7C9', // color cian
                    borderWidth: 1
                },
                {
                    label: 'Calidad y Productividad',
                    data: [7, 8, 9, 10, 11, 12],
                    backgroundColor: '#003B93', // color azul
                    borderWidth: 1
                },
                {
                    label: 'Iniciativa y Liderazgo',
                    data: [10, 11, 12, 13, 14, 15],
                    backgroundColor: '#189834', // color verde
                    borderWidth: 1
                },
                {
                    label: 'Trabajo en Equipo',
                    data: [13, 14, 15, 16, 17, 18],
                    backgroundColor: '#7B22B9', // color morado
                    borderWidth: 1
                },
            ]
        };

        var options = {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom', // Colocar la leyenda en la parte inferior
                },
            },
            scales: {
                x: {
                    beginAtZero: true,
                    reverse: false,
                },
                y: {
                    beginAtZero: true,
                }
            }
        };

        var barChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
</body>








