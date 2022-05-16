<?php 

$con = mysqli_connect("localhost","root","","email_db");

        include('index.html');
        if(isset($_POST['btnsubmit']))
        {

            $subject = $_POST['name'];
            $to = $_POST['email'];
            $message = $_POST['message'];
            $query = "insert into contact values(Null,'$to','$subject','$message')";
            $exec = mysqli_query($con,$query);
            mail($to, $subject, $message, $headers);

            echo "<script>
                            swal.fire({
	                        title: 'Email Sent!',
                         	text: 'Thank you for Contacting Us!',
                         	icon: 'success',
                         	showConfirmButton: true,
                         	confirmButtonColor: 'blue',
                         	timer: 8000}).then(function(){window.location.href='index.html';})</script>";



        }

?>
<!-- user: sportfitnessgym
pass: hFb#H^Au&heavt@tXM(n -->
