<?php
require_once('../connectDB.php');
 ?>
<!DOCTYPE html>
<html lang="fr">
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../../../components/css/style.css">
             <link rel="stylesheet" href="../../../components/css/bootstrap.css">
            <title>Nouvelle commande</title>
        </head>
        <body>
           <form action="categorie_traitement.php" method="POST">
            <nav>
              <ul class="menu">
                <li><a href="../../../index.php">Acceuil</a></li>
                <li><a href="categorie_list.php">Liste des commandes</a></li>
                <li><a href="categorie_create.php">nouvelle commandes</a></li>
             </ul>
           </nav>
           <center>
           
  <fieldset >
    <legend>Formulaire de commande</legend>
    <div class="mb-3">
      <label for="genre" class="form-label">Genre</label>
      <select id="" class="form-select" name="genre" required="">
         <option value="e"></option>
        <option value="Informatique">Informatique</option>
        <option value="Menagere">Menagere</option>
        <option value="Autres">Autres</option>
      </select>
    </div>
     <div class="mb-3">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" id="" class="form-control" placeholder="" name="libelle" required="">
    </div>
 <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" id="" class="form-control" placeholder="" name="description" required="">
    </div>

    <div class="mb-3">
      <div class="form-check">
      </div>
    </div>
    <input type="reset" name="" value="annuler">
     <input type="submit" name="submit" value="create">
  </fieldset>
</form>
               <!-- <form action="traitement.php" method="POST">                   
                   <label for="genre">Genre:</label>
                   <select name="genre">
                       <option value1=""></option>
                       <option value2="Informatique">Informatique</option>
                       <option value3="Menagere">Menagere</option>
                       <option value4="Autres">Autres</option>
                   </select><br><br>
                   <label for="libelle">Libelle: </label>
                   <input type="text" name="libelle"><br><br>

                   <label for="description">Description:</label>
                   <input type="text" name="description">

                    <input type="submit" name="submit" value="create">
                    <input type="reset" name="" value="annuler">
               </form>-->
           </center>
        </body>
    </html>