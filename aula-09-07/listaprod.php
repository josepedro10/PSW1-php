<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Produto</th>
            <th>Marca</th>
            <th>Tamanho</th>
            <th>Preço</th>
            <th>Cor</th>
            <th>Genero</th>
            <th>Modelo</th>
            <th>Preço compra</th>
            <th>Data compra</th>
        </tr>
        <tr>
            <td><?php echo $_POST['produto']; ?></td>
            <td><?php echo $_POST['marca'];?></td>
            <td><?php echo $_POST['tamanho'];?></td>
            <td><?php echo $_POST['preco'];?></td>
            <td><?php echo $_POST['cor'];?></td>
            <td><?php echo $_POST['m'];?></td>
            <td><?php echo $_POST['modelo'];?></td>
            <td><?php echo $_POST['precoc'];?></td>
            <td><?php echo $_POST['datac'];?></td>
        </tr>
    </table>

</body>
</html>