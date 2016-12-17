<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px;word-wrap: break-word">
        <h2>Artikel</h2>


        <ol>
            <?php $n = 1;
            foreach($artikel_row as $row)
            {?>

            <li>
                <p style="font-weight: bold;">
                    <?php echo $row->title_artikel; ?>
                </p>

                <?php echo $row->note_artikel; ?>
            </li>

                <?php
                $n++;
            }
            ?>
        </ol>

    </div>
</div>
