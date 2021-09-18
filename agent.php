 <?php include 'partials/head.php'; 
 
    include 'traitement/insertagent.php';
    $req = $db->query('SELECT * FROM agent');
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
                         <a class="btn btn-primary" href="fpdf/tutorial/agent.php?">Voir
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
                                     <th>Poste</th>
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
                                     <td><?php echo ($ligne['tel']); ?></td>
                                     <td><?php echo ($ligne['poste']); ?></td>
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
                 <h5 class="modal-title" id="exampleModalCenterLabel">Nouveau agant</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <form action="insertagent.php" method="POST" id="formulaire">
                     <div class="form-control-group">
                         <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom complet "> <br>

                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">Date de naisance</label>
                                 <input class="form-control" type="date" name="dna" id="dna" required>
                             </div>
                             <div class="col-md-6">
                                 <label for="">Numero de telephone</label>
                                 <input class="form-control" type="number" name="tel" id="tel" placeholder="" required>
                             </div>
                         </div> <br>
                         <div class="row">
                             <div class="col-md-12">
                                 <label for="">Poste</label>
                                 <select class="form-control" name="poste" id="poste" required>
                                     <option value="">selectionner poste</option>
                                     <option value="reception">Reception</option>
                                     <option value="caisse">Caisse</option>
                                     <option value="admin">Admin</option>
                                     <option value="journalier">Journalier</option>
                                 </select>
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




 <aside class="right-sidebar">
     <div class="sidebar-chat" data-plugin="chat-sidebar">
         <div class="sidebar-chat-info">
             <h6>Chat List</h6>
             <form class="mr-t-10">
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search for friends ...">
                     <i class="ik ik-search"></i>
                 </div>
             </form>
         </div>
         <div class="chat-list">
             <div class="list-group row">
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                     <figure class="user--online">
                         <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Gene Newman</span> <span class="username">@gene_newman</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                     <figure class="user--online">
                         <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Billy Black</span> <span class="username">@billyblack</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                     <figure class="user--online">
                         <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Herbert Diaz</span> <span class="username">@herbert</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                     <figure class="user--busy">
                         <img src="../img/users/4.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Sylvia Harvey</span> <span class="username">@sylvia</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                     <figure class="user--busy">
                         <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Marsha Hoffman</span> <span class="username">@m_hoffman</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                     <figure class="user--offline">
                         <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Mason Grant</span> <span class="username">@masongrant</span>
                     </span>
                 </a>
                 <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                     <figure class="user--offline">
                         <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                     </figure><span><span class="name">Shelly Sullivan</span> <span
                             class="username">@shelly</span></span>
                 </a>
             </div>
         </div>
     </div>
 </aside>

 <div class="chat-panel" hidden>
     <div class="card">
         <div class="card-header d-flex justify-content-between">
             <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
             <span class="user-name">John Doe</span>
             <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>
         <div class="card-body">
             <div class="widget-chat-activity flex-1">
                 <div class="messages">
                     <div class="message media reply">
                         <figure class="user--online">
                             <a href="#">
                                 <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>Epic Cheeseburgers come in all kind of styles.</p>
                         </div>
                     </div>
                     <div class="message media">
                         <figure class="user--online">
                             <a href="#">
                                 <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>Cheeseburgers make your knees weak.</p>
                         </div>
                     </div>
                     <div class="message media reply">
                         <figure class="user--offline">
                             <a href="#">
                                 <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>Cheeseburgers will never let you down.</p>
                             <p>They'll also never run around or desert you.</p>
                         </div>
                     </div>
                     <div class="message media">
                         <figure class="user--online">
                             <a href="#">
                                 <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>A great cheeseburger is a gastronomical event.</p>
                         </div>
                     </div>
                     <div class="message media reply">
                         <figure class="user--busy">
                             <a href="#">
                                 <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>There's a cheesy incarnation waiting for you no matter what you palete
                                 preferences are.
                             </p>
                         </div>
                     </div>
                     <div class="message media">
                         <figure class="user--online">
                             <a href="#">
                                 <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                             </a>
                         </figure>
                         <div class="message-body media-body">
                             <p>If you are a vegan, we are sorry for you loss.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <form action="javascript:void(0)" class="card-footer" method="post">
             <div class="d-flex justify-content-end">
                 <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                 <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
             </div>
         </form>
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