<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        numb1 = <input type="number" name="numb1"><br/>
        numb2 = <input type="number" name="numb2"><br/>
        <select name ="calcular">
            <br>
            <option value = "sum">Soma</option>
            <option value = "sub">Subtração</option>
            <option value = "mult">Multiplicação</option>
            <option value = "div">Divisão</option>
        </select>
        <br>
        <input type="submit" value="calcular">
    </form>
    <?php
        $n1 = $_GET["numb1"];
        $n2 = $_GET["numb2"];
        $calcul = $_GET["calcular"];
        $result = 0;
        switch($calcul){
            case 'sum':
                $result = $n1 + $n2;
                break;
            case 'sub':
                $result = $n1 - $n2;
                break;
            case 'mult':
                $result = $n1 * $n2;
                break;
            case 'div':
                $result = $n1 / $n2;
                break;
        }
    ?>
    <h2>O resultado é: <?php echo $result; ?> </h2>
</body>
</html>