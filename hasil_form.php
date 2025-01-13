<!--apapun yang di inputkan oleh user tangkap datanya, kemudian kita tampilkan datanya -->
<?php

// cara menangkap inputan dari user
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$alamat = $_POST['alamat' ];

//bagaimana cara untuk menampilkan data yang diinput oleh user

 echo "Username = " . $username . "<br>";
 echo "Email = " . $email . "<br>";
 echo "Password = " . $pass . "<br>";
 echo "Alamat = " . $alamat . "<br>";

 ?>