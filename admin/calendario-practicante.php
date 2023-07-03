<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
    <?php include 'includes/menu-bar-practicante.php'; ?>
    <div style="margin-left: 200px; margin-top: 30px; container-fluid">
        <div class="buttons">
            <button class="active">MIS TAREAS</button>
            <button>EVENTOS</button>
            <button>GENERAL</button>
        </div>
        <div id="calendar" class="container pb-5"></div>

        <script src="../dist/js/calendar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>

    </div>

</body>