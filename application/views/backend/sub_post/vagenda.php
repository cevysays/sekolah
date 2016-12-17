<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_agenda',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Tanggal','tanggal');
            ?>
        </td>
    </tr>
    <tr>
        <td>

            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'tanggal',
                'style'=>'height: 25px',
                'id'=>'datepicker'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Acara','acara');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'acara',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>

    <tr>
        <td>
            <?php

            echo form_label('Kegiatan','kegiatan');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'kegiatan',
                'style'=>'height: 25px'
            );
            echo form_input($data);
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


