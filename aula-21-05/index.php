<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Arry</h1>

        <h2>arry multidimensional</h2>

    <pre>
    <?php 
    $arry = [
        'aluno' => [
            [
            'id' => 13132,
            'nome' => 'jose',
            'idade' => 17,
            'cpf' => '123.456.789-10',
            'email' => 'jose@gmail.com',
            'endereco' => 'rua y',
            'cep' => '46430-00'
            ],
            [
            'id' => 24454,
            'nome' => 'igor',
            'idade' => 15,
            'cpf' => '123.456.789-10',
            'email' => 'igor@gmail.com',
            'endereco' => 'rua x',
            'cep' => '46430-00'    
            ],
            [
            'id' => 52530,
            'nome' => 'paulo',
            'idade' => 12,
            'cpf' => '123.456.789-10',
            'email' => 'paulo@gmail.com',
            'endereco' => 'rua p',
            'cep' => '46430-00'
            ],
            [
            'id' => 545435,
            'nome' => 'xavier',
            'idade' => 20,
            'cpf' => '123.456.789-10',
            'email' => 'xavier@gmail.com',
            'endereco' => 'rua e',
            'cep' => '46430-00'    
            ],
            [
            'id' => 213131,
            'nome' => 'paula',
            'idade' => 19,
            'cpf' => '123.456.789-10',
            'email' => 'paula@gmail.com',
            'endereco' => 'rua v',
            'cep' => '46430-00'  
            ]
        ]
    ]
    ?>
    <?php 
    print_r($arry);
    ?>
    </pre>

    <pre>
    <?php 
    print_r($arry['aluno'][0]);
    ?>
    </pre>

    <pre>
        <?php 
        print_r($arry['aluno'][1]);
        ?>
    </pre>

    <pre>
        <?php 
        print_r($arry['aluno'][0]['endereco']);
        ?>
    </pre>

       <h2>Tabela com Arry</h2> 

    <pre>
        <table>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>idade</th>
                <th>cpf</th>
                <th>email</th>
                <th>endereco</th>
                <th>cep</th>
            </tr>
            <tr>
                <td><?php print_r($arry['aluno'][0]['id']);?></td>
                <td><?php print_r($arry['aluno'][0]['nome']);?></td>
                <td><?php print_r($arry['aluno'][0]['idade']);?></td>
                <td><?php print_r($arry['aluno'][0]['cpf']);?></td>
                <td><?php print_r($arry['aluno'][0]['email']);?></td>
                <td><?php print_r($arry['aluno'][0]['endereco']);?></td>
                <td><?php print_r($arry['aluno'][0]['cep']);?></td>
            </tr>
            <tr>
                <td><?php print_r($arry['aluno'][1]['id']);?></td>
                <td><?php print_r($arry['aluno'][1]['nome']);?></td>
                <td><?php print_r($arry['aluno'][1]['idade']);?></td>
                <td><?php print_r($arry['aluno'][1]['cpf']);?></td>
                <td><?php print_r($arry['aluno'][1]['email']);?></td>
                <td><?php print_r($arry['aluno'][1]['endereco']);?></td>
                <td><?php print_r($arry['aluno'][1]['cep']);?></td>
            </tr>
            <tr>
                <td><?php print_r($arry['aluno'][2]['id']);?></td>
                <td><?php print_r($arry['aluno'][2]['nome']);?></td>
                <td><?php print_r($arry['aluno'][2]['idade']);?></td>
                <td><?php print_r($arry['aluno'][2]['cpf']);?></td>
                <td><?php print_r($arry['aluno'][2]['email']);?></td>
                <td><?php print_r($arry['aluno'][2]['endereco']);?></td>
                <td><?php print_r($arry['aluno'][2]['cep']);?></td>
            </tr>
                <td><?php print_r($arry['aluno'][3]['id']);?></td>
                <td><?php print_r($arry['aluno'][3]['nome']);?></td>
                <td><?php print_r($arry['aluno'][3]['idade']);?></td>
                <td><?php print_r($arry['aluno'][3]['cpf']);?></td>
                <td><?php print_r($arry['aluno'][3]['email']);?></td>
                <td><?php print_r($arry['aluno'][3]['endereco']);?></td>
                <td><?php print_r($arry['aluno'][3]['cep']);?></td>
            </tr>
            <tr>
                <td><?php print_r($arry['aluno'][4]['id']);?></td>
                <td><?php print_r($arry['aluno'][4]['nome']);?></td>
                <td><?php print_r($arry['aluno'][4]['idade']);?></td>
                <td><?php print_r($arry['aluno'][4]['cpf']);?></td>
                <td><?php print_r($arry['aluno'][4]['email']);?></td>
                <td><?php print_r($arry['aluno'][4]['endereco']);?></td>
                <td><?php print_r($arry['aluno'][4]['cep']);?></td>
            </tr>
        </table>
    </pre>

        <h2>Tabela com For</h2>

    <pre>
        <table>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>idade</th>
                <th>cpf</th>
                <th>email</th>
                <th>endereco</th>
                <th>cep</th>
            </tr>
            
        </table>
    </pre>

    </div>
</body>
</html>