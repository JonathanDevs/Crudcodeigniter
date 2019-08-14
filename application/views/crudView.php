<!doctype html>
<html lang="en">
  <head>
    <title>CI Crud </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">CodeIgniter</a>
    </nav>
    <div class="container">
        <br>
        
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Agregar
    </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo  site_url('CrudController/create') ?>">
    <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp" placeholder="Enter email">            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Enter email">            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">fechaNacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento" aria-describedby="emailHelp" placeholder="Enter email">            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">noTelefono</label>
            <input type="text" class="form-control" name="noTelefono" aria-describedby="emailHelp" placeholder="Enter email">            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">comentarios</label>
            <input type="text" class="form-control" name="comentarios" aria-describedby="emailHelp" placeholder="Enter email">            
    </div>       
        <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        <table class="table">
        <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Numero Telefono</th>
                <th scope="col">Comentarios</th>
                <th scope="col">Acciones</th>    

                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row){?>
                <tr>
                <th scope="row"><?php echo $row->id; ?> </th>
                <td> <?php echo $row->apellido; ?></td>
                <td> <?php echo $row->nombre; ?></td>
                <td> <?php echo $row->fechaNacimiento; ?></td>
                <td> <?php echo $row->noTelefono; ?></td>
                <td> <?php echo $row->comentarios; ?></td>               
                <td> <a href="<?php echo site_url('CrudController/edit')?>/<?php echo $row->id;?>">Edit</a> | 
                     <a href="<?php echo site_url('CrudController/delete')?>/<?php echo $row->id;?>">Delete</a></td>
                </tr>
                <tr>
                <?php } ?>               
        </tbody>
    </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>