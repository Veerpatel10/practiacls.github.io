<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align = "center">
        The result is =
        <?php
            $num1 = $_POST["num1"];
            $oper = $_POST["oper"];
            $num2 = $_POST["num2"];
            if ($oper == "+") {
                $result = $num1 + $num2;
                echo "$result";
            }
            elseif($oper == "-"){
                $result = $num1 - $num2;
                echo "$result";
            }
            elseif($oper == "*"){
                $result = $num1 * $num2;
                echo "$result";
            }
            elseif($oper == "/"){
                $result = $num1 / $num2;
                echo "$result";
            }
        ?>

    </h1>
</body>
</html>