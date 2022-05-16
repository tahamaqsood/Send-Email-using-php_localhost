<?php
            $con = mysqli_connect("localhost","root","","email_db");
            if(isset($_POST['btnInsert']))
            {
                 $email = $_POST['email'];
                 $query = "insert into emails values(Null,'$email')";
                 $exec = mysqli_query($con,$query);
            echo"<script>window.location.href='index.html'</script>";
                }
                ?>
