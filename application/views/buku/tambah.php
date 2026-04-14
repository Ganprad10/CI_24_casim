<form action="<?= base_url('buku/simpan') ?>" method="post">

<input type="text" name="kode_buku" placeholder="Kode Buku" class="form-control"><br>
<input type="text" name="judul" placeholder="Judul" class="form-control"><br>
<input type="text" name="penulis" placeholder="Penulis" class="form-control"><br>
<input type="text" name="penerbit" placeholder="Penerbit" class="form-control"><br>
<input type="number" name="tahun" placeholder="Tahun" class="form-control"><br>

<select name="id_kategori" class="form-control">
    <option value="">-- Pilih Kategori --</option>
    <?php foreach($kategori as $k): ?>
        <option value="<?= $k->id ?>"><?= $k->nama_kategori ?></option>
    <?php endforeach; ?>
</select><br>

<input type="number" name="stok" placeholder="Stok" class="form-control"><br>
<input type="text" name="lokasi_rak" placeholder="Lokasi Rak" class="form-control"><br>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>