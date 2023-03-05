<?php
$connection = new mysqli("localhost" , "root" , "" , "myshop");
$id="";
$name="";
$email="";
$phone="";
$address="";
$errorMessage = "";
$successMessage="";
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET['id'])){
        header("location: index.php");
        exit; 
    }
    $id=$_GET['id'];
    $sql = "SELECT * FROM clients WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:index.php");
        exit;
    }
    $name= $row['name'];
    $email= $row['email'];
    $phone= $row['phone'];
    $address= $row['address'];

}else{
    $id = $_POST['id'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    do{
        if(empty($id) || empty($id) || empty($id) || empty($id) || empty($id) ){
            $errorMessage="All the feilds are required";
            break;
        }
        $sql = "UPDATE clients 
                SET     
                    name = '$name' , 
                    email = '$email' ,
                    phone = '$phone' , 
                    address = '$address' 
                WHERE 
                    id = '$id'";
        $result = $connection->query($sql);
        if(!$result){
            $errorMessage="Invalid query: " . $connection->error ;
            break; 
        }
        $successMessage = "Client updated successfully";
        header("location: index.php");
        exit;
     }while(true);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>my shop</title>
</head>

<body>
    <div class="container my-5">
        <h2>New Clients</h2>
        <?php 
            if( !empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    
                </div>
                ";
            }
        ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-from-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-from-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" placeholder="Email" name="email"
                        value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-from-label">phone number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Phone" name="phone"
                        value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-from-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Address" name="address"
                        value="<?php echo $address; ?>">
                </div>
            </div>
            <?php 
                if(!empty($successMessage)){
                    echo "
                        <div class='row mb-3'>
                            <div class='offset-sm-3 col-sm-3'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>