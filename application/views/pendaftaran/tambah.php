<div class="container-fluid">
    <h1 class="h3 mb-4 text-white">Pendaftaran</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center font-weight-bold">
                    Form Pendaftaran    
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control" id="nama" placeholder="Nama">
                            <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" value="<?=set_value('nisn')?>" class="form-control" id="nisn" placeholder="NISN">
                            <?=form_error('nisn','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" value="<?=set_value('nik')?>" class="form-control" id="nik" placeholder="NIK">
                            <?=form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" value="<?=set_value('email')?>" class="form-control" id="email" placeholder="email">
                            <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no_hp</label>
                            <input type="text" name="no_hp" value="<?=set_value('no_hp')?>" class="form-control" id="no_hp" placeholder="no_hp">
                            <?=form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no_hp</label>
                            <input type="text" name="no_hp" value="<?=set_value('no_hp')?>" class="form-control" id="no_hp" placeholder="no_hp">
                            <?=form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_wa">no_wa</label>
                            <input type="text" name="no_wa" value="<?=set_value('no_wa')?>" class="form-control" id="no_wa" placeholder="no_wa">
                            <?=form_error('no_wa','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">tempat lahir</label>
                            <input type="text" name="tempat_lahir" value="<?=set_value('tempat_lahir')?>" class="form-control" id="tempat_lahir" placeholder="tempat_lahir">
                            <?=form_error('tempat_lahir','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal lahir</label>
                            <input type="text" name="tanggal_lahir" value="<?=set_value('tanggal_lahir')?>" class="form-control" id="tanggal_lahir" placeholder="tanggal lahir">
                            <?=form_error('tanggal_lahir','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">jenis_kelamin</label>
                            <input type="text" name="jenis_kelamin" value="<?=set_value('jenis_kelamin')?>" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin">
                            <?=form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten_tinggal">kabupaten_tinggal</label>
                            <input type="text" name="kabupaten_tinggal" value="<?=set_value('kabupaten_tinggal')?>" class="form-control" id="kabupaten_tinggal" placeholder="kabupaten_tinggal">
                            <?=form_error('kabupaten_tinggal','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan_tinggal">kecamatan_tinggal</label>
                            <input type="text" name="kecamatan_tinggal" value="<?=set_value('kecamatan_tinggal')?>" class="form-control" id="kecamatan_tinggal" placeholder="kecamatan_tinggal">
                            <?=form_error('kecamatan_tinggal','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten_sekolah">kabupaten_sekolah</label>
                            <input type="text" name="kabupaten_sekolah" value="<?=set_value('kabupaten_sekolah')?>" class="form-control" id="kabupaten_sekolah" placeholder="kabupaten_sekolah">
                            <?=form_error('kabupaten_sekolah','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="sekolah_asal">sekolah_asal</label>
                            <input type="text" name="sekolah_asal" value="<?=set_value('sekolah_asal')?>" class="form-control" id="sekolah_asal" placeholder="sekolah_asal">
                            <?=form_error('sekolah_asal','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <input type="text" name="jurusan" value="<?=set_value('jurusan')?>" class="form-control" id="jurusan" placeholder="jurusan">
                            <?=form_error('jurusan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="tahun_lulus">tahun_lulus</label>
                            <input type="text" name="tahun_lulus" value="<?=set_value('tahun_lulus')?>" class="form-control" id="tahun_lulus" placeholder="tahun_lulus">
                            <?=form_error('tahun_lulus','<small class="text-danger pl-3">','</small>');?>
                        </div>
            
                       
                        <a href="<?= base_url('Pendaftaran')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


