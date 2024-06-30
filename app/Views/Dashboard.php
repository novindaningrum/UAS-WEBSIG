<?php echo view('header'); // memanggil file view header.php ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <!-- Sidebar content -->
                <?php echo view('sidebar'); // memanggil file view sidebar.php ?>
            </div>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Top row for Dashboard and Index -->
            <div class="row mb-3">
                <div class="col">
                    <h1 class="h4">Dashboard</h1>
                </div>
                <div class="col">
                </div>
            </div>
    <div class="row p-0">
        <div class="col-9 d-flex">
            <div id="map" class="flex-grow" style="width: 1000px; height: 500px;"></div>
            <!-- file json poligon kecamatan -->
            <script type="text/javascript" src="<?php echo 'public/uploads/' . $kabupaten->kode_kabupaten . '.json'; ?>"></script>
            <script>
                function getData(kode_kecamatan) {
                    $.ajax({
                        url: '<?php echo site_url('getdata'); ?>',
                        type: 'GET',
                        data: {kode_kecamatan: kode_kecamatan},
                        success: function (response) {
                            var obj = JSON.stringify(response);
                            var res = JSON.parse(obj);
                            $('#tableBody').html(res.hasil);
                        }
                    });
                }

                // koordinat kabupaten
                var coordinate = [<?php echo $kabupaten->koordinat; ?>];
                var zoomLevel = 10;
                var map = new L.map('map').setView(coordinate, zoomLevel);
                var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                function onEachFeature(feature, layer) {
                    layer.on('click', function (e) {
                        let kode = '<tr><td width="45%">Kode</td><td>:</td><td>' + e.target.feature.properties.Code + '</td></tr>';
                        let nama = '<tr><td width="45%">Kecamatan</td><td>:</td><td>' + e.target.feature.properties.Name + '</td></tr>';
                        $('#tableBody').html(kode + nama);
                        let kode_kecamatan = e.target.feature.properties.Code;
                        getData(kode_kecamatan);
                    });

                    var label = L.marker(layer.getBounds().getCenter(), {
                        icon: L.divIcon({
                            className: 'text-danger fw-bold',
                            html: feature.properties.Name,
                            iconSize: [100, 40]
                        })
                    }).addTo(map);
                }

                function style(feature) {
                    return {
                        fillColor: '#FFEDA0', // warna polygon
                        weight: 2,
                        opacity: 1,
                        color: '#FEB24C', // warna garis batas polygon
                        dashArray: '3',
                        fillOpacity: 0.7
                    };
                }

                const geojson = new L.geoJson(kecamatan, {
                    style: style,
                    onEachFeature: onEachFeature
                }).addTo(map);

                var lokasi = [<?php echo $marker; ?>];

                for (var i = 0; i < lokasi.length; i++) {
                    let marker_label = 'NPSN : ' + lokasi[i][0] + '<br>NAMA PONDOK PESANTREN:' + lokasi[i][1] + '<br>ALAMAT:' + lokasi[i][2];
                    marker = new L.marker([lokasi[i][5], lokasi[i][6]]).bindPopup(marker_label).addTo(map);
                }
            </script>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header bg-primary text-light">Statistik</div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody id="tableBody">
                        <tr>
                            <td>Kabupaten</td>
                            <td>:</td>
                            <td><?php echo $kabupaten->nama_kabupaten; ?></td>
                        </tr>
                        <tr>
                            <td>Luas Wilayah</td>
                            <td>:</td>
                            <td><?php echo number_format($kabupaten->luas_wilayah, 0, ',', '.') . ' km<sup>2</sup>'; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Penduduk</td>
                            <td>:</td>
                            <td><?php echo number_format($kabupaten->jumlah_penduduk, 0, ',', '.') . ' Jiwa'; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer small bg-primary text-light">
                    Sumber : BPS 2022
                </div>
            </div>
    </div>
</main>
<?php
echo view('footer'); // memanggil file view footer.php
?>