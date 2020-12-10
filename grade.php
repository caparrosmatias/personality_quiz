<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Quiz</title>
</head>

<body>

<?php
    $name = $_REQUEST[name];
    $id = $_REQUEST[id];
    echo '<h2> Welcome ' . $name . '</h2>';
    echo '<h2> Your ID is: ' . $id . '</h2>';
?>

	<div id="page-wrap">

		<h1 class="transparent index-headline" >Results:</h1>
		
        <?php
        
          /**
          *Variables para las preguntas..
          */
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            
          /**
          * Totalizadores...
          */

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            $resultado = 0;
            
          /**
          * Las preguntas pueden tener distinto peso sobre las otras..!
          */

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            ?>

            <div class="results-overlay">

            <?php
              if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                    echo 'Mayoria de A - Tienes una personalidad de tipo A';
                    $result = 1;

              }
              elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                    echo 'Mayoria de B - Tienes una personalidad de tipo B';
                    $result = 2;
              }
              elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                    echo 'Mayoria de C - Tienes una personalidad de tipo C';
                    $result = 3;
              }
              elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                    echo 'Mayoria de D - Tienes una personalidad de tipo D';
                    $result = 4;
              }
            ?>     

            </div>
  </div>

<h1>Save your data..?</h1>
<form action="save.php" method="get">

<?php
    echo '<input type="hidden" name="id" value="'.htmlentities($id).'">';
    echo '<input type="hidden" name="name" value="'.htmlentities($name).'">';
    echo '<input type="hidden" name="result" value="'.htmlentities($result).'">';
?>

<input type="submit" value="Guardar">

</form>

</body>
</html>
