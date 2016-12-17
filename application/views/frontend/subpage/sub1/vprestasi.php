<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px">
        <h2>PRESTASI SISWA SMA N ABUNG TINGGI</h2>

        <table class="table table-condensed">
            <thead>
            <tr>
                <th>No</th>
                <th class="yellow">jenis</th>
                <th class="blue">Tingkat</th>
                <th class="green">Pelaksana</th>

            </tr>
            </thead>
            <tbody>
            <?php $no=1;
            foreach($prestasi_row as $row)
            {?>

            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->jenis; ?></td>
                <td><?php echo $row->tingkat; ?></td>
                <td><?php echo $row->pelaksana; ?></td>
            </tr>
                <?php
                $no++;
            }
            ?>

            </tbody>
        </table>



    </div>
</div>
