<?php 

function saludo($nombre){
    $saludo="Hola ".$nombre;

    echo $saludo."<br>";
}



$alumnos=array("Jesica","Armando","Sebastian","Jesus","Catherine","Ramses");

foreach ($alumnos as $alumno) {
    saludo($alumno);
}

?>