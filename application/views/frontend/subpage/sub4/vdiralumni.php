<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 600px">
        <h2>Direktori Alumni</h2>
        <p>Data Alumni ini yang telah menjadi member dan bergabung di sistem komunitas sekolah</p>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Pilih Angkatan/Lulus :&nbsp;&nbsp;</td>
                    <td>
                        <select>
                        <option selected="" value=""></option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1983">1983</option>
                        <option value="1990">1990</option>
                        <option value="1993">1993</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2001">2001</option>
                        <option value="2003">2003</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>

                    <td>
                        <input type="submit" value="PILIH" class="btn-info"/>
                    </td>
                </tr>
            </table>
        </form>


        <div class="span8">
            <table class="table table-condensed" style="width: 583px">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($alumni_row as $row)
                {?>

                <tr>
                    <td><a href=""><i class="icon-file"></i><?php echo $row->nama_alumni; ?></a></td>
                    <td><?php echo $row->angkatan; ?></td>
                    <td><?php echo $row->email; ?></td>

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
