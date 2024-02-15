<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
    <div class="card">
        <h5 class="card-header"><?= $jaksa->nama; ?> / <?= $jaksa->peg_nip_baru; ?></h5>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-2">
                        <h6 class="card-title">NIP :</h5>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $jaksa->peg_nip_baru; ?>" readonly>
                    </div>
                    <div class="col">
                        <h6 class="card-title">NRP :</h5>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $jaksa->peg_nrp; ?>" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <h6 class="card-title">Nama Lengkap :</h5>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $jaksa->nama; ?>" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <h6 class="card-title">Jabatan :</h5>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= ucwords($jaksa->jabatan); ?>" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <h6 class="card-title">Satuan Kerja :</h5>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= ucwords($jaksa->instansi); ?>" readonly>
                    </div>
                    <div class="col">
                        <h6 class="card-title">Pangkat :</h5>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $jaksa->gol_pangkat2; ?> / (<?= $jaksa->gol_kd; ?>)" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
		<div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataPerkara">
                    <thead>
                        <tr>
                            <th>Nomor P16 dan Tanggal</th>
                            <th>Kasus</th>
                            <th>UU dan Pasal</th>
                            <th>Nama Tersangka</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($dataPerkara as $data) { ?>
                        <tr>
                            <td><?= $data['no_surat']; ?> tanggal <?= $data['tgl_dikeluarkan']; ?></td>
                            <td><?= $data['ket_kasus']; ?></td>
                            <td><?= $data['undang_pasal']; ?></td>
                            <td><?= $data['nama']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>

    <script>
        $(document).ready(function() {
            new DataTable('#dataPerkara', {
                order: [],
                processing: true,
                responsive: true,
            });
        });
    </script>
<?= $this->endSection() ?>