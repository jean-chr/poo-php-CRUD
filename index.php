<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/css/bootstrap.css"/>
    <link rel="stylesheet" href="components/css/style2.css"/>
   
    <title>index</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-light" href="#">ECOMMERCE</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="text-light" href="index.php">acceuil</a></li>
                    <li><a class="text-light" href="src/pages/ecommerce/client_list.php">client</a></li>
                    <li><a class="text-light" href="src/pages/ecommerce/list.php">produit</a></li>
                    <li><a href="src/pages/ecommerce/commande_list.php">commande</a></li>
                    <li><a href="src/pages/ecommerce/listpayement.php">payement</a></li>
                    <li><a href="src/pages/ecommerce/categorie_list.php">categorie</a></li>
                    <li><a href="src/pages/ecommerce/livraison_list.php">livraison</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div id="main-content">
    <marquee direction="right" behavior="alternate" scrollamount="10" style="margin-top: 55px;" class="btn-primary">  IP traquer vous souhaite la bienvenue</marquee>
    <div class="container" style="margin: 5px;">

        <div class="jumbotron text-left" style="margin: 30px;">
            <h2 class="text-left">c'est quoi le ecommerce ?</h2>
            <p class="text-left">
            Le e-commerce ou commerce électronique correspond à <br>
            la vente en ligne de biens ou de services a travers <br>
            de sites web marchands. Ces transactions commerciales <br>
            électroniques se font principalement grâce au réseau <br>
            internet, même s’il existe d’autres types de réseaux dans <br>
            le cadre du commerce B to B (inter-entreprises) par exemple. <br> 
            alors n'hesiter plus et <a href="src/pages/ecommerce/commande_list.php">passer la commande</a><br></p>
            <a href="src/pages/ecommerce/list.php" class="btn btn-primary btn-lg ">visiter la liste des produit</a>
        </div>
    </div>
    </div>
    <div class="container-fluid">
				<div class="gallery">
				 <img src="components/img/img1.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">Ordinateur portable</div>
				</div>
				<div class="gallery">
				 <img src="components/img/img5.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">pc bureau</div>
				</div>
			 	<div class="gallery">
				 <img src="components/img/img2.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">Imprimante</div>
				</div>
           
				<div class="gallery">
				 <img src="components/img/img4.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">Mixeur</div>
				</div>
				<div class="gallery">
				 <img src="components/img/img6.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">Mixeur</div>
				</div>
				<div class="gallery">
				 <img src="components/img/img3.jpeg" alt="ordinateur portable " width="300" />
				 	<div class="desc">Micro onde</div>
				</div>
	</div>

    <script src="components/css/bootstrap.min.css"></script>
    <script src="../../../components/js/jquery.js"></script>
    <script src="../../../components/js/bootstrap.js"></script>
</body>
</html>