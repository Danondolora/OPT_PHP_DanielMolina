<?php
$CAMPOS=[
    "nombre",
    "apellidos",
    "dni",
    "email",
    "tlfn",
    "alta",
    "provincia",
    "sede"
];
# Se comprueba si los campos del formulario tienen valores
# (aunque al no poner nada en el formulario la variable tiene valor "")
foreach ($CAMPOS as $campo) {
    if (isset($_POST[$campo])) {
        ${$campo} = trim($_POST[$campo]);
    } else {
        echo "El $campo es obligatorio.";
    }
}

# Se definen las expresiones regulares para hacer las comprobaciones de formato
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

# Debido a que los valores de alta, provincia, sede y departamento no son inputs de texto o de número,
# La comprobación solamente es necesario mirar si la variable tiene valor o no
if (empty($_POST["alta"])) {
    echo "El campo fecha de alta no cumple con el formato."."</br>";
    $errores++;
}

if (empty($_POST["provincia"])) {
    echo "El campo provincia no cumple con el formato."."</br>";
    $errores++;
}

if (empty($_POST["sede"])) {
    echo "El campo sede no cumple con el formato."."</br>";
    $errores++;
}

if (empty($_POST["depart"])) {
    echo "El campo departamento no cumple con el formato."."</br>";
    $errores++;
}

if ($errores) {
    echo "El total de errores de formato es: $errores";
} else {
    echo "Usuario dado de alta :)";
}
?>