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
<h1 class="h4">Edit Data Pondok Pesantren</h1>
</div>
<?php echo form_open('updatepondok') ?>
<div class="row">
<div class="col-4">
<div class="mb-3">
<label class="form-label">Kecamatan</label>
<?php
echo form_hidden('id',$id);
echo form_dropdown('kode_kecamatan',$kecamatanOptions,$query->kode_kecamatan,'class="form-control"');
?>
</div>
<div class="mb-3">
<label class="form-label">NSPP</label>
<?php
$npps = [
'name'=>'npps',
'type'=>'number',
'class'=>'form-control',
'autocomplete'=>'off',
'placeholder'=>'Masukkan NPPS pondok',
'required'=>'required',
'value'=>$query->npps
];
echo form_input($npps);
?>
</div>
<div class="mb-3">
<label class="form-label">Nama Pondok Pesantren</label>
<?php
$nama_pondok = [
'name'=>'nama_pondok',
'class'=>'form-control',
'autocomplete'=>'off',
'placeholder'=>'Masukkan Nama pondok',
'required'=>'required',
'value'=>$query->nama_pondok
];
echo form_input($nama_pondok);
?>
</div>
<div class="mb-3">
<label class="form-label">Alamat Pondok Pesantren</label>
<?php
$alamat_pondok = [
'name'=>'alamat_pondok',
'class'=>'form-control',
'autocomplete'=>'off',
'placeholder'=>'Masukkan Alamat pondok',
'required'=>'required',
'value'=>$query->alamat_pondok
];
echo form_input($alamat_pondok);
?>
</div>
<div class="mb-3">
<label class="form-label">Koordinat pondok</label>
<?php
$koordinat = [
'name'=>'koordinat',
'class'=>'form-control',
'autocomplete'=>'off',
'placeholder'=>'Contoh : -7.5134,109.0702',
'required'=>'required',
'value'=>$query->koordinat
];
echo form_input($koordinat);
?>
</div>
<div>
<?php
$simpan = [
'type'=>'submit',
'content'=>'Simpan',
'class'=>'btn btn-primary'
];
echo form_button($simpan);
echo anchor('pondok','Batal',['class'=>'btn btn-danger']);
?>
</div>
</div>
</div>
<?php echo form_close(); ?>
</main>
<?php echo view('footer'); ?>
