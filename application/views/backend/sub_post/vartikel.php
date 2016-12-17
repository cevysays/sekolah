<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_artikel',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Title Artikel','title_artikel');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'style'=>'height: 25px',
                'name'=>'title_artikel'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Note','note_artikel');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <textarea rows="10" cols="40" style="width: 1057px" name="note_artikel"></textarea>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?php
            $data = array(
                'class'=>'btn',
                'value'=>'submit'
            );
            echo form_submit($data);
            ?>
            &nbsp;&nbsp;
            <?php
            $data = array(
                'class'=>'btn',
                'value'=>'cancel'
            );
            echo form_reset($data);
            ?>

        </td>

    </tr>
</table>

<?php echo form_close(); ?>