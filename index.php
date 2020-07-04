<!DOCTYPE html>
<html lang="en">

    <!-- header start -->
        <?php 
            include('include/head.php');
        ?>
    <!-- ./header end -->
        
    <body>
            <!-- navberr start -->
            <?php 
            include('include/navbar.php');
            ?>
            <!-- navber end -->

            <!-- slider start -->
            <?php 
            include('include/slider.php');
            ?>
            <!-- ./slider end -->

                <div class="container-fluid">
        
                    <!-- row 2 strart -->
                    <?php 
                        include('include/services.php');
                    ?>
                    <!-- ./ row 2 end -->

                    <!--  row 3 start -->
                    <?php 
                        include('include/home_about.php');
                    ?>
                    <!-- ./row 3 end  -->
                </div>

                    <!-- row 4 start -->
                    <?php 
                        include('include/home_client.php');
                    ?>
                    <!-- ./row 4 end -->
                    

                <!--  row 5 start -->
                <div class="container-fluid pt-5 pb-5">
                
                    <?php 
                        include('include/home_mission.php');
                    ?>
            
                <div class="clearfix"></div>
                </div><!--  container-fluid end -->

                <!-- ./row 5 end  -->
            

                <?php 
                include('include/footer.php');
                ?>
                <?php 
                include('include/footer-2.php');
                ?>

        <!-- fotter scripts start -->
            <?php 
                include('include/footer_script.php');
            ?>
        <!-- fotter scripts end --> 
 </body>

 </html>