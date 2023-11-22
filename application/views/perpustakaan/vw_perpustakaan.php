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
                                    <a href="<?= base_url('Perpustakaan/tambah') ?>"
                                        class="btn btn-info mb-2">Tambah Data</a>
                                </div>
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Nomor</td>
                                                <td>Nama Buku</td>
                                                <td>Tanggal Peminjaman</td>
                                                <td>Tanggal Pengembalian</td>                                             
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($perpustakaan as $perpus): ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $perpus['nama_buku']; ?></td>                                                  
                                                    <td><?= $perpus['tanggal_peminjaman']; ?></td>
                                                    <td><?= $perpus['tanggal_pengembalian']; ?></td>                                                                                                    
                                                    <td>
                                                        <a href="<?= base_url('Perpustakaan/hapus/') . $perpus['id']; ?>"
                                                            class="badge bg-danger">Hapus</a>
                                                        <a href="<?= base_url('Perpustakaan/edit/') . $perpus['id']; ?>"
                                                            class="badge bg-warning">Edit</a>
                                                        <a href="<?= base_url('Perpustakaan/detail/') . $perpus['id']; ?>"
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