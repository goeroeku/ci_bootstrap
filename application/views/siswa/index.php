<?php $this->load->view('common/header', array('menu' => 'siswa')); ?>
<div class="container">
  <div class="content">
    <h1>Ini adalah halaman Siswa</h1>
    <p class="lead">Silahkan nikmati sajian kami</p>
    <a href="<?php echo base_url('siswa/add');?>" class="btn btn-primary">Tambah Siswa</a>

    <table class="table table-bordered table-striped" style="margin-top: 20px">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($siswa as $row) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nisn; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->kelas; ?></td>
                <td>
                    <a href="<?php echo base_url('siswa/edit/').$row->id;?>">Ubah</a> | 
                    <a href="<?php echo base_url('siswa/del/').$row->id;?>">Hapus</a>
                </td>
            </tr>
        <?php
            }
         ?>
    </table>
  </div>
</div>
<?php $this->load->view('common/footer'); ?>
