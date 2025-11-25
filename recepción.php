<?php
$CAMPOS=[
    "nombre",
    "apellidos",
    "dni",
    "email",
    "tlfn",
    "alta",
    "provincia",
    "municipio"
];
foreach ($CAMPOS as $campo) {
    if (isset($_POST[$campo])) {
        ${$campo} = trim($_POST[$campo]);
    } else {
        echo "El $campo es obligatorio.";
    }
}

$patron_nombre_apellidos="/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s\-\']+$/";
$patron_dni="/^\d{8}[a-zA-Z]$/";
$patron_email="/^[a-z\d\+\-\%]+@[a-z\.\d\+\-\%]+/";
$patron_tlfn="/^\d{9}$/";
$errores=0;

if (!preg_match($patron_nombre_apellidos,$_POST["nombre"])) {
    echo "El campo nombre no cumple con el formato."."</br>";
    $errores++;
};

if (!preg_match($patron_nombre_apellidos,$_POST["apellidos"])) {
    echo "El campo apellidos no cumple con el formato."."</br>";
    $errores++;
};

if (!preg_match($patron_dni,$_POST["dni"])) {
    echo "El campo DNI no cumple con el formato."."</br>";
    $errores++;
};

if (!preg_match($patron_email,$_POST["email"])) {
    echo "El campo correo electrónico no cumple con el formato."."</br>";
    $errores++;
};

if (!preg_match($patron_tlfn,$_POST["tlfn"])) {
    echo "El campo teléfono no cumple con el formato."."</br>";
    $errores++;
};

if ($errores) {
    echo "El total de errores de formato es: $errores";
} else {
    echo "Usuario dado de alta :)";
}
?>