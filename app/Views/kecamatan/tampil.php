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
                <h1 class="h4">Data Kecamatan</h1>
            </div>

            <!-- Display message after save, update, or delete -->
            <?php if (!empty($msg)) : ?>
                <div class="alert alert-info" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <?php echo anchor('tambahkecamatan', '<i class="fa-solid fa-plus"></i>', ['class' => 'btn btn-primary']); ?>
            </div>

            <table class="table table-hover table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Kode Kecamatan</th>
                        <th>Nama Kecamatan</th>
                        <th>Jumlah Penduduk</th>
                        <th>Luas Wilayah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($query)) :
                        $no = 1;
                        foreach ($query as $baris) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $baris->kode_kecamatan; ?></td>
                                <td><?php echo $baris->nama_kecamatan; ?></td>
                                <td><?php echo number_format($baris->jumlah_penduduk, 0, ',', '.') . ' Jiwa'; ?></td>
                                <td><?php echo number_format($baris->luas_wilayah, 0, ',', '.') . ' Km<sup>2</sup>'; ?></td>
                                <td>
                                    <?php echo anchor('editkecamatan/' . $baris->kode_kecamatan, '<i class="fa-solid fa-pencil"></i>', ['class' => 'btn btn-success']) . ' ' .
                                        anchor('hapuskecamatan/' . $baris->kode_kecamatan, '<i class="fa-solid fa-trash-can"></i>', ['class' => 'btn btn-danger']); ?>
                                </td>
                            </tr>
                        <?php endforeach;
                    else : ?>
                        <tr>
                            <td class="text-center text-danger" colspan="6">
                                DATA TIDAK ADA
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>
</div>

<?php echo view('footer'); ?>
