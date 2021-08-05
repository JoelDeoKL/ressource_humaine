<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Ressource_humaine</title>

    <!-- Fontfaces CSS-->
    <link href="view/css/font-face.css" rel="stylesheet" media="all">
    <link href="view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="view/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link href="view/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="view/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="view/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="view/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="view/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                <img src="view/images/icon/logo-white.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-500">
                    <img src="view/images/icon/logo-rh.png" alt="logo_HR" />
                </div>
                <h4 class="name"><a href="#">Ressources Humaines</a> </h4>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="index.php">
                            <i class="fas fa-home"></i>Home
                        </a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>Employees
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-users"></i>Ajouter</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-file"></i>Liste Employes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-pencil-square-o"></i>Presences
                        </a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-money-bill-alt"></i>Salaires
                        </a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-list-alt"></i>Departements
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-comment-more"></i>
                                    <span class="quantity">1</span>
                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="view/images/icon/avatar-06.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="view/images/icon/avatar-04.jpg" alt="Diane Myers">
                                            </div>
                                            <div class="content">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">1</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="view/images/icon/avatar-06.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="view/images/icon/avatar-05.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="view/images/icon/avatar-04.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="view/images/icon/avatar-06.jpg" alt="Photo">
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Jeff Percy</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="view/images/icon/avatar-06.jpg" alt="Jeff Percy">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">jeff percy</a>
                                                </h5>
                                                <span class="email">jeffpercy@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Edit Employee</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Ressource Humaine</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END BREADCRUMB-->

        <!--TABLES USERS-->
        <section>
            <div class="section__content section__content--p30 top-campaign">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- USER DATA-->
                            <div class="user-data m-b-40">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-account-calendar"></i>user employees</h3>
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Products</option>
                                            <option value="">Services</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                        <select class="js-select2 au-select-dark" name="time">
                                            <option selected="selected">All Time</option>
                                            <option value="">By Month</option>
                                            <option value="">By Day</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>name</td>
                                            <td>adresse</td>
                                            <td>idEmploye</td>
                                            <td>idNat</td>
                                            <td>Rccn</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role admin">admin</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Full Control</option>
                                                        <option value="">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role user">user</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option value="">Full Control</option>
                                                        <option value="" selected="selected">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role user">user</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option value="">Full Control</option>
                                                        <option value="" selected="selected">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role member">member</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Full Control</option>
                                                        <option value="">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="user-data__footer m-menu">
                <a href="" data-toggle="modal" data-target="#add" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>Add Employe</a>
                <div class="modal" id="add" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="" method="post">
                                <div class="modal-header">
                                    <h4 class="modal-title">Formulaire d'Ajout Employee</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="genre">
                                            <option value="F">Feminin</option>
                                            <option value="M">Masculin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="adresse" placeholder="Adresse" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lieunaiss" placeholder="Lieu de naissance" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="datenaiss"  class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pere" placeholder="Nom du pere" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mere" placeholder="Nom de la mere" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="login" placeholder="Nom d'utilisateur" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pwd" placeholder="Mot de passe" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button>
                                    <button class="btn btn-primary" type="submit" name="btn_compte">Valider</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END TABLES USERS-->

        <section>
           <?php include_once ("view/inc/footer.inc")?>
        </section>
    </div>
    <!-- END PAGE CONTAINER-->

</div>

<!-- Jquery JS-->
<script src="view/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="view/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="view/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="view/vendor/slick/slick.min.js">
</script>
<script src="view/vendor/wow/wow.min.js"></script>
<script src="view/vendor/animsition/animsition.min.js"></script>
<script src="view/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="view/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="view/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="view/vendor/circle-progress/circle-progress.min.js"></script>
<script src="view/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="view/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="view/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="view/js/main.js"></script>

</body>

</html>
<!-- end document-->