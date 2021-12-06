<!DOCTYPE html>
<?php
session_start();

include_once "conexion.php";
$conexion=mysqli_connect($host,$user,$pass,$db);
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="login.css" type="text/css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <div class="card">
                    <div class="login-box">
                            <div class="login-snip"> 
                            <?php


                    if(isset($_REQUEST['Login'])){

                        $email=$_REQUEST['email']??'';
                        $password=$_REQUEST['password']??'';
                        $password=md5($password);


                        $query="SELECT idEmpleado,emailEmpleado,nombreEmpleado from empleado where emailEmpleado='".$email."' and passwordEmpleado='".$password."'";
                        $res=mysqli_query($con,$query);
                        $row=mysqli_fetch_assoc($res);
                        if($row){
                            $_SESSION['idEmpleado']=$row['idEmpleado'];
                            $_SESSION['emailEmpleado']=$row['emailEmpleado'];
                            $_SESSION['nombreEmpleado']=$row['nombreEmpleado'];
                            header("location: indexx.php");
                        }else{
                            $query="SELECT idCliente,emailCliente,nombreCliente from cliente where emailCliente='".$email."' and passwordCliente='".$password."'";
                            $res=mysqli_query($con,$query);
                            $row=mysqli_fetch_assoc($res);
                            if($row){
                                $_SESSION['idCliente']=$row['idCliente'];
                                $_SESSION['emailCliente']=$row['emailCliente'];
                                $_SESSION['nombreCliente']=$row['nombreCliente'];
                                header("location: indexx.php");
                            }else{
                                ?>
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                                <label for="tab-1" class="tab">Iniciar Sesión</label>                                 
                                <input id="tab-2" type="radio" name="tab" class="sign-up">
                                <label for="tab-2" class="tab">Registrarme</label>
                                <div class="login-space">
                                <div class="login">
                                        <div class="alert alert-danger" role="alert">
                                            Error de login
</div>
                                    <?php
                            }






                        }
                    }
                    ?>
                                    <div class="group"> 
                                        <label for="user" class="label">Usuario</label>                                         
                                        <input id="user" type="text" class="input" placeholder="Ingresa tu nombre de usuario"> 
                                    </div>
                                    <div class="group"> 
                                        <label for="pass" class="label">Contraseña</label>                                         
                                        <input id="pass" type="password" class="input" data-type="password" placeholder="Ingresa tu contraseña"> 
                                    </div>
                                    <div class="group"> 
                                        <input id="check" type="checkbox" class="check" checked> 
                                        <label for="check">
                                            <span class="icon"></span> No cerrar sesión
                                        </label>                                         
                                    </div>
                                    <div class="group"> 
                                        <input type="submit" class="button" value="Iniciar Sesión" href="index.html"> 
                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Login">Sign in</button>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot"> 
                                        <a href="#">Olvidaste tu contraseña?</a> 
                                    </div>
                                    <br>
                                    <div class="foot"> 
                                        <a href="index.html">Regresar a la pagina inicial</a> 
                                    </div>
                                    </div>
                                    <div class="sign-up-form">
                                        <div class="group"> 
                                            <label for="user" class="label">Usuario</label>                                             
                                            <input id="user" type="text" class="input" placeholder="Define tu nombre de usuario"> 
                                        </div>
                                        <div class="group"> 
                                            <label for="pass" class="label">Contraseña</label>                                             
                                            <input id="pass" type="password" class="input" data-type="password" placeholder="Define tu contraseña"> 
                                        </div>
                                        <div class="group"> 
                                            <label for="pass" class="label">Repetir contraseña</label>                                             
                                            <input id="pass" type="password" class="input" data-type="password" placeholder="Ingresa tu contraseña nuevamente"> 
                                        </div>
                                        <div class="group"> 
                                            <label for="pass" class="label">Correo electronico</label>                                             
                                            <input id="pass" type="text" class="input" placeholder="Ingresa tu correo electronico"> 
                                        </div>
                                        <div class="group"> 
                                            <input type="submit" class="button" value="Registrarme" href="index.html"> 
                                        </div>
                                        <div class="hr"></div>
                                        <div class="foot"> 
                                            <label for="tab-1">Ya te encuentras registrado?</label>                                             
                                        </div>
                                        <br>
                                        <div class="foot"> 
                                            <a href="index.html">Regresar a la pagina inicial</a> 
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>