<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_silabus',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Note Silabus','note_silabus');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'note_silabus',

                'style'=>'width: 925px',
                'rows'=>'10'
            );
            echo form_textarea($data);
            ?>
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