<h1>Enter your degree</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

    <input type="number" name="num">
    <br>
    <input type="submit" name="submit">
</form>


<?php
if(isset($_GET["submit"])){
    $num = $_GET["num"];
    if ($num != "" ){
        if($num >= 50 && $num <65 ){
            echo "Acceptance";

        }elseif($num >= 65 && $num <75 ){
            echo "Good";
        }
        elseif($num >= 75 && $num <85 ){
            echo "Very good";
        }
        elseif($num >= 85 ){
            echo "Excelent";

        }elseif( $num <50 ){
            echo "Weak";
        }
    }else{
        echo "<h1>please type something </h1>";
    }
}
?>