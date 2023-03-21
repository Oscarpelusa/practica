<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>registro</title>
</head>
<?php "include/conection.php"
?>
<body>
    <div class="container m-0 context justif.center py-2">
        <div class="row text-center">
            <h1 class ="text-success">registro</h1>
</div>
<form id= "Registro" action="<?php echo $red-500['PHP_SELF'];?>"METHOD=POST>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type= "text" name="nombre" class="form-control" placeholder ="nombre" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type=" text" name="apellidos" CLASS="form-control" placeholder ="apellidos" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type= "text" name="Direccion" class="form-control" placeholder ="Direccion" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type= "text" name="Telefono" class="form-control" placeholder ="Telefono" required>
</div>
</div>
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type= "Date" name="Fecha" class="form-control" required>
</div>
</div>
<div class="row text center">
    <div class="col-sm-12 col-md-12 col-ig-12">
        <input type="Email" name="Email" placeholder ="Email" class="form-control" required>
</div>
<div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="registrar" name="btn" class ="btn-succes">
</div>
</div>
</form>
</body>

        