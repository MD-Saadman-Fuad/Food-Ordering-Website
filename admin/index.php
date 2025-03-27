<?php include("partials/menu.php") ?>

<!-- main start -->
<div class="main main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>

        <br><br>

        <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            categories
        </div>
        <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            categories
        </div>
        <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            categories
        </div>
        <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            categories
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!-- main ends -->


<?php include("partials/footer.php") ?>