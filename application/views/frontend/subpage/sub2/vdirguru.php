<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px">
        <h2>Direktori Guru dan TU</h2>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Pilih Data&nbsp;&nbsp;</td>
                    <td>
                        <select>
                            <option value="GURU">GURU</option>
                            <option value="TU">TU</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>
                        Cari Nama&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text"/>&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="CARI" class="btn-info"/>
                    </td>
                </tr>
            </table>
        </form>


        <div class="span8">
            <table class="table table-condensed" style="width: 583px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pelajaran</th>
                    <th>Jabatan</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($guru_row as $row)
                {?>


                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->nip; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->pelajaran; ?></td>
                    <th><?php echo $row->jabatan; ?></th>
                    <th><a href=""><i class="icon-user"></i></a></th>
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
