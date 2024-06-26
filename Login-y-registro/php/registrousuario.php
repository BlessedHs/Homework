<?php 

       include 'conexionbn.php';

        $nombre_completo = $_POST['Nombre_Completo'];
        $correo = $_POST['Correo'];
        $usuario = $_POST['Usuario'];
        $contraseña = $_POST['Contraseña'];
        $fecha_nacimiento = $_POST['Fecha_nacimiento']; 

         $query = "INSERT INTO usuarios(Nombre_Completo, Correo, Usuario, Contraseña, Fecha_Nacimiento) 
        VALUES ('$nombre_completo','$correo','$usuario','$contraseña','$fecha_nacimiento')";

        $ejecutar = mysqli_query($conexion, $query);


        if($ejecutar){
            echo  "<script>
            alert('Usuario registrado con exito');
            window.location='../index.php';
            </script>";
         }else{
            echo "<script>
            alert('El usuario no se pudo registrar. Intentar de nuevo');
            window.location='../index.php';
            </script>";
         }

         mysqli_close($conexion);





?>