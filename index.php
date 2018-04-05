<html>
    <head>
        <style>
        h3{
            margin-top:3;
            margin-bottom:3;
        }
        </style>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora </h1>
        <form method="post" action="index.php">
            <h3 "margin-top:3;margin-bottom:3;">1º valor</h3> 
            <input type="text" step="0.001" name="valor1" size='10'><br>
            <h3 "margin-top:3;margin-bottom:3;">2º valor</h3> 
            <input type="text" step="0.001" name="valor2" size='10'><br>
            <h3 "margin-top:3;margin-bottom:3;">Operação</h3> 
            <select name="operacao">
                <option value='somar'>somar</option>
                <option value='subtrair'>subtrair</option>
                <option value='multiplicar'>Multiplicar</option>
                <option value='dividir'>Dividir</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
        <?php
        include('calcular.php');
        ?>
    </body>
</html>