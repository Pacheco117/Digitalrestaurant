
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    </head>
    <body>
    <FORM action="<?php echo base_url() ?>/guardar" method="post">
        <P>
        <LABEL for="nombre">Nombre: </LABEL>
                  <INPUT type="text" id="nombre" name="nombre"><BR>
        <LABEL for="apellido">Apellido: </LABEL>
                  <INPUT type="text" id="apellido" name="apellido"><BR>
        <LABEL for="cedula">cedula: </LABEL>
                  <INPUT type="text" id="cedula" name="cedula"><BR>
        <INPUT type="submit" value="Enviar"> 
    <INPUT type="reset">
        </P>
     </FORM>
    
     <table class="default">
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>cedula</th>
        <th>editar</th>
        <th>eliminar</th>
      </tr>
      <?php foreach ($data as $dato) { ?>
      <tr>
        <td> <?php echo $dato["id"] ;?> </td>
        <td><?php echo $dato["nombre"] ; ?></td>
        <td><?php echo $dato["apellido"] ; ?></td>
        <td><?php echo $dato["cedula"] ; ?></td>
        <td> <a href="<?php echo base_url()?>/editar?id=<?php echo $dato["id"] ;?> ">editar</a> </td>
        <td> <a href="<?php echo base_url()?>/eliminar?id=<?php echo $dato["id"] ;?> ">eliminar</a> </td>
      </tr>
      <?php } ?>
    </table>
    </body>
    </html>