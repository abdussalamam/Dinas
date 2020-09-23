<!DOCTYPE html>
<html>
<head>
    <title>Import Excel CodeIgniter</title>
   <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap-extend.min.css') ?>">
</head>
<body>

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 offset-2">
            <?php echo $this->session->flashdata('notif') ?>
            <div class="alert alert-warning"><h4><b>Important!</b></h4> format tanggal pada excel harus "yyyy/mm/dd"</div>
            <form method="POST" action="<?php echo base_url() ?>admin/upload" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
                <input type="file" name="userfile" class="form-control">
              </div>

              <button type="submit" class="btn btn-success">UPLOAD</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>