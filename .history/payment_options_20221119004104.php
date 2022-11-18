<div class="box">
    <!-- box Begin -->

    <?php

    $session_email = $_SESSION['customer_email'];

    $select_customer = "select * from customers where customer_email='$session_email'";

    ?>

    <h1 class="text-center">Payment Options For You</h1>

    <p class="lead text-center">
        <!-- lead text-center Begin -->

        <a class="" href="#"> Offline Payment </a>

    </p><!-- lead text-center Finish -->

    <center>
        <!-- center Begin -->

        <p class="lead">
            <!-- lead Begin -->

            <a href="#">

                Paypall Payment

                <img class="img-responsive" src="images/paypall_img.png" alt="img-paypall">

            </a>

        </p> <!-- lead Finish -->

    </center><!-- center Finish -->

</div><!-- box Finish -->