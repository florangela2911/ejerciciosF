<html>
<head>

</head>
<body>

//Estructuras de control en PHP - Sentencias condicionales - if/else//

//condicional//
<?php $score = 95 ?>

<?php if ($score ≥ 9): ?>
<strong>A</strong>

<?php elseif ($score ≥ 80): ?>
<strong>B</strong>

<?php elseif ($score ≥ 70): ?>
<strong>C</strong>

<?php elseif ($score ≥ 60):  ?>
<strong>D</strong>

// si la condicion del if no se cumple, se cumple la del else//
<?php else: ?>
<strong>F</strong>
<?php endif ?>

</body>
</html>

