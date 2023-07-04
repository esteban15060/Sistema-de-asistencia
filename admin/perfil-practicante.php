<?php include 'includes/header-practicante.php'; ?>
<body class="bg-white">
    <?php include 'includes/menu-bar-practicante.php'; ?>
    <div style="margin-left: 200px; margin-top: 30px; container-fluid">
        <div class="estilo-card-perfil">
          <div class="d-flex">
            
            <div>
                <h2 class="letraNavBar ps-5 pt-2 colorletraperfil">Bienvenido, <?php echo $row['firstname'] ;?></h2>
                <small class="letraNavBar ps-5 pt-1 colorletraperfil fw-bold text-wraper">Aquí encontrarás información necesaria sobre tus estadídticas y desempeño.</small>
                <div class="d-flex pt-3">
                    <h6 class="letraNavBar ps-5 colorletraperfil fw-normal" style="margin-left: 30px;"><?php echo $row['position'] ;?></h6>
                    <h6 class="letraNavBar colorletraperfil fw-normal" style="margin-left: 70px;">Pre Profesional</h6>
                </div>
                <h6 class="letraNavBar ps-5 colorletraperfil fw-normal" style="margin-left: 30px;"><?php echo $row['negocio'] ;?></h6>
                <div class="d-flex ps-5">
                    <h6 class="letraNavBar ps-2 diseñofechaingresoysalidad fw-normal">Ingreso:</h6>
                    <?php
                        $cadena = $row['created_on'];
                        $separador = "-";
                        $array = explode($separador, $cadena);
                    ?>
                     <div class="ps-1 d-flex contenedor-fecha ms-2">
                         <h6 class="letraNavBar posicion-border3 diseñofecha text-center"><?php echo $array[0] ;?></h6>
                         <h6 class="letraNavBar posicion-border1 diseñofecha text-center" style="margin-left: 10px;"><?php echo $array[1] ;?></h6>
                         <h6 class="letraNavBar posicion-border2 diseñofecha text-center" style="margin-left: 10px;"><?php echo $array[2] ;?></h6>
                     </div>
                    <h6 class="letraNavBar ps-2 diseñofechaingresoysalidad fw-normal" style="margin-left: 50px;">Salida:</h6>
                    <?php
                        $cadena2 = $row['salida'];// Por cambiar a FECHA DE SALIDA (colocar el nombre del campo)
                        $separador2 = ":";
                        $array2 = explode($separador2, $cadena2);
                    ?>
                    <div class="ps-1 d-flex contenedor-fecha ms-2">
                         <h6 class="letraNavBar posicion-border3 diseñofecha text-center"><?php echo $array2[0] ;?></h6>
                         <h6 class="letraNavBar posicion-border1  diseñofecha text-center" style="margin-left: 10px;"><?php echo $array2[1] ;?></h6>
                         <h6 class="letraNavBar posicion-border2  diseñofecha text-center" style="margin-left: 10px;"><?php echo $array2[2] ;?></h6>
                     </div>
                </div>
            </div>
            <div  style="margin-left: 60px; margin-top: 20px;">
                <img src="../img/yuntas.webp">
            </div>
          </div>
        </div>
       
    </div>
</body>




