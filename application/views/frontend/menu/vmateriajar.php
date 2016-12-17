
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>materi ajar</h2>

        <ul>

        <?php
        if(isset($materiajar_row)){
        foreach ($materiajar_row as $row) {
            ?>

            <li><a href="<?php echo site_url('readmore/cread_materi/selanjutnya/'.$row->id_materi); ?>"><?php echo $row->title_materiajar;?></a></li>
            
            <?php
        }
        }
            ?>
        </ul>

    </div>
</div>