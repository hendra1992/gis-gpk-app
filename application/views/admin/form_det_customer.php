<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/customers"></a>Customers</li>
        <li class="active">Detail Customer</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="container-fluid">
        <form class="form">
            <div class="card">
                <div class="card-head">
                    <header>Detail Customer</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="id_number_cust">Identity Number</label>
                                <input type="text" class="form-control" id="id_number_cust">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name_cust">Name</label>
                                <input type="text" class="form-control" id="name_cust">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="sex_cust">Sex</label>
                                <select class="form-control" id="sex_cust">
                                    <option><small>- - Choose Gender - -</small></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marital_stat_cust">Marital Status</label>
                                <select class="form-control" id="marital_stat_cust">
                                    <option><small>- - Choose Status - -</small></option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Divorce</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="address_cust">Address</label>
                                <input type="text" class="form-control" id="address_cust">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone_1_cust">Phone Number 1</label>
                                <input type="text" class="form-control" id="phone_1_cust">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone_2_cust">Phone Number 2</label>
                                <input type="text" class="form-control" id="phone_2_cust">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <a class="btn btn-accent-dark" href="#" target="_BLANK" style="text-transform: capitalize;">Preview KTP</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>SPR Number</th>
                                            <th>Block Number</th>
                                            <th>Price</th>
                                            <th>Paid Amount</th>
                                            <th>Remaining</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SPR001</td>
                                            <td>A00101</td>
                                            <td>Rp 500.000,00</td>
                                            <td>Rp 150.000,00</td>
                                            <td>Rp 350.000,00</td>
                                            <td>
                                                <a href="<?php echo base_URL(); ?>index.php/admin/customers/det_payment/" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block"><i class="md md-trending-up"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SPR002</td>
                                            <td>A00102</td>
                                            <td>Rp 240.000,00</td>
                                            <td>Rp 250.000,00</td>
                                            <td>Rp 450.000,00</td>
                                            <td>
                                                <a href="<?php echo base_URL(); ?>index.php/admin/customers/det_payment/" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block"><i class="md md-trending-up"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center center-block">
                                <a href="<?php echo base_URL(); ?>index.php/admin/customers/" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block"><i class="fa fa-reply"></i></a>
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
</div>