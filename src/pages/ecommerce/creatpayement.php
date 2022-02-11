<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <title>enregistrement d'un client</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navabar-light bg-light m-2">
        <div class="container-fluid">
            <a href=""  class="navbar-brand"><img src="../../../components/img/im2.jpg" alt="" style="height: 50px;"></a>
            <div class="collapse navbar-collapse">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a href="" class="nav-link active" aria-current-page="page">ECOMMERCE</a>
                      <li><a class="p-4" href="../../../index.php" class="alert-link white">acceuil</a></li>
                      <li><a class="p-4"  href="listpayement.php">liste des payement</a></li>
                      <li><a class="p-4"  href="creatpayement.php">une nouvelle payement</a></li>
                  </li>
                </ul>
        </div>
        </div>
        <form action="" class="d-flex p-2">
            <input type="search" class="form-control me-2" placeholder="Search">
            <button class="btn btn-ouitline-success" type="submit">Search</button>
        </form>
    </nav>
    <br><br>
    <div class="clear"></div>
<div class="container">
    <form action="traitementpayement.php" method="POST">
        <table class="table table-bordered">
            <tr>
                <td>
                    Date de payement
                </td>
                <td><input type="text" name="datedepayement" class="form-control" required></td>
            </tr>
            <tr>
                <td>Mode de payement</td>
                <td><select name="modedepayement" id="modedepayement" class="form-control form-select-lg mb-3" required>
                    <option selected value="Tmoney">Tmoney</option>
                    <option value="Flooz">Flooz</option>
                </select></td>
            </tr>
            <tr>
                <td>Somme</td>
                <td><input type="text" name="somme" class="form-control" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" value="create" class="btn btn-primary">Create</button></td>
            </tr>
        </table>
    </form>
</div>
    <script src="../../../components/js/jquery.min.js"></script>
    <script src="../../../components/js/bootstrap.min.js"></script>
</body><h3 align="center">Flooz sureté absolue!!!!!!</h3>
<div id="carouselExempleSlideOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../../components/img/im3.jpg" alt="" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="../../../components/img/im3.jpg" alt="">
        </div>
    </div>
</div>
<br><br><br>
<div class="row g-3 align-items-center">
        <div class="col-3">
            <h5>Nous suivre</h5>
            <p class="form-text"></p>
        </div>
        <div class="col-5">
            <h5>Notre Newsletter</h5>
            <p class="form-text">Inscrivez vous pour etre informe a temps réel de nos nouveaux produits</p>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputEmail4" class="col-form-label">Votre Mail</label>
                </div>
                <div class="col-auto">
                    <input type="email" class="form-control">
                </div>
                <div class="col-auto">
                    <span class="btn btn-primary" type="button">Souscrire</span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <h5>Nous Contacter</h5>
            <p class="form-text">Nous contacter sur marie@gmail.com notre mail</p>
            <p class="form-text">Nos contacts:</p>
            <p class="form-text">BP 443 Kara-togo</p>
        </div>
</div>

</html>
