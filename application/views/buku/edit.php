<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Data Buku</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form method="post" action="<?= site_url('buku/update/'.$buku->id); ?>">

                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="<?= $buku->kode_buku; ?>" required>
                </div>

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?= $buku->judul; ?>" required>
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= $buku->penulis; ?>" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach($kategori as $k): ?>
                            <option value="<?= $k->id; ?>" 
                                <?= ($k->id == $buku->id_kategori) ? 'selected' : ''; ?>>
                                <?= $k->nama_kategori; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?= $buku->stok; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= site_url('buku'); ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>