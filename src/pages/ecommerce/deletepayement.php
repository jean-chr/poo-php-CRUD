<?php
require_once('../connectDB.php');
require_once('../../repositories/payementRepository.php');
require_once('../../entities/payement.php');
$marieadmin= new payementRepository($bd);
if(isset($_GET['id'])){
    $id=(int)$_GET['id'];
    $don = $marieadmin->getOne($id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <title>Mise A jour</title>
</head>
<body>
    <div class="clearfix"></div><br><br>
<div class="container">
    <form action="traitementpayement.php" method="POST">
        <table class="table table-bordered">
        <tr>
                <td>
                    Identifiant
                </td>
                <td><input type="text" name="id" class="form-control" value="<?=$don->getId()?>" required></td>
            </tr>
            <tr>
                <td>
                    Date de payement
                </td>
                <td><input type="text" name="datedepayement" class="form-control" value="<?=$don->getDatedepayement()?>" required></td>
            </tr>
            <tr>
                <td>Mode de payement</td>
                <td><select name="modedepayement" id="modedepayement" class="form-control form-select-lg mb-3" required>
                    <option selected value="<?=$don->getModedepayement()?>">Tmoney</option>
                    <option value="Flooz">Flooz</option>
                </select></td>
            </tr>
            <tr>
                <td>Somme</td>
                <td><input type="text" name="somme" class="form-control" value="<?=$don->getSomme()?>" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" value="delete" class="btn btn-danger">Supprimer cet enregistrement</button></td>
            </tr>
        </table>
    </form>
</div>
    <script src="../../../components/js/jquery.min.js"></script>
    <script src="../../../components/js/bootstrap.min.js"></script>
</body>
</html>