<div class="center">
    <div class="content_center"></div>
    <?php $this->load->view('frontend/slide/vslide'); ?>
    <h6 style="margin-top: 300px">ARTIKEL TERBARU</h6>
    <?php
    if(isset($posting_row)){
        foreach($posting_row as $row){
         ?>


        <h3>
            <?php echo $row->title_posting; ?>
        </h3>
        <p style="text-indent: 20px">

            <?php
            $readmore = $row->note_posting;
                $readmore = character_limiter($readmore,100);
            echo $readmore;
            ?>
        </p>
        <br/>
        <a href="<?php echo site_url('readmore/cread/selanjutnya/'.$row->id_full); ?>">baca selanjutnya</a>
        <hr/>

            <?php
        }
    }
    ?>
</div>