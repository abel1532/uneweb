<?php 

function saludo($nombre){
    $saludo="Hola ".$nombre;

    echo $saludo.' ';
}



$alumnos=array("Jesica"=>"Alumna","Armando"=>"Alumno","Sebastian"=>"Alumno"
,"Jesus"=>"Alumno","Catherine"=>"Alumna","Ramses"=>"Alumno","Abelardo"=>"Profesor");

foreach ($alumnos as $alumno => $cargo) {
    saludo($cargo);
    echo "<b>".$alumno."!!</b>";
    echo "<br>";
}

?>