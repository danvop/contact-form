<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Contact form</title>
    <style>
        .card-header .btn{
        
            
            
            
            
        }
    </style>
</head>
<body>
    <div class="container">
        <?php for($i=0; $i<5; ++$i): ?>
            <div class="card m-1" >
                <div class="card-header d-flex" id="headingThree">

                    <div class="my-auto">
                        <div>Геннадий Иванович Паваротти</div>
                        <small>yesterday</small>
                            
                    </div>
                    <button class="btn btn-success collapsed ml-auto my-auto" type="button" data-toggle="collapse" data-target="#collapse<?=$i?>">
                    x
                    </button>

                </div>
                <div id="collapse<?=$i?>" class="collapse">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, 
                    </div>
                    <div class="card-footer d-flex">
                        <div class="my-auto">
                            footer body
                        </div>
                        <button class="btn btn-success ml-auto mx-1">mail</button>
                        <button class="btn btn-primary">call</button>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        
    <!-- container ends -->
    </div> 

    
</body>
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap.js"></script>
</html>

