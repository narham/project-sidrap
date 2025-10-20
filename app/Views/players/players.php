<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
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
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="Pencarian Pemain"
                            aria-label="Recipient’s username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
            <!--begin::Row-->
            <div class="row">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Pemain</th>
                                <th>No ID</th>
                                <th>Tanggal Lahir</th>
                                <th>Status Pendaftaran</th>
                                <th>Status</th>
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
                            <td><?= $player['tanggal_lahir']; ?></td>
                            <td><?= $player['status_pendaftaran']; ?></td>
                            <td><?= $player['status_pemain']; ?></td>
                            <td><?= $player['created_at']; ?></td>
                            <td><?= $player['updated_at']; ?></td>
                            <td><a class="btn btn-success" href="/players/<?= $player['id']; ?>"
                                    role="button">Profle</a></td>
                            </tr>
                            </tr>
                            <?php endforeach; ?>

                            <!-- end looping players -->
                        </tbody>
                    </table>
                    <!-- pagination -->
                    <?= $pager->links('players','players_pager'); ?>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->

    </div>
    <!--end::App Content-->
</main>
<?= $this->endSection() ?>