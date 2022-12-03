<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>PESO CORPORAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/principal.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>PESO CORPORAL</h1>
        </header>
		<br>
        <main>
			<section>
				<fieldset>
				<legend><h1>RESULTADO DO CÁLCULO:</h1></legend>
				 <?php
					$nome = $_POST['nome'];
					$peso = $_POST['peso'];
					$altura = $_POST['altura'];
					$IMC = $peso / ($altura * $altura);
					echo "<h1>$nome</h1><br>";
					echo "<h1>O IMC é $IMC</h1><br>";
					echo "<img src='img/IMC.jpg'/>	";
				?>
				</fieldset>
			</section>

        </main>
		<br>
        <footer>
            <p>Desenvolvido por Erica Camila Silva Cunha - 2022</p>
        </footer>

    </body>
</html>
