<?php echo view('header'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <!-- Sidebar content -->
                <?php echo view('sidebar'); ?>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            </div>
<main class="col-10 ms-sm-auto px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-itemscenter pt-3 pb-2">
<h1 class="h4">Daftar Data Pondok Pesantren</h1>
</div>
<?php
if(!empty($msg)){
echo $msg;
} ?>
<div class="mb-3">
 <?php echo anchor('tambahpondok', '<i class="fa-solid fa-plus"></i>', ['class' => 'btn btn-primary']); ?>
</div>
<table class="table table-hover table-striped table-bordered">
<thead class="table-primary">
<tr>
<th>No</th>
<th>Kecamatan</th>
<th>NPPS</th>
<th>Nama Pondok Pesantren</th>
<th>Alamat Pondok Pesantren</th>
<th>Koordinat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$no=1;
if(!empty($query)){
foreach ($query as $baris) {?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $baris->nama_kecamatan;?></td>
<td><?php echo $baris->npps;?></td>
<td><?php echo $baris->nama_pondok;?></td>
<td><?php echo $baris->alamat_pondok;?></td>
<td><?php echo $baris->koordinat;?></td>
<td>
<?php
echo anchor('editpondok/'.$baris->npps,'<i class="fa-solid fa-pencil"></i>',['class'=>'btn btn-success']).' '.
anchor('hapuspondok/'.$baris->npps,'<i
class="fa-solid fa-trash-can"></i>',['class'=>'btn btn-danger']);?>
</td>
</tr>
<?php
}
}else{?>
<tr>
<td class="text-center text-danger" colspan="9">
DATA TIDAK ADA
</td>
</tr>
<?php
}?>
</tbody>
</table>
</main>
<?php echo view('footer'); ?>
