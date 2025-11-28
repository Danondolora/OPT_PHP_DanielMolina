<!DOCTYPE html>
<html lang="en">
    <?php
        require_once "datos.php";
    ?>

    <body>
        <form action="./recepción.php" method="post">
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
            <select id="provincia" name="provincia">
                <option value="">Selecciona una provincia</option>
                <?php
                    foreach ($prov_sede as $prov => $sedes) {
                        echo "<option value='$prov'>$prov</option>";
                    }
                ?>
            </select>
            </br>
            <span>Municipio/Sede: </span>
            <select name="sede" id="sede">
                <option value="">-- Elige primero una provincia --</option>
            </select>
            </br>
            <span>Departamento: </span>
            <select name="depart">
                <option value="">Selecciona un departamento</option>
                <?php
                    foreach ($departs as $depart) {
                        echo "<option value='$depart'>$depart</option>";
                    }
                ?>
            </select>
            </br>
            <input type="submit">
        </form>

        <script>
            const PROVINCIAS_SEDES = <?php echo $json_provincias; ?>;
        </script>
        <script src="interactividad.js"></script> 
    </body>
</html>