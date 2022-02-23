<div class="col-xl-12 col-lg-5 col-md-9">
                            <aside class="inventory-sidebar">
                                <div class="widget inventory-widget">
                                  
                                    <div class="widget inventory-widget bg-secondary">
                                      <div class="inv-widget-title mb-25">
                                        <h5 class="title text-white">CATEGORY </h5>
                                    </div>
                                    <form action="#" class="sidebar-find-bike">
                                        <div class="form-grp search-box">
                                            <li class=""><a href="yamaha.php"class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">YAMAHA</a></li>
                                            
                                        </div>
                                        <div class="form-grp">
                                            <li class=""><a href="fzs.php" class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">FZS</a></li>
                                        </div>
                                        <div class="form-grp">
                                         <li class=""><a href="pulsar.php" class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">PULSAR </a></li>
                                        </div>
                                        <div class="form-grp">
                                         <li class=""><a href="duke.php" class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">DUKE </a></li>
                                        </div>
                                        <div class="form-grp">
                                         <li class=""><a href="honda.php" class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">HONDA </a></li>
                                        </div>
                                        <div class="form-grp">
                                         <li class=""><a href="royalenfield.php" class="list-group-item list-group-item-action list-group-item-dark text-dark" href="services.php">ROYAL ENFIELD</a></li>
                                        </div>
                                        <!-- <div class="form-grp">
                                            <i class="flaticon-bike-4"></i>
                                            <select name="name" class="selected">
                                                <option value="">Car Type</option>
                                                <option value="">Jaguer M1 Hybrid</option>
                                                <option value="">Audi New Bom 800</option>
                                                <option value="">Audi A8 Hybrid</option>
                                                <option value="">Toyota T86LM</option>
                                            </select>
                                        </div>
                                        <div class="form-grp">
                                            <i class="fas fa-dollar-sign"></i>
                                            <select name="name" class="selected">
                                                <option value="">Price</option>
                                                <option value="">$10000 - $15000</option>
                                                <option value="">$15000 - $25000</option>
                                                <option value="">$25000 - $35000</option>
                                                <option value="">$35000 - $55000</option>
                                                <option value="">$55000 - $100000</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="form-grp">
                                            <i class="flaticon-speedometer"></i>
                                            <select name="name" class="selected">
                                                <option value="">Transmission :</option>
                                                <option value="">Manual Transmission</option>
                                                <option value="">Gear Transmission</option>
                                            </select>
                                        </div> -->
                                        <!-- <button class="btn">Find New Vehicles</button> -->
                                    </form>
                                </div>
                                </div>
                                
                            </aside>
                        </div>
                               <div class="widget inventory-widget">
                                    <div class="inv-widget-title mb-25">
                                        <h5 class="title">Featured Vehicles</h5>
                                    </div>
                                   
                                    <div class="sidebar-fv-active">
                                       <?php
                                          include('config.php');
                                          $query = "SELECT * FROM bike_list order by rand() LIMIT 1";
                                          $query_run = mysqli_query($connection, $query);
                                          if(mysqli_num_rows($query_run) > 0)        
                                          {
                                             while($row = mysqli_fetch_assoc($query_run))
                                             {
                                                   $i=$row['bike_id'];
                                          ?>
                                        <div class="sidebar-fv-item" data-background="">
                                             <img src="<?php echo 'img/bike/'.$row['image'];?>"">
                                            <div class="fv-top-tag">
                                                <ul class="mt-3 mb-3">
                                                    <li> <a href="rent-bike.php?itemno=<?php echo $row['bike_id']; ?>">Rent Now</a></li>
                                                    <li> <a class="new" href="mybiket-bike.php?itemno=<?php echo $row['bike_id']; ?>">Add To Cart</a></li>
                                                </ul>
                                            </div>
                                            <div class="sidebar-fv-content">
                                                <h5><?php echo $row['price'];?><span>/mo</span></h5>
                                                <p><a href="inventory-details-bikes.php?itemno=<?php echo $row['bike_id']; ?>"><?php echo $row['name'];?></a></p>
                                            </div>
                                        </div>
                                        
                                        <?php }}?>
                                    </div>
                                    <div class="sidebar-fv-active mt-5">
                                       <?php
                                          include('config.php');
                                          $query = "SELECT * FROM bike_list order by rand() LIMIT 1";
                                          $query_run = mysqli_query($connection, $query);
                                          if(mysqli_num_rows($query_run) > 0)        
                                          {
                                             while($row = mysqli_fetch_assoc($query_run))
                                             {
                                                   $i=$row['bike_id'];
                                          ?>
                                        <div class="sidebar-fv-item" data-background="">
                                             <img src="<?php echo 'img/bike/'.$row['image'];?>"">
                                            <div class="fv-top-tag">
                                                <ul class="mt-3 mb-3">
                                                    <li> <a href="rent-bike.php?itemno=<?php echo $row['bike_id']; ?>">Rent Now</a></li>
                                                    <li> <a class="new" href="mycart-bike.php?itemno=<?php echo $row['bike_id']; ?>">Add To Cart</a></li>
                                                </ul>
                                            </div>
                                            <div class="sidebar-fv-content">
                                                <h5><?php echo $row['price'];?><span>/mo</span></h5>
                                                <p><a href="inventory-details-bikes.php?itemno=<?php echo $row['bike_id']; ?>"><?php echo $row['name'];?></a></p>
                                            </div>
                                        </div>
                                        
                                        <?php }}?>
                                    </div>
                                </div>
                                