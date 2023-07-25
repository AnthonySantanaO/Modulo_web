<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>
    alert("Debes iniciar sesión para hacer uso de los servicios");
    window.location = "../index.php";
    </script>';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo" >Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar"> 
                <ul>
                    <li><a href="proyeccion.php">Registrar  proyeccion</a></li>
                    <li><a href="medicion.php">Registrar  mediciones</a></li>
                    <li><a href="#">Visualizar datos</a></li>
                    <li><a href="../php/cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Cultivo de banano</h1>
                <p>
                    El cultivo de banano se caracteriza por ser una planta perenne de gran tamaño que pertenece a la familia de las Musáceas. Las plantas de banano producen frutos en racimos llamados "mano" o "racimo". Cada racimo puede contener varias docenas de plátanos o bananas, que son frutas alargadas y de pulpa dulce. El banano es una planta de clima cálido y tropical, por lo que se cultiva en diversas regiones del mundo con estas características. Requiere de una temperatura constante y elevada, así como de una alta humedad ambiental. 
                    El cultivo de banano se realiza en suelos bien drenados y ricos en nutrientes.
                </p>
                <a href="#infor" class="btn-1" >Información</a>
            </div>
        </div>
    </header>

    <section class="general container">
        <h2>Módulo web para la proyección y medición del cultivo de banano</h2>
        <p>Este módulo web constara de registros los cuales serán ingresados por los cultivadores, dichos registros son la proyección que hace enfasís en lo que dicho cultivador espera consefuir en su cultivo de banono y a su vez registrara los datos de medición realizadas por los inspectores del cultivo.</p>
        <p>A continuación se dara una pequeña introducción sobre los terminos a utilizar.</p>
        <div class="general-content">
            <div class="general-1 txt">
                <h3>Proyección</h3>
                <p><span class="enfasís">La proyección de cultivos de banano se refiere al proceso de planificar y estimar la medición 
                    futura de banano en base a diversos factores y variables relevantes. Esta proyección es 
                    importante para los agricultores y productores de banano, ya que les permite tomar decisiones 
                    informadas sobre la cantidad de cultivos a plantar, la disponibilidad de recursos necesarios y la
                    planificación de la comercialización de los productos.</span> 
                </p>
            </div>
            <div class="general-2 txt">
                <h3>Medición</h3>
                <p><span class="enfasís">La medición de cultivos de banano se refiere al proceso de inspecionar de forma periodica el cultivo, cuidado y cosecha de las 
                    plantas de banano para obtener frutos de alta calidad y cantidad. Es un proceso que requiere 
                    planificación, manejo adecuado y atención constante para lograr una producción exitosa. </span>
                </p>
            </div>
            <div class="general-3 txt">
                <h3>Cultivadores</h3>
                <p>
                    <span class="enfasís">Los cultivadores de banano son los agricultores o productores que se dedican al cultivo y producción 
                    de banano. Estos individuos o empresas se especializan en el manejo y cuidado de los bananeros para 
                    obtener una cosecha exitosa de frutos de banano. <br>
                    Los cultivadores de banano desempeñan un papel fundamental en la producción y abastecimiento de 
                    esta popular fruta a nivel local e internacional. Su experiencia y dedicación son clave para 
                    obtener cultivos de banano de alta calidad y satisfacer la demanda del mercado.</span>
                </p>
            </div>
        </div>          
    </section>
    <section class="info-1">
        <div class="info-content container">
            <a name="infor"/>
            <h2>Información</h2>
            <div class="info-circle">
                <div class="circle-txt">
                    <div class="circle-1">
                        <h3>Variedades de banano</h3>
                    </div>    
                        <p>
                            El cultivo de banano es una actividad agrícola importante en varias regiones del mundo. Aquí tienes información sobre los cultivos de banano: <br> <br>
                            Cavendish: Es la variedad más común y ampliamente cultivada. Los plátanos Cavendish son de tamaño mediano, con una piel amarilla cuando están maduros. <br> <br>
                            Gros Michel: Anteriormente fue la variedad más cultivada hasta que fue reemplazada por la variedad Cavendish debido a una enfermedad. Tiene un sabor más dulce que el Cavendish. <br> <br>
                            Banano Rojo: Esta variedad tiene una pulpa de color rosado o rojo y es más pequeña que las variedades comunes. Se cultiva en regiones tropicales. <br><br>
                            Manzano: Es una variedad más pequeña y redonda en comparación con el plátano tradicional. Tiene un sabor más dulce y una textura más firme. <br>  <br>
                            Platano Macho: Es una variedad de banano que se consume principalmente cocido. Tiene una piel más gruesa y una pulpa más almidonada.
                    </p>
                </div>
                    <div class="circle-txt">
                        <div class="circle-1">
                            <h3>Técnicas de cultivo </h3>
                        </div>
                            <p>
                                Clima: El banano crece mejor en climas tropicales y subtropicales, con temperaturas entre 24 y 30 grados Celsius. Requiere una alta humedad y no tolera heladas. <br> <br>
                                Suelo: El suelo ideal para el banano es profundo, bien drenado y rico en nutrientes. Un pH entre 5.5 y 7 es adecuado para un buen crecimiento. <br> <br>
                                Riego: El banano necesita un riego regular para mantener el suelo húmedo. Se deben evitar el encharcamiento y el estrés hídrico. <br> <br>
                                Fertilización: El banano requiere una fertilización adecuada para un crecimiento saludable. Se deben aplicar nutrientes como nitrógeno, fósforo y potasio en cantidades equilibradas. <br> <br>
                                Control de plagas y enfermedades: El cultivo de banano puede verse afectado por diversas plagas y enfermedades, como el mal de Panamá y el picudo negro. Es importante implementar medidas de control y manejo integrado de plagas.
                            </p>                       
                    </div>
                    <div class="circle-txt">
                        <div class="circle-1">
                            <h3>Cosecha y poscosecha</h3>
                        </div>
                            <p>
                                Los bananos se cosechan cuando alcanzan la madurez fisiológica, es decir, cuando han alcanzado su tamaño y color característicos. Se cortan los racimos completos y se dejan madurar antes de la comercialización.<br> <br>
                                El manejo poscosecha implica el control de la temperatura, la humedad y la ventilación para prolongar la vida útil del producto. Se utilizan cámaras de maduración y técnicas de enfriamiento adecuadas para mantener la calidad del banano durante el transporte y almacenamiento.<br><br>
                                Estos son solo algunos aspectos básicos sobre los cultivos de banano. La producción de banano puede variar según la región y las prácticas agrícolas específicas de cada lugar.
                        </p>                       
                    </div>                  
            </div>
        </div>
    </section>
    <section class="general g2 container">
        <h2>Nuestro equipo</h2>
        <div class="general-content">
            <div class="general-4 txt">
                <h3>Santana Obando Jean</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus fuga quas recusandae eaque corrupti, eveniet omnis accusantium sint voluptas et minus cum eius magnam repudiandae reiciendis voluptatem in eos inventore!
                </p>
            </div>
            <div class="general-5 txt">
                <h3>Vera Espinoza Isabel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at voluptatibus exercitationem enim, quas autem perferendis error veritatis dolor fuga, vero assumenda illum maxime laudantium laboriosam quod! Harum, nobis alias?
                </p>
            </div>
        </div>          
    </section>
    <footer class="footer container">
        <h2>Contacto</h2>
        <form>
            <input class="campo" type="text" placeholder="Nombre">
            <input class="campo" type="email" placeholder="Email">
            <input type="submit" class="btn-2" value="Enviar">
        </form>
        <div class="footer-txt">
            <p>Para recibir notificaciones sobre futuros cambios registre su correo</p>
        </div>
    </footer>
</body>
</html>