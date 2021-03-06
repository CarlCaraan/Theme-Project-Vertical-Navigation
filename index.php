<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php' ?>
    <title>Responsive Vertical Navigation</title>
</head>
<body id="index_body">

<!-- Start Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">

    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img loading="lazy" src="https://source.unsplash.com/100x100/?people" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">User</h4>
                <p class="font-weight-normal text-muted mb-0">Web developer</p>
            </div>
        </div>
    </div>

    <!-- Dashboard -->
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> home
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> about
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i> services
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> Gallery
            </a>
        </li>
    </ul>

    <!-- Charts -->
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i> area charts
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i> bar charts
            </a>
        </li>

        <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i> pie charts
                </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i> line charts
            </a>
        </li>
    </ul>

</div>
<!-- End Vertical navbar -->


<!-- Page Content holder -->
<div class="page-content p-5" id="content">

    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i>
        <small class="text-uppercase font-weight-bold">Toggle</small>
    </button>

    <h2 class="display-4">Bootstrap vertical nav</h2>
    <p class="lead mb-0">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p>

    <div class="separator"></div>

    <div class="row">

    <div class="col-lg-7">
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor.
        </p>
    </div> <!-- End Col -->

    <div class="col-lg-5">
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor.
        </p>

        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor.
        </p>
    </div> <!-- End Col -->

    </div> <!-- End Row -->

</div>
<!-- End Content -->


<?php include 'includes/scripts.php' ?>

</body>
</html>
