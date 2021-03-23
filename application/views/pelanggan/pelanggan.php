<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('pelanggan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
        </div>
    </div>
    <hr>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <div class="card shadow">
        <div class="card-header"><strong>Daftar Pelanggan</strong></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Pelanggan</td>
                            <td>Company</td>
                            <td>Type</td>
                            <td>No Telepon</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pelanggan as $key) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama ?></td>
                                <td><?= $key->company ?></td>
                                <td><?= $key->type ?></td>
                                <td><?= $key->no_tlp ?></td>
                                <td><?= $key->alamat ?></td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
                                    <a onclick="return confirm('apakah anda yakin?')" href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>