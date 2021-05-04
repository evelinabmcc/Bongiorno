<!-- 
    Authors: Ryan Paul, 
             Taruna Mangar,
             Evelina Iliescu-Nastasiu.

     Theme:  Restaurant Online Food Ordering  

     Project: Admin Panel: 'index.php'
     
     Date: 04.10.21
-->

<?php include('reusable-code-admin/navbar-section.php'); ?>


        <!-- Dashboard Section starts here -->
        <section class="main-content">
            <div class="wrapper">
                 <h3>DASHBOARD:</h3>

                  <h1>Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>
                 

                 <div class="box-4 text-center">
                     <h2>5</h2>
                     Categories
                 </div>
                <br>

                 <div class="box-4 text-center">
                     <h2>5</h2>
                     Categories
                 </div>
                <br>

                 <div class="box-4 text-center">
                     <h2>5</h2>
                     Categories
                 </div>
                <br>

                 <div class="box-4 text-center">
                     <h2>5</h2>
                     Categories
                 </div>
                
                 <div class="clearfix"></div>

            </div>
        </section>
        <!-- Dashboard Section ends here -->


        <?php include('reusable-code/footer-section.php'); ?>