<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px">
        <h2>Silabus</h2>

        <table>
            <tr>
                <td>
                    Semester&nbsp;&nbsp;
                </td>
                <td>
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
            </tr>
        </table>

        <div class="span8">


            <table class="table table-condensed" style="width: 583px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Silabus</th>

                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($silabus_row as $row)
                {?>


                <tr>
                    <td style="width: 15px"><?php echo $no; ?></td>
                    <td><?php echo $row->note_silabus; ?></td>

                </tr>

                    <?php
                    $no++;
                }
                ?>

                </tbody>
            </table>

        </div>

    </div>
</div>
