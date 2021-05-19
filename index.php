<?php 
include('reusable-code-front/navbar-section.php'); 
define('SITEURL', 'http://localhost/bongiorno/');
?>



<!-- 
    Authors:  Ryan Paul, 
              Taruna Mangar,
              Evelina Iliescu-Nastasiu.

     Theme:   Restaurant - Online Food Ordering  

     Project: Home Page
     
     Date:    04.10.21
 -->


    <!-- Search Bar Section starts here -->
        <section class="searchBar text-center">
            <div class="container">
                  <form action="">
                      <input type="search" name="search" placeholder="Search Food..">
                      <input type="submit" name="submit" value="Search" class="button">
                  </form>
            </div>
        </section>
    <!-- Search Bar Section ends here -->


    <!-- Food Categories Section starts here -->
        <section class="food-categories">
            <div class="container">
                <br>
                <!-- <h1 class="text-center">Categories</h1>
                <br> -->


            <!-- limit      -->

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM category WHERE active='Yes' AND featured='Yes' LIMIT 6";

                //Execute the Query
                $res = mysqli_query($con, $sql);

                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-6 float-container">

                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="NewCategory" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>                


                <div class="clearfix"></div>

            </div>
        </section>
    <!-- Food Categories Section ends here -->


<!-- Food explore Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <br><br>

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM food WHERE active='Yes' AND featured='Yes' LIMIT 3";

            //Execute the Query
            $res2 = mysqli_query($con, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Food" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">$<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            
 

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <!-- <a href="#">See All Foods</a> -->
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

<!-- Company Statement?? -->

<?php include('reusable-code-front/footer-section.php'); ?>    