<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input type="text"
            class="form-control" value="<?php echo $empleado->id ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID Empleado">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre:</label>
          <input type="text"
            class="form-control" name="nombre" value="<?php echo $empleado->nombre ?>" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Correo:</label>
          <input type="email" class="form-control" value="<?php echo $empleado->correo ?>" name="correo" id="" aria-describedby="emailHelpId" placeholder="Correo del empleado">
          
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">

        </form>

    </div>
    
</div>