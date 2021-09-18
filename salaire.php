 <?php include 'partials/head.php'; ?>
 <?php include 'traitement/connexion.php';
    include 'traitement/insertagent.php';
    $req = $db->query('SELECT * FROM payement');
    ?>
 <div class="main-content">
     <div class="container-fluid">
         <div class="page-header">
             <div class="row align-items-end">
                 <div class="col-lg-8">
                     <div class="page-header-title">
                         <i class="ik ik-inbox bg-blue"></i>
                         <div class="d-inline">
                             <button type="button" class="btn btn-success" data-toggle="modal"
                                 data-target="#exampleModalCenter">NOUVEAU SALAIRE</button>


                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <nav class="breadcrumb-container" aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item">
                                 <a href="../index.html"><i class="ik ik-home"></i></a>
                             </li>
                             <li class="breadcrumb-item">
                                 <a href="#">Tables</a>
                             </li>
                             <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>


         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header row">
                         <div class="col col-sm-3">
                             <div class="card-options d-inline-block">
                                 <a href="#"><i class="ik ik-inbox"></i></a>
                                 <a href="#"><i class="ik ik-plus"></i></a>
                                 <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                 <div class="dropdown d-inline-block">
                                     <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                             class="ik ik-more-horizontal"></i></a>
                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                         <a class="dropdown-item" href="#">Action</a>
                                         <a class="dropdown-item" href="#">More Action</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col col-sm-6">
                             <div class="card-search with-adv-search dropdown">
                                 <form action="">
                                     <input type="text" class="form-control global_filter" id="global_filter"
                                         placeholder="Search.." required>
                                     <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                     <button type="button" id="adv_wrap_toggler"
                                         class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                     <div class="adv-search-wrap dropdown-menu dropdown-menu-right"
                                         aria-labelledby="adv_wrap_toggler">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col0_filter" placeholder="Name" data-column="0">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col1_filter" placeholder="Position" data-column="1">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col2_filter" placeholder="Office" data-column="2">
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col3_filter" placeholder="Age" data-column="3">
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col4_filter" placeholder="Start date" data-column="4">
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <input type="text" class="form-control column_filter"
                                                         id="col5_filter" placeholder="Salary" data-column="5">
                                                 </div>
                                             </div>
                                         </div>
                                         <button class="btn btn-theme">Search</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <div class="col col-sm-3">
                             <div class="card-options text-right">
                                 <span class="mr-5" id="top">1 - 50 of 2,500</span>
                                 <a href="#"><i class="ik ik-chevron-left"></i></a>
                                 <a href="#"><i class="ik ik-chevron-right"></i></a>
                             </div>
                         </div>
                     </div>
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
                                     <th>Id</th>
                                     <th>Nom complet</th>
                                     <th>Montant salaire</th>
                                     <th>Date</th>
                                     
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
                                     <td><?php echo ($ligne['id']); ?></td>
                                     <td><?php echo ($ligne['nom']); ?></td>
                                     <td><?php echo ($ligne['salaire']) . ($ligne['devise']); ?></td>
                                     <td><?php echo ($ligne['created_at']); ?></td>
                                     
                                     <td><button class='btn btn-primary'>Modofier</button>
                                         <button class='btn btn-danger'>Supprimer</button>
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
                 <h5 class="modal-title" id="exampleModalCenterLabel">Nouveau Salaire</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <form action="traitement/insertsalaire.php" method="POST" id="formulaire">
                     <div class="form-control-group">
                        
                  
                         <div class="row">

                             <div class="col-md-6">
                                 <label for="">Nom de l'agent</label>
                                 
                                 <select class="form-control" name="nom">
                                     <?php 
                                     $sql = $db->query("SELECT nom FROM agent ORDER BY nom ASC ");
                                     while ($agent = $sql->fetch()) { ?>
                                        <option value="<?php echo $agent['nom'] ?>">
                                            <?php echo $agent ['nom'] ?>
                                        </option>
                                    
                                     <?php 
                                      }

                                      ?>
                                 </select>

                             </div>
                              
                             <div class="col-md-4">
                                 <label for="">Montant</label>
                                 <input class="form-control" type="number" name="salaire" id="tel" placeholder="" required>
                             </div>
                             <div class="col-md-2">
                                 <label for="">Devise</label>
                                 <select class="form-control" required="" name="devise">
                                    <option value=""></option>
                                     <option value="FC">FC</option>
                                     <option value="USD">USD</option>
                                 </select>
                             </div>
                         </div> <br>
                         


                     </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                 <input class="btn btn-primary" type="submit" name="ajouter" value="Payer">

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
         <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 Jus || Royal v1.0. All Rights
             Reserved.</span>

     </div>
 </footer>
 </div>
 </div>


 <?php include 'partials/footer.php'; ?>