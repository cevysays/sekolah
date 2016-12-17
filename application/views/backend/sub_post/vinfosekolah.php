<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_infosekolah',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Title Info Sekolah','title_info');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'style'=>'height: 25px',
                'name'=>'title_info'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Note','note_info');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <textarea rows="10" cols="40" style="width: 1057px" name="note_info"></textarea>
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
            echo form_submit($data);
            ?>

        </td>

    </tr>
</table>

<?php echo form_close(); ?>