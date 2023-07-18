<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
    <?php include 'includes/fecha-practicante.php' ?>
    <nav class="navbar navbar-expand-lg bg-nav nav-modelo">
        <div class="container-fluid">
            <div class="input-group mb-3 diseño-escribir-aqui">
                <input type="text" class="form-control" placeholder="Escribe aqui...">
                <span class="ps-5"></span>
            </div>
            <div class="d-flex posicion">
                <h6 class="pe-3 letraNavBar posicion-fecha">
                    <?php echo $diaActual . " de " . $mesActual; ?>
                </h6>
                <img src="../img/notificacion.webp" alt="notificacion" height="40" width="40">
            </div>
            <div class="circle-container d-flex me-5 posicion-perfil">
                <?php include 'includes/fotoperfil.php'; ?>
                <h6 class="ps-3 letraNavBar posicion-fecha">
                    <?php echo $row['firstname']; ?>
                </h6>
            </div>
        </div>
    </nav>
    <aside class="main-sidebar color-menubar-practicante aside-modelo">
        <div class="siderbar-practicantes">
            <?php include 'includes/cambio_logo.php' ?>
        </div>
        <br>
        <div class="nav-items">
            <div class="enlaces" href="home-practicante.php" id="button1">
                <form method="post" action="home-practicante.php" class="form__ver-perfil">
                    <input id="idPracticante" type="hidden" name="employee_id"
                        value="<?php echo $row['employee_id']; ?>">
                    <button type="submit" class="enlaces__btn" id="button1">
                        <a class="enlaces" href="#" id="button1">
                            <img class="icono-centrar" src="../img/icono-home.webp">
                            <h6 class="text-center text-light letraNavBar">INICIO</h6>
                        </a>
                    </button>
                </form>
            </div>
            <br>
            <div class="enlaces" href="perfil-practicante.php" id="button1">
                <form method="post" action="perfil-practicante.php" class="form__ver-perfil">
                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                    <button type="submit" class="enlaces__btn" id="button1">
                        <a class="enlaces" href="#" id="button1">
                            <img class="icono-centrar" src="../img/icono-perfil.webp">
                            <h6 class="text-center text-light letraNavBar">MI PERFIL</h6>
                        </a>
                    </button>
                </form>
            </div>
            <br>
            <div class="enlaces" id="button1">
                <form method="post" action="home-practicante.php" class="form__ver-perfil">
                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                    <button type="submit" class="enlaces__btn" id="button1">
                        <a class="enlaces" href="#" id="button1">
                            <img class="icono-centrar" src="../img/icono-estadistica.webp">
                            <h6 class="text-center text-light letraNavBar" style="width: 120px; margin-left: 15px;">
                                ESTADISTICAS Y LOGROS</h6>
                        </a>
                    </button>
                </form>
            </div>
            <br>
            <div class="enlaces" href="calendario-practicante.php" id="button1">
                <form method="post" action="calendario-practicante.php" class="form__ver-perfil">
                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                    <button type="submit" class="enlaces__btn" id="button1">
                        <a class="enlaces" href="#" id="button1">
                            <img class="icono-centrar" src="../img/icono-calendario.webp">
                            <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">
                                CALENDARIO O AGENDA</h6>
                        </a>
                    </button>
                </form>
            </div>
            <br>
            <div class="enlaces clicked" id="button1">
                <form method="post" action="buzon.php" class="form__ver-perfil">
                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                    <button type="submit" class="enlaces__btn" id="button1">
                        <a class="enlaces" href="#" id="button1">
                            <img class="icono-centrar" src="../img/icono-buzon-sugerencia.webp">
                            <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">
                                BUZON DE SUGERENCIAS</h6>
                        </a>
                    </button>
                </form>
            </div>
        </div>
        <br>
        <div class="mb-3 salir">
            <a class="enlaces" onclick="salirMiPerfil()">
                <img class="icono-centrar" src="../img/icono-salir.webp">
                <h6 class="text-center text-light letraNavBar">SALIR</h6>
            </a>
        </div>
    </aside>

    <main class="buzon-container">
        <div class="regresar">
            <!-- <a href="buzon.php">
                < VOLVER</a> -->
            <form method="post" action="buzon.php">
                <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                <input class="volver" type="submit" value="< VOLVER">
            </form>
        </div>

        <div class="form-container">
            <p>¡Adelante! Queremos escucharte :)</p>

            <div>
                <div class="form-inputs">
                    <select>
                        <option value="">¿Cómo te llamas?</option>
                        <option value="">Prefiero no decirlo</option>
                        <option value="">MARIA HERNANDEZ</option>
                    </select>
                    <input type="text" placeholder="Nombre del asunto (Título)" />
                    <select>
                        <option value="">¿Para qué usaras el buzón?</option>
                        <option value="">Sugerencia de mejora</option>
                        <option value="">Observación</option>
                        <option value="">Reclamo</option>
                    </select>
                    <select>
                        <option value="">¿A qué unidad perteneces?</option>
                        <option value="">NHL Decoraciones</option>
                        <option value="">Vaping Cloud</option>
                        <option value="">Yuntas Producciones</option>
                        <option value="">Digimedia Marketing</option>
                    </select>
                </div>
                <textarea class="contenido-sugerencia" placeholder="Escribe aquí..."></textarea>
                <div class="form-btns">
                    <!-- Cuando se guarda la sugerencia se guarda en la lista de borradores -->
                    <!-- <a href="#" class="guardar">Guardar</a> -->
                    <form method="post" action="borradores-buzon.php">
                        <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                        <input class="guardar" type="submit" value="Guardar">
                    </form>
                    <!-- <a href="sugerencia-recibida.php" class="enviar">Enviar</a> -->
                    <form method="post" action="sugerencia-recibida.php">
                        <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                        <input class="enviar" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        function salirMiPerfil() {
            Swal.fire({
                title: '¿Estás seguro de que quieres salir de tu perfil?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Salir de perfil'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                }
            })
        }
    </script>
    <script>
        function toggleButtonColor(event, buttonId) {
            event.preventDefault();
            const buttons = document.getElementsByClassName("enlaces");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("clicked");
            }
            const button = document.getElementById(buttonId);
            button.classList.add("clicked");
        }
    </script>
</body>