<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table style = 
    'border: 1px solid rgb(160 160 160);
    padding: 8px 10px;'> 

        <thead> 
            <th> Nome </th>
            <th> preço </th>
            <th> categoria </th>
        </thead>

        <tbody> 
            <tr>  
                <th>{{$produtos[0]['nome']}}</th>
                <th>{{$produtos[0]['preco']}}</th>
                <th>{{$produtos[0]['categoria']}}</th>
            </tr>

            <tr>  
                <th>{{$produtos[1]['nome']}}</th>
                <th>{{$produtos[1]['preco']}}</th>
                <th>{{$produtos[1]['categoria']}}</th>
            </tr>
        </tbody>


    </table>
</body>
</html>