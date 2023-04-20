<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
</head>
<body class="bg-black">

    <?php

    require __DIR__. '/function.php'
    
    
    ?>

    <div class="container">
        <div class="row my-5">
            <h1 class='text-center text-secondary'>Strong Password Generator</h1>
            <h2 class='text-center text-white'>Genera una password sicura</h2>
            <form method='get' action='index.php' class="bg-light p-5 my-3 rounded">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lunghezza Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="py-3">Consenti ripetizione</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        No
                    </label>
                </div>
                <div class="py-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="0" id="flexCheckDefault" name="Letter">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="Number">
                        <label class="form-check-label" for="flexCheckChecked">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckChecked" name="Simbol">
                        <label class="form-check-label" for="flexCheckChecked">
                            Simboli
                        </label>
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
        <?php 

        session_start();
        
        if(isset($_GET['email'])){

            header('Location:'.'/php-strong-password-generator/server.php');
            $_SESSION['password'] = passwordGenerator($_GET['email']);

        }    
            
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>