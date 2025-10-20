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
            <!--begin::Row-->
            <div class="row">
                <div class="col-mb-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Detail Pemain</h5>
                            <h6 class="card-subtitle text-muted">Informasi detail pemain</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <div class="row">
                <div class="col-md-3">
                    <div class=" card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?= base_url(); ?>/uploads/players/<?= $player['photo']; ?>"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $player['name']; ?></h3>
                            <p class="text-muted text-center"><?= $player['panggilan']; ?></p>
                            <p class="text-muted text-center"><?= $player['noid']; ?></p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Kewarga Negaraan</b> <a class="float-end"><?= $player['kewarganegaraan']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tanggal Lahir</b> <a class="float-end"><?= $player['tanggal_lahir']; ?></a>
                                </li>

                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-bs-toggle="tab">Detail
                                        Pemain</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width: 200px;">Nama Lengkap</th>
                                                <td><?= $player['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>No ID</th>
                                                <td><?= $player['noid']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kewarganegaraan</th>
                                                <td><?= $player['kewarganegaraan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><?= $player['tanggal_lahir']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kaki Utama</th>
                                                <td><?= $player['kaki_utama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td><?= $player['status_pemain'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



</main>
<?= $this->endSection(); ?>