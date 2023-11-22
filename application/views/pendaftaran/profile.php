<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutter">
            <div class="col-md-4">
                <img src="<?=base_url('assets/img/profile/default.jpg')?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$user['nama'];?> </h5>
                    <p class="card-text"><?=$user['nisn'];?></p>
                    <p class="card-text"><?=$user['nik'];?></p>
                    <p class="card-text"><?=$user['email'];?></p>
                    <p class="card-text"><?=$user['no_hp'];?></p>
                    <p class="card-text"><?=$user['no_wa'];?></p>
                    <p class="card-text"><?=$user['tempat_lahir'];?></p>
                    <p class="card-text"><?=$user['tanggal_lahir'];?></p>
                    <p class="card-text"><?=$user['jenis_kelamin'];?></p>
                    <p class="card-text"><?=$user['kabupaten_tinggal'];?></p>
                    <p class="card-text"><?=$user['kecamatan_tinggal'];?></p>
                    <p class="card-text"><?=$user['kabupaten_sekolah'];?></p>
                    <p class="card-text"><?=$user['sekolah_asal'];?></p>
                    <p class="card-text"><?=$user['jurusan'];?></p>
                    <p class="card-text"><?=$user['tahun_lulus'];?></p>
                </div>
            </div>

        </div>
    </div>
</div>