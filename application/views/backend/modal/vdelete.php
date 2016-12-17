<div id="myModal" class="modal hide fade in">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">X</a>
        <h3>Modal Heading</h3>
    </div>
    <div>
        <?php echo form_open(); ?>
            <table>
                <tr>
                    <td>
                        <?php
                        $data = array(
                            'value'=>'YES',
                            'class'=>'btn'
                        );
                        echo form_submit($data);
                        ?>
                    </td>
                    <td>
<!--                        <a href="#" class="btn" data-dismiss="modal"><button>Close</button></a>-->

                        <?php
                        $data = array(
                            'value'=>'YES',
                            'class'=>'btn'
                        );
                        echo form_submit($data);
                        ?>

                    </td>
                </tr>
            </table>
        <?php echo form_close(); ?>
    </div>
</div>

