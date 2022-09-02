<?php session_start();
        include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmacieA</title>
    <link rel="stylesheet" href="css/style-pharmacie.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

</head>
<body class="pannier">
    <h1 class="titre">Liste des produits</h1>
    <a href="pharmacie.php" class="link">panier</a>
 
<section>
<table>
                <thead>
                   <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>Action</th>
                </tr> 
                </thead>
                
                <tbody>
                    <?php
                    $total = 0;
                    $articles = array_unique($_SESSION['pannier']);
                    $nb_articles = array_count_values($_SESSION['pannier']);
                    
                    foreach ($articles as $article) {
                        $produit = $dbb->prepare("SELECT * FROM pharmacie WHERE id = '$article'");
                        $produit->execute();
                        $produit = $produit->fetch();
                    ?>
                    <tr>
                    <td>
                        <?php echo $produit['id']?></td>
                        <td><?php echo $produit['name']?></td>
                        <td><?php echo $produit['prix']?> $</td>
                        <td>
                            <?php
                                if(array_key_exists($produit['id'],$nb_articles)){
                                    echo $nb_articles[$produit['id']];
                                    $total += ($produit['prix'] * $nb_articles[$produit['id']]);
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="ajoutP.php?del=<?=$produit['id']?>"><img src="images/poubelle.png" alt=""></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <h1 class="total"><?php echo $total;?> $</h1>
        </section>
</body>
</html>