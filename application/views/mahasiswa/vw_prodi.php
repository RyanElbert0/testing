        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h1 class="h3 ,b-4 text-gray-800"><?php echo $judul; ?></h1>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="<?= base_url('Prodi/tambah') ?>" class="btn btn-info mb-2">Tambah Prodi</a>
                                        </div>
                                        <div class="col-md-12">
                                        <?= $this->session->flashdata('message');?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Nama Prodi</td>
                                                        <td>Ruangan</td>
                                                        <td>Jurusan</td>
                                                        <td>Akreditasi</td>
                                                        <td>Nama Kaprodi</td>
                                                        <td>Tahun Berdiri</td>
                                                        <td>Output Lulusan</td>
                                                        <td>Gambar</td>
                                                        <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1; ?>
                                                    <?php foreach ($prodi as $us) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?= $us['nama'];?></td>
                                                        <td><?= $us['ruangan'];?></td>
                                                        <td><?= $us['jurusan'];?></td>
                                                        <td><?= $us['akreditas'];?></td>
                                                        <td><?= $us['nama_kaprodi'];?></td>
                                                        <td><?= $us['tahun_berdiri'];?></td>
                                                        <td><?= $us['output_lulusan'];?></td>
                                                        <td><img src="<?=base_url('assets/img/prodi/'). $us['gambar'];?>" 
                                                        style="width: 100px;" class="img-thumbnail"></td>
                                                        <td>
                                                            <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge bg-danger">Hapus</a>
                                                            <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge bg-warning">Edit</a>
                                                            <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>" class="badge bg-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    