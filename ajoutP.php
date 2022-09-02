<?php
// connexion base de donner 
   include_once 'config.php';
   
   if(!isset($_SESSION)){
      session_start();

      // si la variable existe 
      if(isset($_GET['del'])){
         print_r($_SESSION['pannier']);
         $id_del = $_GET['del'];
         $key = array_search($id_del,$_SESSION['pannier']);
         // supprimer le panier 
         unset($_SESSION['pannier'][$key]);
            header('location:pharmacieA.php');

      }
   }
   // unset($_SESSION['pannier']);
   // recuperer id dans le lien 
   // if(!empty($_SESSION['pannier'])){
   //    $_SESSION['pannier'] = array();
   // }
   //verifier dans le liens si l'id existe 
    if(isset( $_GET['id'])){
      
      $id = $_GET['id'];
      $produit = $dbb->prepare("SELECT * FROM pharmacie WHERE id = '$id'");
      $produit->execute();
      if(empty($produit->fetch())){
         //si le produit n'existe pas
         die("ce produit n'existe pas");
      }
      //ajouter le produit dans le tableau 
      if(isset($_SESSION['pannier'])){
         // si le produit est deja dan le pannier 

         $_SESSION['pannier'][] = $id;  // represente la quantité
         header('location:pharmacie.php');




         // $sessions = array_count_values($_SESSION['pannier']);
         // foreach ($sessions as $key => $pan) {
         // }


        
      }else{
         // sinon on ajout le produit
         $_SESSION['pannier'][] = $id ;
         
      }
    }
?>
































<!-- <section> -->
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
                    <!-- recuperer les ids pui les afficher  -->
                    <?php
                    $total = 0;
                    // Supprimer les doublons
                    $articles = array_unique($_SESSION['pannier']);
                    $nbre_articles = array_count_values($_SESSION['pannier']);
                    
                    foreach ($articles as $article) {
                        $produit = $dbb->prepare("SELECT * FROM pharmacie WHERE id = '$article'");
                        $produit->execute();
                        $produit = $produit->fetch();
                        // $produit = $dbb->prepare("SELECT * FROM pharmacie WHERE id = '$id'");
                        // $produit->execute();
                        // $produit->fetch();
                    ?>
                    <tr>
                    <td>
                        <?php echo $produit['id']?></td>
                        <td><?php echo $produit['name']?></td>
                        <td><?php echo $produit['prix']?> $</td>
                        <td>
                            <?php
                                if(array_key_exists($produit['id'],$nbre_articles)){
                                    echo $nbre_articles[$produit['id']];
                                    $total += ($produit['prix'] * $nbre_articles[$produit['id']]);
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h1><?php echo $total;?> $</h1>
        </section>