<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Get</title>
</head>
<body>

<form action="listaprod.php" method="post">
    <p> Produto: <input type="text" name="produto" /> </p>
    <p> Marca: <select name="marca" id="marca">
    <option value="">Seleccione una marca</option>
        <option value="Nike">Nike</option>
        <option value="Adidas">Adidas</option>
        <option value="Zara">Zara</option>
        <option value="H&M">H&M</option>
        <option value="Gucci">Gucci</option>
        <option value="Louis Vuitton">Louis Vuitton</option>
        <option value="Prada">Prada</option>
        <option value="Chanel">Chanel</option>
        <option value="Uniqlo">Uniqlo</option>
        <option value="Levi's">Levi's</option>
        <option value="Burberry">Burberry</option>
        <option value="Calvin Klein">Calvin Klein</option>
        <option value="Ralph Lauren">Ralph Lauren</option>
        <option value="Versace">Versace</option>
        <option value="Tommy Hilfiger">Tommy Hilfiger</option>

    </select> 
    </p>
    <p> Tamanho: <input type="number" name="tamanho" min="2" max="56"></p>
    <p> Preço: <input type="number" name="preco" min="0"> </p>
    <p> cor: <input type="color" name="cor"> </p>
    <p> Genero: 
        <input type="radio" id="m" name="m" value="Masculino">
        <label for="m">Masculino</label>
        <input type="radio" id="f" name="f" value="Feminino">
        <label for="f">Feminino</label>
    </p>
    <p> Modelo: <input type="text" name="modelo"> </p>
    <p> Preço Compra: <input type="text" name="precoc"> </p>
    <p> Data Compra: <input type="date" name="datac"> </p>
    <p> <input type="submit" value="Enviar"> </p>
 </form>
 
</body>
</html>