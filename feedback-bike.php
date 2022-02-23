<div class="inventory-review-wrap mb-30">
                                <div class="inv-details-title">
                                    <div class="review-top-left">
                                        <h5> Users Feedback(

                                        <?php 
                                                        include('config.php');
                                                        $query = "SELECT id FROM ratting where pid='$ii' ORDER BY id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                    ?>)
                                        </h5>
                                    </div>
                                    <p class="write-review"><a href="#feedback">Write a FeedBack</a></p>
                                </div>


                                <div class="blog-comment">
                                             
                                    <ul>
                                    
                                            
                                        <li>
                                            
                                            <div class="single-comment">
                                               
                                                    <?php
                                                        
                                                        include('config.php');
                                                        $query = "SELECT * FROM ratting  where pid='$ii'";
                                                        $query_run = mysqli_query($connection, $query);
                                                        if(mysqli_num_rows($query_run) > 0)        
                                                        {
                                                            while($row = mysqli_fetch_assoc($query_run))
                                                            {
                                                            
                                                    ?>
                                                <div class="comment-text">
                                                    <div class="comment-avatar-info">
                                                        <div class="left"><br>
                                                        <?php echo $row['name'];?><br>
                                                        <h5><?php echo $row['email'];?> </h5>
                                                        <span class="comment-date"><?php echo $row['date'];?></span>
                                                            
                                                        </div>
                                                       
                                                    </div>
                                                        <div class="clearfix"></div>
                                                            <p>
                                                                <?php for($i=1;$i<=$row['ratting'];$i++){ ?>
                                                                <span class="fa fa-star checked"></span>
                                                                <?php  }?>

                                                                <?php for($j=1;$j<=5-$row['ratting'];$j++) {?>
                                                            <span class="fa fa-star "></span>
                                                                <?php  } ?>
                                                            </p>
                                                            <p class="review__description"><?php echo $row['review']; ?></p>
                                                                   

                                                        </div>
                                                    
                                                </div>
                                                <?php }}?>
                                            </div>
                                           
                                        </li>
                                       
                                    </ul>
                                    
                                </div>

                            </div>

                            <div class="inventory-review-form">
                                <div class="inv-details-title" id="feedback">
                                    <h5>Write a FeedBack</h5>
                                </div>
                                <div class="review-form-wrap">
                                    <span>Your Rating & Review</span>  
                                    <form action="ins-ratting-bike.php" class="form" method="post">
                                         <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                        <input type="hidden" name="pid" value="<?php echo $ii;?>">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <!-- <div class="form-group">
                                            <span class="form-label">Pickup Date</span>
                                            <input class="form-control" name="date" type="date" required>			
							             </div> -->
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="rating">Rating<span
                                                                        class="required">*</span></label>
                                                                        <br>
                                                                        <fieldset class="rating">
                                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                                            <label for="star5" title="Rocks!">5 stars</label>
                                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                                            <label for="star4" title="Pretty good">4 stars</label>
                                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                                            <label for="star3" title="Meh">3 stars</label>
                                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                                            <label for="star2" title="Kinda bad">2 stars</label>
                                                                            <input type="radio" id="star1" name="rating" value="1" />
                                                                            <label for="star1" title="Sucks big time">1 star</label>
                                                                     </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="review">Your Review<span
                                                                        class="required">*</span></label>
                                                                <textarea name="review" id="review"
                                                                    class="form__input form__input--textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" name="savert" value="Submit"
                                                                    class="btn btn-style-1 btn-submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>