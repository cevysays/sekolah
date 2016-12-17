<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jstyle.js"></script>


    </head>

    <body>



    <script type="text/javascript">
        $(function(){
            $('.dropdown-toggle').dropdown();

        });
    </script>

    <div class="wrap">
        <div class="header">
            <div class="panel_header">


                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">

                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>

                            <a class="brand" href="<?php echo base_url(); ?>index.php/cpage">SMA NEGERI ABUNG TINGGI<i class="icon-leaf icon-white"></i></a>

                            <div class="nav-collapse">

                                <ul class="nav pills" style="margin-left: 233px">

                                    <li class="dropdown" id="menu">
                                        <a href="<?php echo base_url(); ?>index.php/cpage">
                                            Home
                                        </a>

                                    </li>
                                    <li class="dropdown" id="menu2">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">
                                            Profil
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=mot">Motto, Visi dan Misi</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sej">Sejarah Singkat</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sar">Sarana & Prasarana</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=org">Struktur Organisasi</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=pres">Prestasi</a></li>
                                        </ul>

                                    </li>

                                    <li class="dropdown" id="menu3">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">
                                            Guru
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirG">Direktori Guru</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sil">Silabus</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=kal">Kalender Akademik</a></li>

                                        </ul>

                                    <li class="dropdown" id="menu4">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
                                            Siswa
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirS">Direktori Siswa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=prest">Prestasi Siswa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=eks">Ektrakurikuler</a></li>

                                        </ul>


                                    </li>

                                    <li class="dropdown" id="menu5">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu5">
                                            Alumni
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirA">Direktori Alumni</a></li>

                                        </ul>

                                    </li>

                                    <li class="dropdown" id="menu6">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu6">
                                            Fitur
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=age">Agenda</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=art">Artikel</a></li>

                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=tam">Buku Tamu</a></li>

                                        </ul>

                                    </li>
                                    <li>
                                         <?php echo $this->session->userdata('username'); ?>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
                



                <div class="img_header" style="z-index: 0">

                </div>
            </div>
        </div>

