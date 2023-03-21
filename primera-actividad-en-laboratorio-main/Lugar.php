<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Plantel</title>
</head>
<?php "include/conection.php"
?>
<body>
    <div class="container m-0 context justif.center py-2">
        <div class="row text-center">
            <h1 class ="text-success">Lugar</h1>
</div>
<form id= "Plantel" action="<?php echo $_server['PHP_SELF'];?>"METHOD=POST>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type= "text" name="nombre del lugar" class="form-control" placeholder ="nombre del Lugar" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type=" text" name="Descripcion" CLASS="form-control" placeholder ="Descripcion" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type= "text" name="Telefono" class="form-control" placeholder ="Telefono" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type= "text" name="Email" class="form-control" placeholder ="Email" required>
</div>
</div>
<div class="row text center">
    <div class="col-sm-12 col-md-12 col-ig-12">
        <input type="Facebook" name="Facebook" placeholder ="facebook" class="form-control" required>
</div>
<div>
<div class="row text center">
    <div class="col-sm-12 col-md-12 col-ig-12">
        <input type="horario" name="Horario" placeholder ="Horario" class="form-control" required>
</div>
<div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="registrar" name="btn" class ="btn-succes">
</div>
</div>
</form>
</body>
