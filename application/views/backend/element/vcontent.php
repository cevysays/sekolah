<div class="container-fluid">
    <div class="row-fluid" style="height: 600px">
        <div class="span2">

            <ul class="nav nav-list">
                <li class="nav-header">
                    Dashboard
                </li>
            </ul>

            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#lA" data-toggle="tab"><i class="icon-envelope"></i>&nbsp;Post</a>
                    </li>
                    <li class="">
                        <ul class="nav nav-pills">
                            <li class="dropdown">
                                <a class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   href="#">
                                    <i class="icon-envelope"></i>&nbsp;List Post
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=hom">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=gur">Input Guru</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=sis">Input Siswa</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=alu">Input Alumni</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=inf">Info Sekolah</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=mat">Materi Ajar</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/backend/cpageadmin_list?menu=art">Artikel</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
<!--                    <li class="">-->
<!--                        <a href="#lC" data-toggle="tab"><i class="icon-cog"></i>&nbsp;Setting</a>-->
<!--                    </li>-->
<!--                    <li class="">-->
<!--                        <a href="#lD" data-toggle="tab"><i class="icon-user"></i>&nbsp;Users</a>-->
<!--                    </li>-->
                </ul>

            </div>
        </div>
        <div class="span10">
            <div class="tab-content">
                <div class="tab-pane active" id="lA">

                    <ul id="tab" class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">Home</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#guru">Input Guru</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#siswa">Input Siswa</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#alumni">Input Alumni</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#infosekolah">Info Sekolah</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#materiajar">Materi ajar</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#artikel">Artikel</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#prestasi">prestasi</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#silabus">Silabus</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#agenda">Agenda</a>
                        </li>


                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home" class="tab-pane fade active in">

                            <?php $this->load->view('backend/sub_post/vhome'); ?>

                        </div>
                        <div id="guru" class="tab-pane fade">


                            <?php $this->load->view('backend/sub_post/vguru'); ?>


                        </div>
                        <div id="siswa" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vsiswa'); ?>

                        </div>
                        <div id="alumni" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/valumni'); ?>

                        </div>
                        <div id="infosekolah" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vinfosekolah'); ?>

                        </div>
                        <div id="materiajar" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vmateriajar'); ?>

                        </div>
                        <div id="artikel" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vartikel'); ?>

                        </div>
                        <div id="prestasi" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vprestasi'); ?>

                        </div>
                        <div id="silabus" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vsilabus'); ?>

                        </div>
                        <div id="agenda" class="tab-pane fade">

                            <?php $this->load->view('backend/sub_post/vagenda'); ?>

                        </div>
                    </div>






                </div>
                <div class="tab-pane" id="lB">



                    <form class="well">
                        as
                    </form>

                </div>
                <div class="tab-pane" id="lC">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
                <div class="tab-pane" id="lD">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
