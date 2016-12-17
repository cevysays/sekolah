<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>pencarian</h2>
        <div style="height: 40px">
            <?php echo form_open(base_url().'index.php/subpage/csub?menu=err'); ?>
            <table>
                <tr>
                    <td>
                        <?php
                        $data = array(
                            'class'=>'input_menu'
                        );
                        echo form_input($data);
                        ?>
                    </td>
                    <td>
                        &nbsp;
                        <?php
                        $data = array(
                            'value'=>'Cari',
                            'class'=>'btn-primary'
                        );
                        echo form_submit($data);
                        ?>
                    </td>
                </tr>
            </table>

            <?php echo form_close(); ?>
            
        </div>

    </div>
</div>