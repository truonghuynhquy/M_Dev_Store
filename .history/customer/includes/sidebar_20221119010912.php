<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading">
        <!-- panel-heading Begin -->

        <?php 
        
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_image = $row_customer['customer_image'];
        
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            
            echo "
            
                <center>
                
                    <img src='customer_images/$customer_image' class='img-responsive' >
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Name: $customer_name
                
                </h3>
            
            ";
            
        }
        
        ?>

        <h3 class="panel-title">Products Categories</h3>

    </div><!-- panel-heading Finish -->

    <div class="panel-body">
        <!-- panel-body Begin -->

        <ul class="nav nav-pills nav-stacked category-menu">
            <!-- nav nav-pills nav-stacked category-menu Begin -->

            <?php

            getPCats();

            ?>

        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->

    </div><!-- panel-body Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading">
        <!-- panel-heading Begin -->

        <h3 class="panel-title">Categories</h3>

    </div><!-- panel-heading Finish -->

    <div class="panel-body">
        <!-- panel-body Begin -->

        <ul class="nav nav-pills nav-stacked category-menu">
            <!-- nav nav-pills nav-stacked category-menu Begin -->

            <?php

            getCats();

            ?>

        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->

    </div><!-- panel-body Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->