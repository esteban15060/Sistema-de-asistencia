<?php include 'includes/header-practicante.php'; ?>
<?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexión a la base de datos
        $conn = mysqli_connect('localhost', 'root', '', 'asistencia');

        // Verificar conexión
        if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Obtener el código del practicante
        $codigo = $_POST['employee_id'];

        // Consultar los datos del practicante
        $query = "SELECT * FROM employees WHERE employee_id='$codigo'";
        $result = mysqli_query($conn, $query);

        // Verificar si se encontraron resultados
        if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        } else {
        echo "<div class='alert alert-danger'>No se encontró ningún practicante con el código ingresado.</div>";
        }

        // Cerrar la conexión a la base de datos
         mysqli_close($conn);
    }
?>
<body class="bg-white">
    <?php include 'includes/menu-bar-practicante.php'; ?>
    <div style="margin-left: 200px; margin-top: 30px; container-fluid">
        <div class="estilo-card-perfil">
          <div class="d-flex">
            
            <div>
                <h2 class="letraNavBar ps-5 pt-2 colorletraperfil">Bienvenido, <?php echo $row['firstname'] ;?></h2>
                <small class="letraNavBar ps-5 pt-1 colorletraperfil fw-bold text-wraper">Aquí encontrarás información necesaria sobre tus estadídticas y desempeño.</small>
                <div class="d-flex pt-3">
                    <h6 class="letraNavBar ps-5 colorletraperfil fw-normal" style="margin-left: 30px;">Comunicaciones</h6>
                    <h6 class="letraNavBar colorletraperfil fw-normal" style="margin-left: 70px;">Pre Profesional</h6>
                </div>
                <h6 class="letraNavBar ps-5 colorletraperfil fw-normal" style="margin-left: 30px;">Digimedia</h6>
                <div class="d-flex ps-5">
                    <h6 class="letraNavBar ps-2 diseñofechaingresoysalidad fw-normal">Ingreso:</h6>
                     <div class="ps-1 d-flex contenedor-fecha ms-2">
                         <h6 class="letraNavBar posicion-border3 diseñofecha text-center">07</h6>
                         <h6 class="letraNavBar posicion-border1 diseñofecha text-center" style="margin-left: 10px;">05</h6>
                         <h6 class="letraNavBar posicion-border2 diseñofecha text-center" style="margin-left: 10px;">23</h6>
                     </div>
                    <h6 class="letraNavBar ps-2 diseñofechaingresoysalidad fw-normal" style="margin-left: 50px;">Salida:</h6>
                    <div class="ps-1 d-flex contenedor-fecha ms-2">
                         <h6 class="letraNavBar posicion-border3  diseñofecha text-center">09</h6>
                         <h6 class="letraNavBar posicion-border1  diseñofecha text-center" style="margin-left: 10px;">08</h6>
                         <h6 class="letraNavBar posicion-border2  diseñofecha text-center" style="margin-left: 10px;">23</h6>
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



