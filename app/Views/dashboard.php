<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!-- Menamoilkan Pesan Login Berhasil -->
                <div class="col">
                    <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0"><?= $title; ?></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!-- Menampilkan Data Team -->
                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Data Team</h5>
                                <h6 class="card-subtitle text-muted">Informasi Team yang sedang login</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama Team</th>
                                            <th>Nama Julukan</th>
                                            <th>Asal Kota</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td>1</td>
                                            <td><?= $team['name']; ?></td>
                                            <td><?= $team['julukan']; ?></td>
                                            <td><?= $team['kota']; ?></td>
                                            <td><?= $team['alamat']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Data Pemain</h5>
                                <h6 class="card-subtitle text-muted">Informasi Pemain sesuai team yang login</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama Pemain</th>
                                            <th>No ID</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Klub Asal</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Pendaftaran</th>
                                            <th>Status Pemain</th>
                                            <th>Tanggal dibuat</th>
                                            <th>Tanggal diubah</th>
                                            <th style="width: 10px">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- looping players    -->
                                        <!-- Membuat Nomor Otomatis -->
                                        <?php $no = 1 + (10*($currentPage-1) ); ?>
                                        <!-- Menampilkan Data Pemain -->
                                        <?php foreach ($players as $player): ?>
                                        <tr class="align-middle"></tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $player['name']; ?></td>
                                        <td><?= $player['noid']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($player['tanggal_lahir'])); ?></td>
                                        <td><?= $player['old_team_name']; ?></td>
                                        <td><?php 
                                            # diterima atau pending atau ditolak menampilkan badge primary, warning, danger
                                            if($player['status_pendaftaran'] == 'Diterima'){
                                                echo '<span class="badge bg-success">Diterima</span>';
                                            } elseif($player['status_pendaftaran'] == 'Pending'){
                                                echo '<span class="badge bg-warning text-dark">Pending</span>';
                                            } else {
                                                echo '<span class="badge bg-danger">Ditolak</span>';
                                            }                                            
                                         ?></td>
                                        <td><?php if ($player['status_pemain']=='Aktif') {
                                            echo '<span class="badge bg-success">Diterima</span>';
                                        } else {
                                            echo '<span class="badge bg-danger">Non Aktif</span>';
                                        }  ?></td>
                                        <td><?= date('d-m-Y', strtotime($player['created_at'])); ?></td>
                                        <td><?= date('d-m-Y', strtotime($player['updated_at'])); ?></td>
                                        <td><a class="btn btn-success" href="/players/<?= $player['id']; ?>"
                                                role="button">Profle</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                <?= $pager->links('players', 'players_pager') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->

        </div>
        <!--end::App Content-->
</main>
<?= $this->endSection() ?>