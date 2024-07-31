<?PHP

// Declaracion de variables
$id = 1712;
$nombre = "Jose";
$apellido = "Picapiedra";
$sueldo = 765.25;
$edad = 30;
$casaPropia = true;
$dispositivos = ["Monitor", "Laptop", "Mouse", "Teclado", "celular"];

//Operaciones Aritméticas

$fondosReserva = $sueldo * (8.33/100);
$aporteIess = $sueldo * (9.45/100);
$neto = $sueldo + $fondosReserva - $aporteIess;

//Manipulacion de cadenas
$nombreCompleto = "{$nombre} {$apellido}";
$longCadena = strlen($nombreCompleto);

//Uso de Condicionales
$comentarioVivienda = "alquilada";
if ($casaPropia){
    $comentarioVivienda = "propia";
} 

//Creación de un array
$movimientos = [
    ["id" => 1, "mes" => "Enero", "importe" => 526.33],
    ["id" => 2, "mes" => "Febrero", "importe" => 458.11],
    ["id" => 3, "mes" => "Marzo", "importe" => 852.95],
    ["id" => 4, "mes" => "Abril", "importe" => 122.01],
    ["id" => 5, "mes" => "Mayo", "importe" => 851.33],
    ["id" => 6, "mes" => "Junio", "importe" => 333.66],
    ["id" => 7, "mes" => "Julio", "importe" => 475.99],
];
$elementoEspecifico = $movimientos[rand(0, 6)];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1. Tarea 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Tarea 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Descripccion</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Nombre Completo</td><td><?PHP echo $nombreCompleto; ?></td></tr>
                    <tr><td>Logitud Nombre</td><td><?PHP echo $longCadena; ?></td></tr>
                    <tr><td>Vivienda</td><td><?PHP echo "Vive en casa " . $comentarioVivienda; ?></td></tr>
                    <tr><td>Sueldo</td><td class="text-end"><?PHP echo $sueldo; ?></td></tr>
                    <tr><td>Fondos de Reserva (+)</td><td class="text-end"><?PHP echo $fondosReserva; ?></td></tr>
                    <tr><td>Aporte Seguro Social (-)</td><td class="text-end"><?PHP echo $aporteIess; ?></td></tr>
                    <tr><td>A Recibir (=)</td><td class="text-end"><?PHP echo $neto ?></td></tr>
                    <tr><td>Movimientos</td>
                        <td>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Mes</th>
                                        <th>Importe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?PHP 
                                        echo "<tr>";
                                        echo "<td>{$elementoEspecifico["mes"]}</td>";
                                        echo "<td>{$elementoEspecifico["importe"]}</td>";
                                        echo "</tr>";
                                    ?>
                                </tbody>
                        </td>
                    </tr>
                </tbody>
            </table>

            
            </div>
        </div>
    </div>
<body>


    
</body>
</html>