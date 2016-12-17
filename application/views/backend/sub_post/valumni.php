<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_alumni',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Nama','nama_alumni');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'nama_alumni',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Angkatan','angkatan');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'angkatan',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>

    <tr>
        <td>
            <?php

            echo form_label('Email','email');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'email',
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
            echo form_submit($data);
            ?>

        </td>

    </tr>
</table>

<?php echo form_close(); ?>