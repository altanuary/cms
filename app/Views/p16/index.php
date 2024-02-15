<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="row">
            <div class="table-responsive">
                <table id="p16" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Asal, No & Tgl Berkas, No & Tgl Penyerahan</th>
                            <th>Melanggar UU dan Pasal</th>
                            <th>P16 Nomor dan Tanggal, Jaksa Peneliti</th>
                            <th>Nama Tersangka</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($dataP16 as $p16) { ?>
                            <tr>
                                <td> <?= $p16['akronim']; ?> <br>
                                     <?= $p16['no_berkas']; ?> Tgl Berkas <?= $p16['tgl_berkas']; ?><br>
                                     <?= $p16['no_pengantar']; ?> Tgl Berkas <?= $p16['tgl_pengantar']; ?><br>
                                     Tgl Berkas <?= $p16['tgl_terima_pengantar']; ?>
                                </td>
                                <td> 
                                    <?= $p16['UUPasal']; ?>
                                </td>
                                <td> 
                                    <?= (explode("#",$p16['p16']))[2] ?><br>
                                    <?php $no = 1;
                                    foreach ($p16['jp16'] as $jp16) { ?>
                                    <?= $no; ?>. <?= $jp16['nama']; ?> <br>
                                    <?php $no++;
                                    } ?>
                                </td>
                                <td> 
                                    <?= $p16['tersangka']; ?>
                                </td>
                                <td> 
                                    <?= $p16['status']; ?>
                                </td>                   
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>
    
    <script>
        $(document).ready(function() {
            new DataTable('#p16', {
                order: [],
                processing: true,
                responsive: true,
            });
        });
    </script>
<?= $this->endSection() ?>