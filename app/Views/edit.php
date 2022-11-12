
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    </head>
    <body>
    <FORM action="<?php echo base_url() ?>/actualizar" method="post">
        <P>
        <LABEL for="nombre">id: </LABEL>
                  <INPUT type="text"  readonly  value="<?php echo $data["id"] ; ?>" name="id" id="id"><BR>
        <LABEL for="nombre">Nombre: </LABEL>
                  <INPUT type="text" value="<?php echo $data["nombre"] ; ?>" name="nombre" id="nombre"><BR>
        <LABEL for="apellido">Apellido: </LABEL>
                  <INPUT type="text" value="<?php echo $data["apellido"] ; ?>" name="apellido" id="apellido"><BR>
        <LABEL for="cedula">cedula: </LABEL>
                  <INPUT type="text" value="<?php echo $data["cedula"] ; ?>" name="cedula" id="cedula"><BR>
        <INPUT type="submit" value="Enviar"> 
    <INPUT type="reset">
        </P>
     </FORM>
    </body>
    </html>