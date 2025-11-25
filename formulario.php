<?php
    $prov_sede = [
        "Málaga"  => ["Benalmádena", "Málaga"],
        "Sevilla" => ["Dos Hermanas", "Alcalá de Guadaíra"],
        "Valencia" => ["Gandía", "Torrent"],
        "Madrid"  => ["Móstoles", "Alcalá de Henares"],
        "Barcelona" => ["Hospitalet de Llobregat", "Badalona"],
        "Granada" => ["Motril", "Almuñécar"]
    ];

    $depart = [
        "Dirección General / Gerencia",
        "Finanzas / Contabilidad",
        "Recursos Humanos (RRHH)",
        "Tecnologías de la Información (TI) / Sistemas",
        "Desarrollo de Software / Ingeniería",
        "Seguridad de la Información (Ciberseguridad)",
        "Comercial / Ventas",
        "Marketing",
        "Atención al Cliente / Soporte",
        "Producción / Fabricación",
        "Logística / Cadena de Suministro",
        "Calidad"
    ]
?>
<body>
    <form action="./recogida_ejercicio.php" method="post">
        <span>Nombre: </span>
        <input type="text" name="nombre" size="37px">
        </br>
        <span>Apellidos: </span>
        <input type="text" name="apellidos" size="37px">
        </br>
        <span>DNI: </span>
        <input type="text" name="dni" size="37px">
        </br>
        <span>Email: </span>
        <input type="text" name="email" size="37px">
        </br>
        <span>Teléfono: </span>
        <input type="text" name="tlfn" size="37px">
        </br>
        <span>Fecha de alta: </span>
        <input type="date" name="alta" size="37px">
        </br>
        <span>Provincia: </span>
        <select name="prov">
            <?php
                foreach ($prov_sede as $prov => $sedes) {
                    echo "<option value='$prov'>";
                    echo "$prov";
                    echo "</option>";
                }
            ?>

        </select>
    </form>
</body>
</html>