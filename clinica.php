<?php
//Definicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => "11.568.778",
    "nombre" => "Martín Perez",
    "edad" => 26,
    "peso" => 77,
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col12">
                <table class="table table-hover border">
                    <thead>
                        <th>DNI</th>
                        <th>NOMBRE Y APELLIDO</th>
                        <th>EDAD</th>
                        <th>PESO</th>
                        <th></th>
                    </thead>
                    <TBODy>
                        <?php for ($i=0; $i < count($aPacientes); $i++){ ?>
                        <TR>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </TR>
                        <?php } ?> 
                    </TBODy>
                </table>
            </div>
        </div>
    </main>
</body>
</html>