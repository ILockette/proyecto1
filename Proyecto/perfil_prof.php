<?php
$apellidoM;
$apellidoP;
session_start();
$conexion=new mysqli("localhost","root","","form_alumno");
$user=$_SESSION['username'];
if(!isset($user)){
    header("location:/Proyecto/login.php");
}
$consulta="SELECT*FROM profesor WHERE IDusuario_P='$user'";
    $resultado=$conexion->query($consulta);
    $fila=$resultado->fetch_row();
    $nombre=$fila[4];
    $apellidoP=$fila[2];
    $apellidoM=$fila[3];
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adm. Escolar</title>
        <link rel="stylesheet" href="/Proyecto/css/estilos.css">
        <script src="https://kit.fontawesome.com/aa88a67c00.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container_header">
                <div class="logo">
                    <img src="/Proyecto/imagenes/conocimiento.png">
                </div>
                <div class="container_nav">
                    <nav class>
                        <ul>
                            <li><a href="/Proyecto/principal_prof.php" class="select">Inicio</a></li>
                            <li><a href="/Proyecto/calificar.php" class="select">Calificar</a></li>
                            <li><a href="/Proyecto/grupos.php" class="select">Grupos</a></li>
                            <li><a href="/Proyecto/perfil_prof.php" class="select">Perfil</a></li>
                            <li><a href="/Proyecto/ayuda_prof.php" class="select">Ayuda</a></li>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="cointaner_info">
                        <h1>Hola!</h1>
                        <h2>
                            <script type="text/javascript">
                            var d=new Date();
                            var hora=d.getHours();
                            if(hora>=0&&hora<12){
                                document.write('Buenos Dias');
                            } else if(hora>=12&&hora<19){
                                document.write('Buenas Tardes');
                            } else{
                                document.write('Buenas noches');
                            }
                        </script>
                        </h2>
                        <?php echo "<h2>$nombre</h2>";?>
                        <p>Bienvenido/a a tu Administrador escolar.</p>
                    </div>
                    <div class="container_vector">
                        <img src="/Proyecto/imagenes/profesor.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="cointaner_info">
                        <h1>Tus Datos</h1>
                        <h3>Usuario:</h3>
                        <?php echo "<h2>$user</h2>"
                        ?>
                        <h3>Perfil:</h3>
                        <h2>Profesor</h2>
                        <?php echo "<h3>Nombre:</h3><h2>$nombre</h2><h3>Apellidos:</h3><h2>$apellidoP</h2><h2>$apellidoM</h2>"
                        ?>
                    </div>
                    <div class="container_vector">
                        <a class="button" href="salir.php">Cerrar sesi??n</a>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container_footer">
                <div class="box_footer">
                    <div class="logo">
                        <img src="/Proyecto/imagenes/conocimiento.png" alt="">
                    </div>
                        <div class="terminos">
                            <p>Este proyecto fue hecho con terminos academicos</p>
                        </div>
                </div>
                <div class="box_footer">
                    <h2>Nuestro equipo</h2>
                    <h1>Jos?? Tapia</h1>
                    <h1>Ioana Eslava</h1>
                    <h1>Mois??s Garc??a</h1>
                    <h1>Yael Luna</h1>
                    <h1>Karina Escamilla</h1>
                    <h1>Rub?? Martinez</h1>
                    <h1>Paola Estrada</h1>
                </div>
                <div class="box_footer">
                    <h2>Tecnolog??as utilizadas</h2>
                    <h1>HTML</h1>
                    <h1>CSS</h1>
                    <h1>MYSQL</h1>
                </div>
                <div class="box_footer">
                    <h2>Nuestras redes</h2>
                    <a href="https://www.facebook.com/radioimpo"><i class="fa-brands fa-facebook"></i>Facebook</a>
                    <a href="https://www.facebook.com/radioimpo"><i class="fa-brands fa-youtube"></i>Youtube</a>
                    <a href="https://instagram.com/radioimpo?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i>Instragram</a>

                </div>
            </div>
        </footer>
    </body>
</html>
