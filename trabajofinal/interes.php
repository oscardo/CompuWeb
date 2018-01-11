<?php
 
 $mensaje = "<html lang='es'>
 <head>
 <META charset='utf-8' />
 <meta name='@author' content='Oscar Eduardo Ortiz Pinzón'>
 <link rel='stylesheet' href='css\miestilo.css'></link>
 <title>INTERÉS</title>
 </head>
 <body>
 <header>
     <h1><p align='center'>OSCAR <font style='text-transform: uppercase;'>eduardo </font>ORTIZ PINZÓN</p></h1>
 </header>
 
 <nav>
 <p align='center'>
     <a href='whoamI.htm'>QUIEN SOY</a>
     <a href='interes.php'>INTERESES</a>
     <a href='cv.php'>CURRICULUM VITAE</a>
     <a href='juego.php'>JUEGO</a>
 </p>
 </nav>
 
 <section>
 <article>
     <div id='TablaInteres'>
     Mis Interéses son los siguientes
     <table align='center' border='5'>
     <tr>
         <td>
             <figure>
                 <img id='imagen2' src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Departments_of_colombia.svg/400px-Departments_of_colombia.svg.png' alt='Colombia' height='150' width='200'>
                 <figcaption>
                 Colombia
                 </figcaption>
             </figure>
         </td>
         <td>
         <figure>
                 <img class='imagen' src='images/amigos.jpg' alt='Mis Amigos' height='150' width='200'>
                 <figcaption>
                 Mis amigos
                 </figcaption>
             </figure>
         </td>
         <td>
             <figure>
                 <img class='imagen' src='http://blogs.elcolombiano.com/pulsoverde/wp-content/uploads/2016/04/Pulso-Verde.jpg' alt='Nacional' height='150' width='200'>
                 <figcaption>
                 Nacional
                 </figcaption>
             </figure>
         </td>
         <td>
             <figure>
                 <img id='imagenes' src='https://www.unir.net/wp-content/uploads/2017/04/logo-v.png' alt='UNIR' height='150' width='200'>
                 <figcaption>
                 Mi Estudio
                 </figcaption>
             </figure>
         </td>
         <td>
             <figure >
                 <img id='imagenes' src='https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/000/057/3d5/2e2729e.jpg' alt='YO' height='150' width='200'>
                 <figcaption>
                 YO
                 </figcaption>
             </figure>
         </td>
     </tr>
     </table>
     </div>
 </article>
 </section>
 
 
 <footer class='pie'>
 Derechos Reservados . 1983 - 2017
 </footer>
 </body>
 <html>";

 print($mensaje);
?>