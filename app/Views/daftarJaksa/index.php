<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataJaksa">
                    <thead>
                        <tr>
                            <th>NIP / NRP</th>
                            <th>Nama</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($dataJaksa as $data) { ?>
                        <tr>
                            <td><?= $data['nip_nrp']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['golpang']; ?></td>
                            <td><?= $data['jabatan']; ?></td>
                            <td><div class="pagination"><a href="<?= base_url('dataJaksa/'.$data['nip']); ?>">View</a></div></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>

<script>
    $(document).ready(function() {
        new DataTable('#dataJaksa', {
            order: [],
            processing: true,
            responsive: true,
        });
    });
</script>

<?= $this->endSection() ?>

