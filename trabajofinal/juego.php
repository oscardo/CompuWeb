<html lang="es">
<head>
<META charset="utf-8" />
<meta name="@author" content="Oscar Eduardo Ortiz Pinzón">
<link rel="stylesheet" href="css\miestilo.css"></link>
<title>JUEGO</title>
</head>
<body>
<header>
	<h1><p align="center">OSCAR <font style="text-transform: uppercase;">eduardo </font>ORTIZ PINZÓN</p></h1>
</header>
<nav>
<p align="center">
	<a href="whoamI.htm">QUIEN SOY</a>
	<a href="interes.html">INTERESES</a>
    <a href="cv.html">CURRICULUM VITAE</a>
    <a href="juego.php">JUEGO</a>
</p>
</nav>
<section>
<article>
	<form action="jugar.php" method="post">
        <table>
        <tr>
            <td>
                <p>Número de columnas</p>
            </td>
            <td>
                <input type="number" min="1" max="100" step="1" value="1" name="Columnas">
            </td>
        </tr>
        <tr>
            <td>
                <p>Número de Filas</p>
            </td>
            <td>
                <input type="number" min="1" max="100" step="1" value="1" name="Filas">
            </td>
        </tr>
        <tr>
            <td>
                <p>Grosor de la línea</p>
            </td>
            <td>
                <input type="range" min="-10" max="10" step="1" value="1" name="Grosor">
            </td>
        </tr>
        <tr>
            <td>
                <p>Color</p>
            </td>
            <td>
            <input type="color" name="color_favorito" value="#ff0000">
            </td>
        </tr>
        <tr>
            <td>
                <p>Letra</p>
            </td>
            <td>
            <?php
                $letra = array(
                    'Arial',
                    'Tahoma',
                    'verdana',
                    'Tahoma',
                    'Gill Sans Extrabold',
                    'sans-serif',
                    'Lucida',
                    'Georgia',
                    'Helvetica',
                    'Courier'
                );
            echo "<select name='tipoletras'>";
            foreach($letra as $tipo){ 
                echo "<option value='". $tipo ."'>". $tipo ."</option>";
            }
            echo "</select>";
            ?>
            </td>
        </tr>
        <tr><td colspan="2"> <input type="submit" name="Evaluar" value="EVALUAR" /></td></tr>
        </table>
    </form>

    
</article>
</section>


<footer class="pie">
Derechos Reservados . 1983 - <?php echo date('Y'); ?>
</footer>
</body>
<html>
