<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li class="active">Type Property</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Type Property</header>
                    <div class="tools">
                        <a href="<?php echo base_URL(); ?>index.php/admin/type_property/add" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i>&nbsp;New Type Property</a>
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="datatable3" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="sort-numeric" style="min-width: 40px; width: 40px;">No. </th>
                                            <th class="sort-numeric">Type Name</th>
                                            <th class="sort-alpha">Description</th>
                                            <th style="min-width: 80px; width: 80px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>A001</td>
                                            <td>Description Type A</td>
                                            <td class="text-center">
                                                <a href="<?php echo base_URL(); ?>index.php/admin/type_property/edit" class="btn ink-reaction btn-floating-action btn-xs btn-warning"><i class="fa fa-edit" title="Edit Data"></i></a>
                                                <a onclick="return checkDelete()" href="<?php echo base_URL(); ?>index.php/admin/type_property/remove" class="btn ink-reaction btn-floating-action btn-xs btn-danger"><i class="fa fa-trash" title="Delete Data"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>A002</td>
                                            <td>Description Type B</td>
                                            <td class="text-center">
                                                <a href="<?php echo base_URL(); ?>index.php/admin/type_property/edit" class="btn ink-reaction btn-floating-action btn-xs btn-warning"><i class="fa fa-edit" title="Edit Data"></i></a>
                                                <a onclick="return checkDelete()" href="<?php echo base_URL(); ?>index.php/admin/type_property/remove" class="btn ink-reaction btn-floating-action btn-xs btn-danger"><i class="fa fa-trash" title="Delete Data"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--end .table-responsive -->
                        </div><!--end .col -->
                    </div><!--end .row -->
                </div>
            </div>
        </div>
    </div>
</div>