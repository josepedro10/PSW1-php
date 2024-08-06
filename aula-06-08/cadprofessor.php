<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"  action="crudprofessor.php">
        <label for="">id</label>
        <input type="text" name="id">
        <label for="">nome professor</label>
        <input type="text" name="nomeprofessor" placeholder="Digite o nome do professor">
        <label for="">idade</label>
        <input type="number" name="idade">
        <input type="submit" name="cadastrar" value="cadastrar">
    </form>
</body>
</html>