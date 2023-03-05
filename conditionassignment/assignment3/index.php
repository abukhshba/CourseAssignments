<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="number" name="num1">
    <select name="method">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>**</option>
        <option>%</option>
    </select>
    <br>

    <input type="number" name="num2">
    <br>
    <input type="submit" name="submit">
</form>


<?php
if(isset($_POST["submit"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $method = $_POST["method"];
    if ($num1 != "" && $num2 != ""){
        if($method == "+"){
            echo $num1 .'+'. $num2 .'='.$num1 + $num2;

        }elseif($method == "-"){
            echo $num1 .'-'. $num2 .'='.$num1 - $num2;
        }
        elseif($method == "*"){
            echo $num1 .'*'. $num2 .'='. $num1 * $num2;
        }
        elseif($method == "/"){
            echo $num1 .'/'. $num2 .'='. $num1 / $num2;

        }elseif($method == "**"){
            echo $num1 .'**'. $num2 .'='.$num1 ** $num2;

        }elseif($method == "%"){
            echo $num1 .'%'. $num2 .'='.$num1 % $num2;

        }
    }else{
        echo "<h1>please type something </h1>";
    }
}
?>