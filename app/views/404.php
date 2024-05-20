
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../app/css/forms.css">

    <link rel="shortcut icon" href="../assets/img/LogoFST-black.png" type="image/x-icon">
    <title>ForgezST - Error 404</title>
</head>
<body>
    <br><br>
   <div class="contenedor">
   <h4 id="error" >404</h4>
   <p>
    No tienes permisos para poder entrar a esta zona
   </p>
    <?php require_once '../includes/button.php'; ?>
   </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
        max-width: 1200;
    }
    h4{
        font-size: 50px;
color: red;
text-align: center;
}
p{
        font-size: 25px;
font-weight: bolder;
text-align: center;
}
.contenedor{
    margin-top: 200px;
    margin-left: 550px;
}
</style>