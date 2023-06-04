<?php require "include/database.php"; ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yönetici Paneli</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/skin-green.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="yonetici.php" class="logo">
            <span class="logo-mini"><b>Y</b>P</span>
            <span class="logo-lg"><b>Yönetici</b> Paneli</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fa fa-bars"></i>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">4 adet mesajınız bulunuyor</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="assets/img/kullanıcı-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Destek Ekibi
                                                <small><i class="fa fa-clock-o"></i> 5 dakika önce</small>
                                            </h4>
                                            <p>Berk Bayraktargil</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="assets/img/user3-128x128.jpg" class="img-circle" alt="Fotograf">
                                            </div>
                                            <h4>
                                                Muhittin Darı
                                                <small><i class="fa fa-clock-o"></i> 2 saat</small>
                                            </h4>
                                            <p>Veri tabanı hakkında sıkıntım var.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="Fotograf">
                                            </div>
                                            <h4>
                                                İlke Cem Eligül
                                                <small><i class="fa fa-clock-o"></i> Bugün</small>
                                            </h4>
                                            <p>Yönetici Panelini düzgün kullanamıyorum.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="Fotograf">
                                            </div>
                                            <h4>
                                                Barış Kurt
                                                <small><i class="fa fa-clock-o"></i> Dün</small>
                                            </h4>
                                            <p>Makale eklemek istiyorum karakter yetmiyor.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="Fotograf">
                                            </div>
                                            <h4>
                                                Ogün Girgin
                                                <small><i class="fa fa-clock-o"></i> 2 gün</small>
                                            </h4>
                                            <p>Header bölümünde sıkıntı var.</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">Tüm mesajları gör</a></li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">10 bildirim var</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 yeni üye bugün katıldı.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i>Kontrol gerektiren olaylar.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 7 yeni üye bugün katıldı.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 adet satıldı.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> İsim değişikliği.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">Hepisini gör</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">9 göreviniz var</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <h3>
                                                Bazı düğmeler tasarlanacak
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Tamamlandı</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>
                                                Yeni sayfa oluşturulacak
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Tamamlandı</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>
                                                Yapılması gereken bazı geliştirmeler
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Tamamlandı</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>
                                                Güzel geçişler yapılacak
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Tamamlandı</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">Tüm görevleri göster</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/img/kullanıcı-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Berk Bayraktargil</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="assets/img/kullanıcı-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Berk Bayraktargil - Web Developer
                                    <small>2017 tarihinden beri</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Takipçiler</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Satışlar</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Arkadaşlar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Çıkış</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/img/kullanıcı-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Berk Bayraktargil</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">


                <li class="header">Menüler</li>
                <li class="active">
                     <a href="yonetici.php">
                        <i class="fa fa-th"></i> <span>Yönetici Sayfası</span>
					           </a>
                </li>
				        <li>
                     <a href="anasayfa.php">
                        <i class="fa fa-th"></i> <span>Anasayfa</span>
				 	           </a>
                </li>
                <li>
                     <a href="calismalarim.php">
                        <i class="fa fa-th"></i> <span>Çalışmalarım</span>
					           </a>
                </li>
			      </ul>
        </section>
    </aside>

<div class="content-wrapper">
