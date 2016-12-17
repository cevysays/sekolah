<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px;word-wrap: break-word">
        <h2>Agenda</h2>

        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Pilih Bulan&nbsp;&nbsp;</td>
                    <td>
                        <select>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option selected="" value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>Tahun&nbsp;&nbsp;</td>
                    <td>
                        <select>
                            <option value="2009">2009</option>
                            <option selected="" value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                        </select>
                    </td>

                </tr>
            </table>
        </form>


        <div class="span8">
            <table class="table table-condensed" style="width: 583px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Acara</th>
                    <th>Kegiatan</th>
                </tr>
                </thead>
                <tbody>

                <?php $no=1;
                foreach($agenda_row as $row)
                {?>
                <tr>

                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->tanggal; ?></td>
                    <td><?php echo $row->acara; ?></td>
                    <td><?php echo $row->kegiatan; ?></td>

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
