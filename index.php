<!DOCTYPE html>
<html lang="en">

<head>
    <!--------------------------------------------------------------------------------------------------------->
    <!-- Load library head -->
    <?php include 'module/lib-head.php'; ?>
    <!-- End Load library head -->
    <!--------------------------------------------------------------------------------------------------------->
</head>
<body>
<div id="wrapper">
    <!-- cek session -->
    <?php include 'module/cekSession.php'; ?>

    <!--------------------------------------------------------------------------------------------------------->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">APLIKASI MINI MARKET</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href='' id="act-logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- End Navigation -->
        <!--------------------------------------------------------------------------------------------------------->

        <!--------------------------------------------------------------------------------------------------------->
        <!-- Left Menu -->
        <?php include 'module/menu.php'; ?>
        <!-- End Left Menu -->
        <!--------------------------------------------------------------------------------------------------------->

    </nav>
    <!-- /.navbar-fixed-top -->

    <!--------------------------------------------------------------------------------------------------------->
    <!-- Content -->
    <?php include 'module/content.php'; ?>
    <!-- End Content -->
    <!--------------------------------------------------------------------------------------------------------->

    <!--------------------------------------------------------------------------------------------------------->
    <!-- Footer -->
    <?php include 'module/footer.php'; ?>
    <!-- End Footer -->
    <!--------------------------------------------------------------------------------------------------------->

</div>
<!-- /.#wrapper -->

<!--------------------------------------------------------------------------------------------------------->
<!-- Load library foot -->
<?php include 'module/lib-foot.php'; ?>
<!-- End Load library foot -->
<!--------------------------------------------------------------------------------------------------------->

</body>
</html>