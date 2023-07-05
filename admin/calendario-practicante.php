<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
    <?php include 'includes/menu-bar-practicante.php'; ?>
    <div style="margin-left: 100px; margin-top: 30px;" class="container-fluid">
        <div class="buttons" style="margin-left: 100px;">
            <button class="active">MIS TAREAS</button>
            <button>EVENTOS</button>
            <button>GENERAL</button>
        </div>
        <div id="calendar" class="container pb-5"></div>

        <script src="../dist/js/calendar.js"></script>
        
    </div>

</body>