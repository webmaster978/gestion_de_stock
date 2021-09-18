<?php include 'partials/head.php'; ?>
<?php

$r = $db->query('SELECT * FROM stock');
$client = $db->query('SELECT COUNT(*) AS id FROM client');
$agent = $db->query('SELECT COUNT(*) AS id FROM agent');
?>
<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>En stock</h6>
                                <?php while ($l = $r->fetch()) { ?>
                                <h2><?php echo ($l['qte']); ?></h2>
                                <?php } ?>
                            </div>
                            <div class="icon">
                                <i class="ik ik-award"></i>
                            </div>
                        </div>
                        
                        <small class="text-small mt-10 d-block">Stock</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                            aria-valuemax="100" style="width: 62%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Clients</h6>
                                <?php while ($c = $client->fetch()) { ?>
                                <h2><?php echo ($c['id']); ?></h2>
                                <?php } ?>
                            </div>
                            <div class="icon">
                                <i class="ik ik-users"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">61% higher than last month</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                            aria-valuemax="100" style="width: 78%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Agents</h6>
                                <?php while ($age = $agent->fetch()) {  ?>
                                <h2><?php echo($age['id']); ?></h2>
                            <?php } ?>
                            </div>
                            <div class="icon">
                                <i class="ik ik-users"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Events</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0"
                            aria-valuemax="100" style="width: 31%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Comments</h6>
                                <h2>41,410</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-message-square"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Total Comments</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                            aria-valuemax="100" style="width: 20%;"></div>
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
<?php include 'partials/footer.php'; ?>