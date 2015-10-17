<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li>Block Category</li>
        <li class="active">Edit Block</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Block Category</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_URL(); ?>index.php/admin/block_category/act_edit">
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
                        <div class="col-md-12">
                            <div class="text-center">
                                <a onclick="goBack()" class="btn ink-reaction btn-floating-action btn-sm btn-primary"><i class="fa fa-reply" title="Back to Previous Page"></i></a>
                                <button class="btn ink-reaction btn-floating-action btn-sm btn-success" type="submit"><i class="fa fa-save" title="Save Data!"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END MORRIS - STACKED BAR CHART -->
</div><!--end .section-body -->