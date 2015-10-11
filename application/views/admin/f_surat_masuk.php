<?php
$mode = $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
    $act = "act_edt";
    $idp = $datpil->id;
    $no_agenda = $datpil->no_agenda;
    $kode = $datpil->kode;
    $dari = $datpil->dari;
    $no_surat = $datpil->no_surat;
    $tgl_surat = $datpil->tgl_surat;
    $uraian = $datpil->isi_ringkas;
    $ket = $datpil->keterangan;
} else {
    $act = "act_add";
    $idp = "";
    $no_agenda = gli("t_surat_masuk", "no_agenda", 4);
    $kode = "";
    $dari = "";
    $no_surat = "";
    $tgl_surat = "";
    $uraian = "";
    $ket = "";
}

?>
<div class="navbar navbar-inverse">
    <div class="container z0">
        <div class="navbar-header">
            <span class="navbar-brand" href="#">Surat Masuk</span>
        </div>
    </div><!-- /.container -->
</div><!-- /.navbar -->

<form action="<?php echo base_URL(); ?>index.php/admin/surat_masuk/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

    <input type="hidden" name="idp" value="<?php echo $idp; ?>">


    <div class="row-fluid well" style="overflow: hidden">

        <div class="col-lg-6">
            <table  class="table-form">
                <tr>
                    <td width="20%">No. Agenda</td>
                    <td><b><input type="text" name="no_agenda" autofocus tabindex="1" required value="<?php echo $no_agenda; ?>" style="width: 100px" class="form-control"></b></td>
                </tr>
                <tr>
                    <td width="20%">Asal Surat</td>
                    <td>
                        <!--<b><input type="text" name="dari" tabindex="2" required value="<?php //echo $dari; ?>" id="dari" style="width: 400px" class="form-control"></b>-->
                        <select tabindex="2" class="form-control" name="dari">
                            <option value="0">-- Pilih Salah Satu --</option>
                            <?php 
                            foreach($listskpd as $list){ 
                                //echo '<option value="'.$row->kode.'">'.$row->kode." - ".$row->nama.'</option>';
                                echo '<option value="'.$list->id_skpd.'" '.(($dari == $list->id_skpd)?'selected':"").'>'.$list->singkatan_skpd." - ".$list->nama_skpd.'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>		
                <tr>
                    <td width="20%">Nomor Surat</td>
                    <td><b><input type="text" name="no_surat" tabindex="3" required value="<?php echo $no_surat; ?>" style="width: 300px" class="form-control"></td>
                </tr>	
                <tr>
                    <td width="20%">Isi Ringkas</td>
                    <td><b><textarea name="uraian" tabindex="4" required style="width: 400px; height: 90px" class="form-control"><?php echo $uraian; ?></textarea></b></td>
                </tr>	
                <tr>
                    <td colspan="2">
                        <br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
                        <a href="<?php echo base_URL(); ?>index.php/admin/surat_masuk" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-6">	
            <table  class="table-form">
                <tr>
                    <td width="20%">Kode Klasifikasi</td>
                    <td>
                        <!--<b>
                        <input type="text" name="kode" tabindex="5" id="kode_surat" required value="<?php //echo $kode; ?>" style="width: 100px" class="form-control">
                        </b>-->
                        <select class="form-control" name="kode">
                            <option value="0">-- Pilih Salah Satu --</option>
                            <?php 
                            foreach($klasifikasi as $row){ 
                                //echo '<option value="'.$row->kode.'">'.$row->kode." - ".$row->nama.'</option>';
                                echo '<option value="'.$row->kode.'" '.(($kode == $row->kode)?'selected':"").'>'.$row->kode." - ".$row->nama.'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="20%">Tanggal Surat</td>
                    <td><b><input type="text" name="tgl_surat" tabindex="7" required value="<?php echo $tgl_surat; ?>" id="tgl_surat" style="width: 100px" class="form-control"></b></td>
                </tr>	
                <tr>
                    <td width="20%">File Surat (Scan)</td>
                    <td><b><input type="file" name="file_surat" tabindex="8" class="form-control" style="max-width: 250px"></b></td>
                </tr>
                <tr>
                    <td width="20%">Keterangan</td>
                    <td>
                        <b>
                            <textarea type="text" name="ket" value="<?php echo $ket; ?>" tabindex="9" style="width: 400px; height: 90px;" class="form-control"></textarea>
                        </b>
                    </td>
                </tr>	
            </table>	
        </div>

    </div>

</form>
