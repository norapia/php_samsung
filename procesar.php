<?php
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $servername = "127.0.0.1";
        $username="root";
        $password="";
        $dbname = "curso_sql";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql= "INSERT INTO usuario (nombre,apellido,email)
        VALUES ('$nombre', '$apellido', '$email')";

        if ($conn->query($sql) === TRUE){
            echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->$error;
        }

        $conn->close();
    }
?>