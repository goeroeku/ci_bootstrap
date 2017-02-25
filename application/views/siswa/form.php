<?php $this->load->view('common/header', array('menu' => 'siswa')); ?>
<?php 
  $id = ""; $nisn = ""; $nama = ""; $kelas = "";
  if(isset($siswa)){
  foreach ($siswa as $row) {
    $id = $row->id;
    $nisn = $row->nisn;
    $nama = $row->nama;
    $kelas = $row->kelas;
  }
  }
 ?>
<div class="container">
  <div class="content">
    <h1>Input Data Siswa</h1>
    <p class="lead">Silakan masukkan data siswa..</p>
    <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/save');?>">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">NISN:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="NISN" aria-describedby="basic-addon1" name="nisn" value="<?php echo $nisn; ?>">
            <input type="hidden" name="old_id" value="<?php echo $id; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nama:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama" aria-describedby="basic-addon1" name="nama" value="<?php echo $nama; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Kelas:</label>
          <div class="col-sm-10">
           <select class="form-control" name="kelas">
               <option value="">-- Silakan Pilih --</option>
               <option value="RPL 1" <?php echo ($kelas == 'RPL 1')? "selected" : "" ?>>RPL 1</option>
               <option value="RPL 2" <?php echo ($kelas == 'RPL 2')? "selected" : "" ?>>RPL 2</option>
               <option value="RPL 3" <?php echo ($kelas == 'RPL 3')? "selected" : "" ?>>RPL 3</option>
           </select>
          </div>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Simpan" name="kirim">
        </div>
    </form>
  </div>
</div>
<?php $this->load->view('common/footer'); ?>
