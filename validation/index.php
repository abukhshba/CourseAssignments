<?php
require_once 'validation.php';

if(isset($_POST['submit'])){
$validation = new validation($_POST);
$errors = $validation->validateForm();
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div class="col my-3">
                <input type="text" class="form-control" placeholder=" Enter your name" name="name">
            </div>
            <div class="error btn-danger">
                <?php echo $errors['name'] ?? '';?>
            </div>
            <div class="col my-3">
                <input type="text" class="form-control" placeholder=" Enter your Email" name="email">
            </div>
            <div class="error btn-danger mb-3">
                <?php echo $errors['email'] ?? ''; ?>
            </div>
            <div class="col">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
</body>

</html>
<!-- value="<?php echo htmlspecialchars($_POST['name']) ?? '' ?>"
value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>" -->