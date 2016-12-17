<div class="container-fluid">
    <div class="row-fluid" style="height: 600px">
        <div class="span2">

            <ul class="nav nav-list">
                <li class="nav-header">
                    <a href="<?php echo base_url(); ?>index.php/backend/cpageadmin">Dashboard</a>
                </li>
            </ul>

            
        </div>
        <div class="span10">
            <div class="tab-content">
                <div class="tab-pane active" id="lA">

                    <ul id="tab" class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">List Posting</a>
                        </li>


                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home" class="tab-pane fade active in">

                            <div class="span8">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title Posting</th>
                                        <th>Note Posting</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $no = 1;
                                    foreach($posting_row as $row)
                                    {?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->title_posting; ?></td>


                                        <td><?php echo $row->note_posting; ?></td>
                                        <td>




                                            <i class="icon-minus-sign minus" style="cursor: pointer" ></i>

                                        </td>
                                        <td>
                                            <i class="icon-edit edit" style="cursor: pointer" ></i>
                                        </td>
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






                </div>

            </div>
        </div>
    </div>
</div>
