<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px">
        <h2>Direktori Siswa</h2>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Jurusan/Program&nbsp;&nbsp;</td>
                    <td>
                        <select style="width: 100px">
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="BAHASA">BAHASA</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="PILIH" class="btn-info"/>&nbsp;&nbsp;
                    </td>
                    <td>
                        Cari Siswa&nbsp;&nbsp;
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
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($siswa_row as $row)
                { ?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->nis; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->kelas; ?></td>
                    <td><a href=""><i class="icon-user"></i></a></td>
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
