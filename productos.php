<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fabricantes</title>
</head>

<body>

    <div class="container">

        <br>
        <!--Inicio de formulario-->
        <form action="action/insertproducto.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre producto</label>
                <input type="text" name="inputNombre" class="form-control">
                <br>
                <label class="form-label">Precio</label>
                <input type="number" name="inputPrecio" class="form-control">
                <br>
                <label class="form-label">Nombre fabricante</label>
                <!--Select para los nombres de fabricantes-->
                <select name="inputCodigoFabricante" class="form-select form-select-md">
                    <option selected>Abre este menú</option>
                    <?php
                        // Importar el archivo de conexión
                        include('connection/connection.php');
                        // Variable para listar toda la tabla de fabricante
                        $consulta = "SELECT fabricante.codigo as codigo_fabricante, 
                        fabricante.nombre as nombre_fabricante FROM fabricante";
                        // Query de conexión y query de listado
                        $resultado = mysqli_query($connection, $consulta);
                        // Mientras haya algo dentro de table, seguira listando
                        while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <option value="<?php echo $fila["codigo_fabricante"] ?>"><?php echo $fila["nombre_fabricante"] ?></option>
                    <?php } // Cierre del while?>
                </select>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
        </form>
        <!--Final de formulario-->

        <br>

        <!--Inicio de la table de fabricante-->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre producto</th>
                    <th scope="col">Nombre precio</th>
                    <th scope="col">Nombre fabricante</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Importar el archivo de conexión
                include('connection/connection.php');
                // Variable para listar toda la tabla de fabricante
                $consulta = "SELECT producto.codigo as codigo_producto, 
                producto.nombre as nombre_producto, 
                producto.precio as precio_producto, 
                fabricante.nombre as nombre_fabricante 
                FROM producto INNER JOIN fabricante 
                ON producto.codigo_fabricante = fabricante.codigo ";
                // Query de conexión y query de listado
                $resultado = mysqli_query($connection, $consulta);
                // Mientras haya algo dentro de table, seguira listando
                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $fila["codigo_producto"] ?></th>
                        <td><?php echo $fila["nombre_producto"] ?></td>
                        <td><?php echo $fila["precio_producto"] ?></td>
                        <td><?php echo $fila["nombre_fabricante"] ?></td>
                    </tr>
                <?php } // Cierre del while 
                ?>
            </tbody>
        </table>
        <!--Final de la tabla de fabricante-->

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>