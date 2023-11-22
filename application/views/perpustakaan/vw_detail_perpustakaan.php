<div class="container-fluid">
    <h1 class="h3 mb-4 text-white"><?php echo $judul;?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Detail Peminjaman
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">Nama Buku</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['nama_buku'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Genre Buku</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['genre_buku'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Peminjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['tanggal_peminjaman'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Pengembalian</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['tanggal_pengembalian'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nomor Anggota</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['nomor_anggota'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Peminjam</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?=$perpustakaan['nama_peminjam'];?></div>
                    </div>                   
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Perpustakaan')?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>


