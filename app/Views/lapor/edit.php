<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <h1>SIMPLE LAPOR!</h1>

    <form action="/lapor/update/<?= $lapor['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="lampiranLama" value="<?= $lapor['lampiran']; ?>">
        <div class="input-nama">
            <input type="text" id="nama" name="nama" placeholder="nama anda.." value="<?= (old('nama')) ? old('nama') : $lapor['nama'] ?>">
        </div>

        <div>
            <textarea id="isi" name="isi_laporan" rows="3"><?= (old('isi_laporan')) ? old('isi_laporan') : $lapor['isi_laporan'] ?></textarea>
        </div>

        <div class="pilihAspek">
            <select id="aspek" name="aspek_pelaporan">
                <option selected hidden><?= $lapor['aspek_pelaporan']; ?></option>
                <option>Dosen</option>
                <option>Staff</option>
                <option>Mahasiswa</option>
                <option>Infrastruktur</option>
                <option>Pengajaran</option>
            </select>
        </div>
        <div class="inputLampiran">
            <input type="file" id="lampiran" name="lampiran">
        </div>
        <div class="btn"></div>
        <a class="btn-back" href="/">Kembali</a>
        <button class="btn-lapor" type="submit" onclick="return confirm('yakin edit?')">Ubah LAPOR!</button>
        <div class="clearfix"></div>
        <div class="hr-create">
            <br>
            <hr>
        </div>
    </form>

</div>
<div class="footer">
    <div class="footer">
        <span>
            Rian Andri Waskito (119140030) Samuel Jovial Pardede (119140104)
        </span>
        <hr>
    </div>
</div>
<?= $this->endSection(); ?>