 <?php include 'partials/head.php'; ?>

 <?php 

    $req = $db->query('SELECT * FROM produit ORDER BY id DESC');
    $r = $db->query('SELECT * FROM stock');
    ?>
 <div class="main-content">
     <div class="container-fluid">
         <div class="page-header">
             <div class="row align-items-end">
                 <div class="col-lg-8">
                     <div class="page-header-title">
                         
                         <div class="d-inline">
                             <button type="button" class="btn btn-success" data-toggle="modal"
                                 data-target="#exampleModalCenter">NOUVEAU STOCK</button>


                         </div>
                     </div>
                     
                 </div>
                
             </div>
         </div>


         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header row">
                     <label style="font-size:30px;" for="">LISTE DE MOUVEMENT D'APPROVISIONNEMENT</label> 
                       
                     </div>
                     <div class="card-body">
                         <table id="advanced_table" class="table">
                             <thead>
                                 <tr>
                                     <th class="nosort" width="10">
                                         <label class="custom-control custom-checkbox m-0">
                                             <input type="checkbox" class="custom-control-input" id="selectall" name=""
                                                 value="option2">
                                             <span class="custom-control-label">&nbsp;</span>
                                         </label>
                                     </th>
                                     
                                     <th>Produit</th>
                                     <th>Quantite</th>
                                     <th>Prix</th>
                                     <th>Prix Total</th>
                                     <th>Date aprovisionnement</th>
                                     <th>Action</th>
                                     <th>Salary</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php while ($ligne = $req->fetch()) { ?>
                                 <tr>
                                     <td>
                                         <label class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input select_all_child" id=""
                                                 name="" value="option2">
                                             <span class="custom-control-label">&nbsp;</span>
                                         </label>
                                     </td>

                                     
                                     <td><?php echo ($ligne['produits']); ?></td>
                                     <td><?php echo ($ligne['quantite']); ?></td>
                                     <td><?php echo ($ligne['prix']); ?></td>
                                     <td><?php echo ($ligne['prix']) * ($ligne['quantite']);; ?></td>
                                     <td><?php echo ($ligne['created_at']); ?></td>

                                     <td><button class='btn btn-primary'>Modofier</button>

                                     </td>
                                     <td>$205,500</td>
                                 </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>




 


 <footer class="footer">
     <div class="w-100 clearfix">
         <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 jibu All Rights
             Reserved.</span>
         <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Power by <i
                 class="fa fa-heart text-danger"></i> by <a href="#" class="text-dark"
            >Jonas</a></span>
     </div>
 </footer>
 </div>
 </div>

 <!-- modal produit -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterLabel">Nouveau Approvisionnement</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <form action="insp.php" method="POST">
                     <div class="form-control-group">
                         <select class="form-control" name="produits" id="">
                             <option value="Jibu">Jibu</option>
                         </select>
                         <br>

                         <div class="row">
                             <div class="col-md-6">
                                 <input class="form-control" type="number" name="quantite" id=""
                                     placeholder="Nombre de carton" required>
                             </div>
                             <div class="col-md-6">
                                 <input class="form-control" type="number" name="prix" id=""
                                     placeholder="Prix unitaire" required>
                             </div>
                         </div> <br>

                         <?php while ($l = $r->fetch()) { ?>
                         <input type="hidden" name="qte" value="<?php echo ($l['qte']); ?>">
                         <?php } ?>
                     </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                 <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter produit">
             </div>
         </div>
         </form>
     </div>
 </div>
 <?php include 'partials/footer.php'; ?>