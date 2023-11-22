<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1 class="h3 ,b-4 text-gray-800">
                        <?php echo $judul; ?>
                    </h1>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?= base_url('Mahasiswa/tambah') ?>"
                                        class="btn btn-info mb-2">Tambah Mahasiswa</a>
                                </div>
                                <div class="col-md-12">
                                <?= $this->session->flashdata('message');?>
                                    <table class="table" >
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama</td>
                                                <td>Nim</td>
                                                <td>Email</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($mahasiswa as $us): ?>
                                                <tr>
                                                    <td>
                                                        <?= $i; ?>
                                                    </td>
                                                    <td>
                                                        <?= $us['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $us['nim']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $us['email']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>"
                                                            class="badge bg-danger">Hapus</a>
                                                        <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>"
                                                            class="badge bg-warning">Edit</a>
                                                        <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>"
                                                            class="badge bg-info">Detail</a>
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
    </div>
</div>