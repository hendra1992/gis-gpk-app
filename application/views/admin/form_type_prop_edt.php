<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li>Type Property</li>
        <li class="active">Edit Type</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Edit Type Property</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_URL(); ?>index.php/admin/type_property/act_edit">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4">
                            <div class="form-group">
                                <label class="uppercase-text" for="block_name">Block Name</label>
                                <input type="text" class="form-control" id="block_name" placeholder="Type Name Block Here..">
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-8">
                            <div class="form-group">
                                <label class="uppercase-text" for="block_desc uppercase-text">Block Description</label>
                                <input type="text" class="form-control" id="block_desc" placeholder="Type Block Description Here..">
                            </div>
                        </div>
                        <?php $this->load->view('admin/action_button_partial/btn_for_submit'); ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>