<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px">
        <h2>Registrasi</h2>

        <?php
        $data = array(
            'id'=>'register'
        );
        echo form_open(base_url().'index.php/cregister/register',$data);
        ?>

        <table>
            <tr>
                <td>
                    <?php echo form_label('Nama Depan','firstname'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'firstname'
                    );
                    echo form_input($data);
                    ?>
                </td>
                <td>

                    <?php echo form_error('firstname'); ?>


                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Nama Belakang','lastname'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'lastname'
                    );
                    echo form_input($data);
                    ?>
                </td>
                <td>
                     <?php echo form_error('lastname'); ?>

                </td>

            </tr>
            <tr>
                <td>
                    <?php echo form_label('Username','username'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'username'
                    );
                    echo form_input($data);
                    ?>
                </td>
                <td>
                    <?php echo form_error('username'); ?>

                </td>

            </tr>
            <tr>
                <td>
                    <?php echo form_label('Password','password'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'password'
                    );
                    echo form_password($data);
                    ?>
                </td>
                <td>
                     <?php echo form_error('password'); ?>

                </td>

            </tr>
            <tr>
                <td>
                    <?php echo form_label('Konfirmasi Password','passconf'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'passconf'
                    );
                    echo form_password($data);
                    ?>
                </td>
                <td>
                     <?php echo form_error('passconf'); ?>

                </td>

            </tr>
            <tr>
                <td>
                    <?php echo form_label('Email','email'); ?>
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                    $data = array(
                        'name'=>'email'
                    );
                    echo form_input($data);
                    ?>
                </td>
                <td>

                        <?php

                        echo form_error('email');
                        ?>

                </td>

            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?php
                    $data = array(
                        'value'=>'submit',
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
