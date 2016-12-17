<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px;word-wrap: break-word">
        <form action="<?php echo site_url(); ?>/subpage/csub/guest_book" method="post">


        <fieldset>
            <legend>Buku Tamu</legend>
            <div class="control-group">
                <label class="control-label" for="input01">Nama</label>
                <div class="controls">
                    <input name="nama" type="text" class="input-xlarge" id="input01"/>
                     &nbsp;&nbsp; <?php echo form_error('nama'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">Email</label>
                <div class="controls">
                    <input name="email" type="text" class="input-xlarge" id="input01"/>
                    &nbsp;&nbsp; <?php echo form_error('email'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">Alamat</label>
                <div class="controls">
                    <input name="alamat" type="text" class="input-xlarge" id="input01"/>
                    &nbsp;&nbsp; <?php echo form_error('alamat'); ?>
                </div>
            </div>



            <div class="control-group">
                <label class="control-label" for="textarea">Textarea</label>
                <div class="controls">
                    <textarea name="note" class="input-xlarge" id="textarea" rows="3"></textarea>
                    &nbsp;&nbsp; <?php echo form_error('note'); ?>
                </div>

            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
            </div>

        </fieldset>

        </form>

        <div>
            <?php
            if(isset($guest)){
                foreach($guest as $row){
                    ?>
                    <ul style="list-style: none">
                        <li>
                            <h6><?php echo $row->nama;?></h6>
                            <p><?php echo $row->note;?></p>
                        </li>



                    </ul>


                    <?php
                }
            }
            ?>
        </div>
    </div>

    <div>

    </div>
</div>



