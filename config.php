<?php
        //connecting to database
        $servername = "localhost";
        $username = "root";
        $password = "Heybeauty";
        $database = "sparksbank";

        //create a connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        //die if connection was not successful
        if(!$conn){
            die("Sorry we failed to connect: ".mysqli_connect_error());
        }
?>