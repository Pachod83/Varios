<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  	 <link rel="stylesheet" href="style.css">
</head>
<body>
<center>

 
<div class="container mt-3">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"> 
		<div class="mb-3 mt-3"> 
		<label>Digite un numero para multiplicar: </label>
		<input type="int"class="center" name="num"  placeholder="Ingrese un numero:" required>
		</div>
		<br>
		<br>
		<input type="submit" name="Enviar" value="Calcular" class="btn btn-primary">
	</form>


<div class="container mt-3">
	<form method='GET' >
		<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Operacion</th>
				      <th scope="col">Resultado</th>
				    </tr>
				  </thead>
				  <tbody>
			<?php 
			
			if(isset($_GET['num']))
			{

			   $num = $_GET['num'];
			
			   for( $i=1; $i<=20; $i++)
			   {
			    echo "<tr>";
			    echo '<th scope=row>'.$i.'</th>';
			    echo '<td>'.$num.' * '.$i.'</td>';
			    echo '<td>'.$num*$i.'</td>';
			    echo "</tr>";
		            }
		        }
		?>
		</tbody>
		</table>
		</form>
</div>
</center>
</body>
</html>