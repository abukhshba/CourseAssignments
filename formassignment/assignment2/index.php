<?php

foreach($_GET as $key => $value):
    if($key == "name"):
        echo $key . ": ".$value;
    elseif($key == "email"):
        echo $key . ": ".$value;
    elseif($key == "phone"):
        echo $key . ": ".$value;
    else:
?>

<body>
    <a href="http://localhost/assignments/formassignment/assignment2/index.php?name=ameen"> Name</a>
    <br>
    <a href="http://localhost/assignments/formassignment/assignment2/index.php?email=ameen@gmail.com"> Email</a>
    <br>
    <a href="http://localhost/assignments/formassignment/assignment2/index.php?phone=01142565236">phone</a>
    <br>
</body>

<?php endif ;?> <?php endforeach ;?>