<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <?php 
        include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h2 class="header">WELCOME TO SPARKS BANK</h2>
                </div>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/3.png" alt="New York" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

   
    <hr>
        <div class="container-fluid">
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h1>SERVICES</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Activity Section-->
    <div class="container">
    <div class="card-deck">
    <div class="col-sm-3 col-md img text-center">
        <div class="card" style="width:38rem; margin: 1rem;">
        <img class="card-img-top" src="img/user.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Add User</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="createuser.php" class="btn btn-primary">Add user</a>
        </div>
        </div>
    </div>
    <div class="col-sm-3 col-md img text-center" >
        <div class="card" style="width: 38rem; margin: 1rem">
        <img class="card-img-top" src="img/send-money.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Transfer Money</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="transfermoney.php" class="btn btn-primary">Transfer money</a>
        </div>
        </div>
    </div>
    <div class="col-sm-3 col-md img text-center">
        <div class="card" style="width: 38rem; margin:1rem">
        <img class="card-img-top" src="img/history-icon.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Transaction History</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="transactionhistory.php" class="btn btn-primary">Transaction History</a>
        </div>
    </div>
    </div>
</div>
    </div>
    
    <footer class="text-center mt-5 py-2">
        <p>&copy 2020. Made by <b>SONALI THAKKER</b> <br> The Sparks Foundation</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

</body>
</html>