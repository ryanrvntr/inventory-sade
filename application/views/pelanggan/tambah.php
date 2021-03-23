<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('pelanggan') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                <div class="card-body">
                    <form action="<?= base_url('pelanggan/tambah') ?>" id="form-tambah" method="POST">
                        <h5>Data Pelanggan</h5>
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
                            <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <select name="company" value="" class="form-control">
                                <option value="">Pilih company</option>
                                <?php
                                foreach ($company as $key) : ?>
                                    <option value=<?php echo $key->id ?>><?php echo $key->nama ?></option>
                                <?php
                                endforeach
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" value="" class="form-control">
                                <option value="">Pilih type</option>
                                <?php
                                foreach ($type as $key) : ?>
                                    <option value=<?php echo $key->id ?>><?php echo $key->nama ?></option>
                                <?php
                                endforeach
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="no_tlp" value="<?php echo  set_value('no_tlp') ?>" class="form-control">
                            <?php echo form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="<?php echo set_value('alamat') ?>" class="form-control">
                            <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                        </div>
                        <div class="form-group">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>