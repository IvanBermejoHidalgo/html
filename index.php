<form method="post">
 <label for="rows">Filas:</label><br>
 <input type="text" id="rows" name="rows"><br> 
 <label for="cols">Columnas:</label><br>
 <input type="text" id="cols" name="cols"><br>
 <label for="letras">Numero de letras:</label><br>
 <input type="text" id="letras" name="letras"><br>
<input type="submit" value="Enviar numero">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["rows"]) && isset($_POST["cols"])){
		$rows = htmlspecialchars($_POST["rows"]);
		$cols = htmlspecialchars($_POST["cols"]);
		
		echo '<table border="1">';
		for ($i = 0; $i < $rows; $i++){
			echo "<tr>";
			for($j = 0; $j < $cols; $j++){
				echo "<td>" . generar_palabra($letras) . "</td>";
			
			}
			echo "</tr>";
		}
		echo "</table>";

	}


	/*$letras = $_POST["letras"];
	
	$letrasutilidad = "abcdefghijklmnopqrstuvwxyz";
	$palabra = "";

	for ($i = 0; $i < $letras; $i++){
		$palabra = $palabra. $letrasutilidad[rand(0,25)];
	}

	echo"<p>Palabra aleatoria: $palabra</p>";


	 */



}

function generar_palabra($num) {
	$letras = $_POST["letras"];

        $letrasutilidad = "abcdefghijklmnopqrstuvwxyz";
        $palabra = "";

        for ($i = 0; $i < $num; $i++){
                $palabra = $palabra. $letrasutilidad[rand(0,25)];
        }

        echo"<p>Palabra aleatoria: $palabra</p>";
}
