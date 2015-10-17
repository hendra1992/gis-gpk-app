<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/customers"></a>Customers</li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/customers/det"></a>Detail Customer</li>
        <li class="active">Detail Payment</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="container-fluid">
        <form class="form">
            <div class="card">
                <div class="card-head">
                    <header>Detail Payment</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Payment Date</th>
                                            <th>Cheque Number</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>26/06/2014</td>
                                            <td>CHK001</td>
                                            <td>Uang Muka</td>
                                            <td>Pembayaran Angsuran ke-1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>25/08/2014</td>
                                            <td>CHK002</td>
                                            <td>Uang Muka</td>
                                            <td>Pembayaran Angsuran ke-2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center center-block">
                                <a href="<?php echo base_URL(); ?>index.php/admin/customers/det/" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block"><i class="fa fa-reply"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</form>
</div>
<!-- END MORRIS - STACKED BAR CHART -->
</div><!--end .section-body -->