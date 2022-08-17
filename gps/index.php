<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <title>Prueba 1</title>
</head>

<body oncontextmenu="return false">
    <div id="contenedor" class="container-fluid">
        <div class="row" id="rowTop"></div>
        <div class="row" id="rowLogin">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card" id="cardLogin">
                    <div class="card-body">
                        <form id="loginForm" action="login.php" class="login-form" method="POST">
                            <div class="row mb-3">
                                <span style="text-align: center;"><i class="fa-solid fa-user" id="user-icon"></i></span>
                            </div>
                            <br><br>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="Email" name="txtEmail" placeholder="Correo electrónico">
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="Password" name="txtPassword" placeholder="Contraseña">
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                    <button type="submit" class="col-sm-4 btn" id="btnLogin">Acceder</button>
                                <div class="col-sm-4"></div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>