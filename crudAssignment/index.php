<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>my shop</title>
</head>

<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>created at</th>
                    <th>action</th>

                </tr>
            </thead>
            <thead>
                <?php 
                    $connection = new mysqli("localhost" , "root" , "" , "myshop");
                    if($connection->connect_error){
                        die("connection error: " .$connection->connect_error );
                    }
                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);
                    if(!$result){
                        die("connection error: " .$connection->error );
                    }
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[id]</tdd>
                            <td>$row[name]</td>
                            <th>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>

                            </td>
                        </tr>
                        ";
                    }
                ?>
            </thead>

        </table>
    </div>

</body>

</html>