<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($empleados as $empleado) { ?>
        <tr>
            <td> <?php echo $empleado->id; ?> </td>
            <td>  <?php echo $empleado->nombre; ?>  </td>
            <td> <?php echo $empleado->correo; ?></td>
            <td> Editar | Borrar </td>
        </tr>
     

       <?php } ?>
    </tbody>
</table>
