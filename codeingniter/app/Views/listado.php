<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
<div class="container">
<h1>Agregar Registro</h1>
<div
class="row">
<div class="col-sm-12">
<form action="">
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" class="form-control" required>
<label for="apaterno">Apellido Paterno:</label>
<input type="text" id="apaterno" name="apaterno" class"form-control" required>
<label for="nombre">Apellido Materno:</label>
<input type="text" id="amaterno" name="amaterno" class="form-control" required>
<button class="btn btn-primary form-control">Guardar</button>

                 </form>
          </div>
     </div>
</div>
    </br>
  <div class="row">
    <div class="col-sm-12">
      <div class="table table-reposive">
        <table class="table table-hover table-bordered">
          <tr>
            <th>NOMBRE</th>
            <th>APELLIDO PATERNO</th>
            <th>APELLIDO MATERNO</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
            
          </tr>
          
          
          
          
<?PHP foreach( $datos as $dato):?>
          <tr>
            <td><?php echo $dato->nombre ?></td>
            <td><?php echo $dato->a_paterno ?></td>
            <td><?php echo $dato->a_materno ?></td>
            <td><a href="<?php echo base_url('/index.php/obtenerInformacion').'/'.$dato->id ?>"class='btn btn-sm btn-warning">Editar</a></td>
              <td><a href="<?php echo base_url('/index.php/eliminar').'/'.$dato->id ?>"class='btn btn-sm btn-danger">Eliminar</a></td>
              </tr>
              <?php endforeach ?>
              
              
             </table>
              </div>
              </div>
              </div>
              </div>
              
          
