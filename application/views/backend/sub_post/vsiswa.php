<?php
$data = array(
    'class'=>'well'
);
echo form_open(base_url().'index.php/backend/cpageadmin/create_siswa',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('NIS','nis');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'nis',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Nama','nama');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'name'=>'nama',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Kelas','kelas');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                '---'=>'---',
                'X'=>'X',
                'XI IA 1' => 'XI IA 1',
                'XI IA 2' => 'XI IA 2',
                'XI IA 3' => 'XI IA 3',
                'XI IS 1' => 'XI IS 1',
                'XI IS 2' => 'XI IS 2',
                'XI IS 3' => 'XI IS 3',
                'XI Bahasa 1' => 'XI Bahasa 1',
                'XI Bahasa 2' => 'XI Bahasa 2',
                'XII IA 1' => 'XII IA 1',
                'XII IA 2' => 'XII IA 2',
                'XII IA 3' => 'XII IA 3',
                'XII IS 1' => 'XII IS 1',
                'XII IS 2' => 'XII IS 2',
                'XII IS 3' => 'XII IS 3',
                'XII Bahasa 1' => 'XII Bahasa 1',
                'XII Bahasa 2' => 'XII Bahasa 2',

            );
            echo form_dropdown('kelas',$data,'---');
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