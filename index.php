<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'template/_head.php' ?>
    <title>Crud || Home</title>
</head>

<body>
    <?php
    require 'Database/createdb.php';
    require 'template/_nav.php';
    ?>
    <div class="px-4 py-5 my-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="display-5 fw-bold">Php Crud</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium exercitationem vel porro illum consequuntur assumenda maxime nisi tempora, voluptates saepe tenetur fuga cupiditate. Ab repellendus nisi minus explicabo minima voluptatibus.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
               <a href="crud.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Php-crud</button></a>
                <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
            </div>
        </div>
    </div>
    <?php
    require 'template/_footer.php'
    ?>
</body>

</html>