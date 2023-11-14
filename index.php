<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Calculadora</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/estilo.css" type="text/css">
</head>
<body>

    <div class="calculadora">
        <form action="operacao.php" method="get">
        
            <input class="num num1" type="number" name="x">
    
            <select class="operadores" name="operador" id="">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">x</option>
                <option value="divisao">÷</option>
            </select>
            
            <input class="num num2" type="number" name="y">
    
            <input class="enviar" type="submit">
        </form>
    </div>

    <div class="form-user">
        <form action="usuario.php" method="post">
            Digite o seu nome:
            <input type="text" name="nome">
            <input type="submit">
        </form>
    </div>

</body>
</html>