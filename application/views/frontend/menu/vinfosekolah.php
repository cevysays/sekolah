
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>info sekolah</h2>
        <?php
        if(isset($infosekolah_row)){
            foreach($infosekolah_row as $row){

               ?>

        <ul>

            <li><a href="<?php echo site_url('readmore/cread_info/selanjutnya/'.$row->id_info); ?>"><?php echo $row->title_info ?></a></li>
            
        </ul>


                <?php
            }
        }

        ?>

    </div>


</div>