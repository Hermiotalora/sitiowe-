<?php

    include("nuevoconectar.php");

    if(isset($_POST["registrar"])){

        $nombre = $_POST["nombre"];
        echo $nombre . "<br>";
        $apellido = $_POST["apellido"];
        echo $apellido . "<br>";
        $direccion = $_POST["direccion"];
        echo $direccion . "<br>";



        $sexo= $_POST["sexo"];
        $estadocivil = $_POST["ecivil"];
       

        // if ($sexo=="Femenino"){

        //     if(ecivil=="casado"){
        //         $ecivil="casada";
        //     }else if (ecivil=="soltero"){
        //         $ecivil="soltera";
        //     }else if (ecivil=="Divorciado"){
        //         $ecivil="divorciada";
        //     }else if (ecivil=="viudo"){
        //         $ecivil="viuda";
        //     }
        // }

        
        // if ($sexo=="Femenino"){
        //     switch ($ecivil){
        //         case 'casado'. $ecivil= "casado";
        //             break;
        //         case 'soltero'. $ecivil= "soltera";
        //             break;
        //         case 'divorciado'. $ecivil= "divorciada";
        //             break;
        //         case 'viudo'. $ecivil= "viuda";
        //             break;
        //     }
        // }

        if($sexo== "feminino"){

            echo substr ($ecivil, 0,strlen($ecivil)-1)."a";
        }



        
        $peliculas="";
        
        if(isset($_POST["peliculas"])){
            foreach($_POST["peliculas"] as $valor){

                $peliculas=$peliculas ." ". $valor;

            }                                     
        }

        echo $peliculas ."<br>";
    
        $link= mysqli_connect($host, $user, $pass, $db) or die ("Problemas para ingresar datos");

        if ($link){

            echo "conexion exitosa <br>";

        }else{
            echo "Error al ingresar <br>";

        }
        
         $sql = "INSERT INTO datos_tabla(Nombre, Apellido, Direccion, Sexo, Estado_civil, Genero) VALUES ('$nombre','$apellido','$direccion','$sexo','$estadocivil','$peliculas')";

         
         $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos ingresados";

        }else{
            echo "Problemas para ingresar los datos";
        
        } 

    }else{

        echo "Error de ingreso ";
    }



?>