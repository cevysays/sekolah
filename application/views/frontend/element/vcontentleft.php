<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker();
        });
</script>
<div class="left">

    <?php $this->load->view('frontend/logreg/vlogin'); ?>

    <div id="datepicker" style="position: relative;background-color: #DEE8E7"></div>

    <div align="center">
        <a href="#">
            <img src="<?php echo base_url('img/download.png'); ?>" alt="">
        </a>

    </div>
</div>