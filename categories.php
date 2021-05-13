<?php 
include('reusable-code-front/navbar-section.php'); 
define('SITEURL', 'http://localhost/bongiorno/');
?>

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

<!-- CAtegories Section Starts Here -->
    <section class="food-categories">
        <div class="container">
            <br>
            <h2 class="text-center">Explore All Categories</h2>
            <br><br>

            <?php 

                //Display all the cateories that are active
                //Sql Query
                $sql = "SELECT * FROM category WHERE active='Yes'";

                //Execute the Query
                $res = mysqli_query($con, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether categories available or not
                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-6 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not found.</div>";
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
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->






<?php include('reusable-code-front/footer-section.php'); ?>   
