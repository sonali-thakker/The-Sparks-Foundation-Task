<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>
    <?php
        include 'navbar.php';
    ?>
    <?php 
        include 'config.php';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $balance = $_POST['balance'];
            $sql = "insert into `users`(name,email,balance) values('{$name}','{$email}','{$balance}')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    "<script> alert('Hurray! User Created');
                            window.location='transfermoney.php';
                    </script>";
              }
              else{
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong> We are facing some technical issues and your entry was not submitted successfully! Sorry for the inconvinience cause!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }
        }
    ?>
 

    <h2 class="text-center pt-4">Create a User</h2>
    <br>

    <div class="background">
    <div class="container">
        <div class="screen">
            <div class="screen-header">
                <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                </div>
            </div>
            <div class="screen-body">
                <div class="screen-body-item left">
                    <img class="img-fluid" src="img/icon.png" style="border:none; border-radius: 50%;">
                </div>
                <div class="screen-body-item">
                    <form class="app-form" method="post">
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                        </div>
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="EMAIl" type="email" name="email" required>
                        </div>
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                        </div>
                        <div class="app-form-group button">
                            <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                            <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                            <a href="index.php"><input class="app-form-button" type="button" value="BACK" name="back"></input></a>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>