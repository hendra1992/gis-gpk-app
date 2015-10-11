<div class="clearfix">
    <div class="row">
        <div class="col-lg-12">

            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Surat Masuk</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_URL(); ?>index.php/admin/surat_masuk/add" class="btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form navbar-left" method="post" action="<?php echo base_URL(); ?>index.php/admin/surat_masuk/cari">
                                <input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
                                <button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
                            </form>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </div><!-- /.navbar -->

        </div>
    </div>

    <?php echo $this->session->flashdata("k"); ?>

    <!--	
    <div class="alert alert-dismissable alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Well done!</strong> You successfully read <a href="http://bootswatch.com/amelia/#" class="alert-link">this important alert message</a>.
    </div>
            
    <div class="alert alert-dismissable alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Oh snap!</strong> <a href="http://bootswatch.com/amelia/#" class="alert-link">Change a few things up</a> and try submitting again.
    </div>	
    -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="10%">No. Agd/Kode</th>
                    <th width="27%">Isi Ringkas, File</th>
                    <th width="20%">Asal Surat</th>
                    <th width="18%">Nomor, Tgl. Surat</th>
                    <th width="25%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $rolename = $this->session->userdata('admin_level');
                if (empty($data)) {
                    echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                    $no = ($this->uri->segment(4) + 1);
                    foreach ($data as $b) {
                        ?>
                        <tr>
                            <td><?php echo $b->no_agenda . "/" . $b->kode; ?></td>
                            <td><?php echo $b->isi_ringkas . "<br><b>File : </b><i><a href='" . base_URL() . "upload/surat_masuk/" . $b->file . "' target='_blank'>" . $b->file . "</a>" ?></td>
                            <td><?php echo $b->nama_skpd; ?></td>
                            <td><?php echo $b->no_surat . "<br><i>" . tgl_jam_sql($b->tgl_surat) . "</i>" ?></td>

                            <td class="ctr">
                                <?php
                                if ($rolename === 'Super Admin' || $rolename === 'Kepala Bagian' || $rolename === 'Kepala Sub Bagian'  || $rolename === 'Admin') {
                                    ?>
                                    <div class="btn-group">
                                        <a href="<?php echo base_URL() ?>index.php/admin/surat_masuk/edt/<?php echo $b->id ?>" class="btn btn-success btn-sm" title="Edit Data"><i class="icon-edit icon-white"> </i> Edit</a>
                                        <a href="<?php echo base_URL() ?>index.php/admin/surat_masuk/del/<?php echo $b->id ?>" class="btn btn-warning btn-sm" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="icon-trash icon-remove">  </i> Del</a>			
                                        <?php
                                        if ($rolename === 'Kepala Bagian' || $rolename === 'Kepala Sub Bagian' ) {
                                            ?>
                                            <a href="<?php echo base_URL() ?>index.php/admin/surat_disposisi/<?php echo $b->id ?>" class="btn btn-default btn-sm"  title="Disposisi Surat"><i class="icon-trash icon-list"> </i> Disp</a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo base_URL() ?>index.php/admin/disposisi_cetak/<?php echo $b->id ?>" class="btn btn-info btn-sm" target="_blank" title="Cetak Disposisi"><i class="icon-print icon-white"> </i> Cetak</a>
                                    </div>	
                                    <?php
                                } else {
                                    ?>
                                    <div class="btn-group">
                                        <a href="<?php echo base_URL() ?>index.php/admin/disposisi_cetak/<?php echo $b->id ?>" class="btn btn-info btn-sm" target="_blank" title="Cetak Disposisi"><i class="icon-print icon-white"> </i> Cetak</a>
                                    </div>	
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
