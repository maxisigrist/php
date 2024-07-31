<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function promediar($aNotas){
    $sumatotal = 0;
    foreach ($aNotas as $nota) {
        $sumatotal = $sumatotal + $nota;
    }
    $promedio = $sumatotal / count($aNotas);

    return $promedio;
}

$aAlumnos = array();
$aAlumnos[] = array("nombre" => "carlos puerta", "notas" => array(5,4));
$aAlumnos[] = array("nombre" => "tomas ponce", "notas" => array(5,8));
$aAlumnos[] = array("nombre" => "meli alleman", "notas" => array(9,7));
$aAlumnos[] = array("nombre" => "maxi sigrist", "notas" => array(6,6));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </thead>
                    <tbody>
                    <?php foreach($aAlumnos as $alumno) : ?>
                    <tr>    
                            <td><?php echo $alumno["nombre"]; ?></td>
                            <td><?php echo $alumno["notas"][0]; ?></td>
                            <td><?php echo $alumno["notas"][1]; ?></td>
                            <td><?php echo promediar($alumno["notas"]); ?></td>
                    </tr>     
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <h5>Promedio de la cursada: <?php echo number_format($sumPromedios / count($aAlumnos), 2, ",", "."); ?></h5>
            </div>
        </div>
    </main>
</body>
</html>