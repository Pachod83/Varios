<!DOCTYPE html>
<html lang="en">

<head>
	<title>Programacion WEB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    

     

      <div class="container mt-3">
         <h1> Ingreso de automoviles</h1> 
    	<form action="crear_carro.php" method="POST">

            <div class="mb-3 mt-3">
            	<label>Placa:</label>
            	<input type="text" name="txtplaca" class="form-control" placeholder="Ingrese el numero de placa">
            </div>


            <div class="mb-3 mt-3">
                <label>Modelo</label>

                <select name="txtmodelo">
                <option value="mazda">Mazda</option>
                <option value="ford">Ford</option>
                <option value="nissan">Nissan</option>
                <option value="toyota">Toyota</option>                 
               </select>

            <div class="mb-3 mt-3">
                <label>ID</label>
                <input type="number" name="txtid" class="form-control" placeholder="Ingrese la identidad del propietario" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Nombre</label>
                <input type="text" name="txtnombre" class="form-control" placeholder="Ingrese el nombre" required>
            </div>

             <div class="mb-3 mt-3">
               <label>Fecha Nacimiento</label>
               <input type="date" name="fecha" class="form-control">
            </div>


            <div class="mb-3 mt-3">
                <label>Sexo</label>
                <select name="txtsexo">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                </select>
            </div>


            <div class="mb-3 mt-3">
                <label>Tipo de Propietario</label>
                <select name="txttipo_pro">
                <option value="juridico">Persona juridica</option>
                <option value="empresa">Empresa</option>
                <option value="gobierno">Entidad gubernamental</option>
                </select>
            </div>

            
            <div class="mb-3 mt-3">
                <label>Departamento</label>

                <select name="txtdepartamento">
                <option value="atlantida">Atlantida</option>
                <option value="cholu">Choluteca</option>
                <option value="comaya">Comayagua</option>
                <option value="colon">Colon</option>
                <option value="copan">Copan</option>
                <option value="cortes">Cortes</option>
                <option value="paraiso">El Paraiso</option>
                <option value="francisco">Francisco Morazan</option>
                <option value="gracias">Gracias a Dios</option>
                <option value="intibuca">Intibuca</option>
                <option value="islas">Islas de la Bahia</option>
                <option value="paz">La Paz</option>
                <option value="lempira">Lempira</option>
                <option value="ocotepeque">Ocotepeque</option>
                <option value="olancho">Olancho</option>
                <option value="santa">Santa Barbara</option>
                <option value="valle">Valle</option>
                <option value="yoro">Yoro</option>
               </select>
            </div>

		   	<input type="submit" name="Enviar" class="btn btn-primary">

	   </form>

    </div>   
    
</body>
</html>