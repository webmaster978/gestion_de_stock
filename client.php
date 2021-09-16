<?php include 'partials/head.php'; 
 
 include 'traitement/insertagent.php';
 $req = $db->query('SELECT * FROM client');
 ?>
<div class="main-content">
  <div class="container-fluid">
      <div class="page-header">
          <div class="row align-items-end">
              <div class="col-lg-8">
                  <div class="page-header-title">
                      
                      <div class="d-inline">
                          <button type="button" class="btn btn-success" data-toggle="modal"
                              data-target="#exampleModalCenter">Nouveau agent</button>


                      </div>
                  </div>
              </div>
              
          </div>
      </div>


      <div class="row">
          <div class="col-md-12">
              <div class="card">
                
                  <div class="card-body">
                      <a class="btn btn-primary" href="fpdf/tutorial/client.php?">Voir
                          la liste</a>

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
                                  <th>Numero</th>
                                  <th>Nom complet</th>
                                  <th>Telephone</th>
                                  <th>genre</th>
                                  <th>Adresse</th>
                                  <th>Action</th>
                                  <th>Salary</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php while ($ligne = $req->fetch()) { ?>
                                 <div class="modal fade" id="exampleModalCenter<?php echo ($ligne['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterLabel">Modifier l'agent : <b><?php echo ($ligne['nom']); ?></b> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <form action="magent.php" method="POST" id="formulaire">
                  <div class="form-control-group">
                      <input type="hidden" name="id" value="<?php echo ($ligne['id']); ?>">
                      <input class="form-control" type="text" name="nom" id="nom" value="<?php echo ($ligne['nom']); ?>" placeholder="Nom complet "> <br>

                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Date de naisance</label>
                              <input class="form-control" type="date" name="dna" id="dna" value="<?php echo ($ligne['dna']); ?>" required>
                          </div>
                          <div class="col-md-6">
                              <label for="">Numero de telephone</label>
                              <input class="form-control" type="text" name="tel" id="tel" value="<?php echo ($ligne['tel']); ?>" placeholder="" required>
                          </div>
                      </div> <br>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="">Poste</label>
                              <select class="form-control" name="poste" id="poste" value="<?php echo ($ligne['poste']); ?>" required>
                                  <option value="<?php echo ($ligne['poste']); ?>"><?php echo ($ligne['poste']); ?></option>
                                  <option value="reception">Reception</option>
                                  <option value="caisse">Caisse</option>
                                  <option value="admin">Admin</option>
                                  <option value="journalier">Journalier</option>
                              </select>
                          </div>
                          
                      </div> <br>
                      <input class="form-control" type="text" name="adresse" id="adresse" value="<?php echo ($ligne['adresse']); ?>"
                          placeholder="Adresse pyisique " required> <br>


                  </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              <input class="btn btn-primary" type="submit" name="modifier" value="Modifier">

          </div>
          </form>
      </div>
  </div>
</div>
                              <tr>
                                  <td>
                                      <label class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input select_all_child" id=""
                                              name="" value="option2">
                                          <span class="custom-control-label">&nbsp;</span>
                                      </label>
                                  </td>
                                  <td><?php echo ($ligne['id']); ?></td>
                                  <td><?php echo ($ligne['nom']); ?></td>
                                  <td><?php echo ($ligne['contact']); ?></td>
                                  <td><?php echo ($ligne['genre']); ?></td>
                                  <td><?php echo ($ligne['adresse']); ?></td>
                                  <td>
                                  <button type="button" class="btn btn-warning" data-toggle="modal"
                              data-target="#exampleModalCenter<?php echo ($ligne['id']); ?>">Modifier</button>
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

<!-- modal produit -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterLabel">Nouveau Client</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <form action="insertclient.php" method="POST" id="formulaire">
                  <div class="form-control-group">
                      <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom complet "> <br>

                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Genre</label>
                              <select class="form-control" name="genre" id="">
                                  <option value="Masculin">Masculin</option>
                                  <option value="Feminin">Feminin</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label for="">Numero de telephone</label>
                              <input class="form-control" type="number" name="contact" id="tel" placeholder="" required>
                          </div>
                      </div> <br>
               
                      <input class="form-control" type="text" name="adresse" id="adresse"
                          placeholder="Adresse pyisique " required> <br>


                  </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">

          </div>
          </form>
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


<?php include 'partials/footer.php'; ?>