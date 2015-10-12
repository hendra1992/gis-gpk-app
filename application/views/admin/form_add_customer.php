<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/admin">Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/customers"></a>Customers</li>
        <li class="active">Add Customer</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="row">
        <div class="col-lg-6 center-block" style="float: none!important;">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Detail Customer</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- BEGIN BASIC VALIDATION -->
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form form-validate floating-label" novalidate="novalidate">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Name1" name="Name1" required data-rule-minlength="2">
                                            <label for="Name1">Name</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Email1" name="Email1" required>
                                            <label for="Email1">Email</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="Password1" name="Password1" required data-rule-minlength="5">
                                            <label for="Password1">Password</label>
                                        </div>
                                        <div class="form-group">
                                            <select id="select1" name="select1" class="form-control" required>
                                                <option value="">&nbsp;</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60">60</option>
                                                <option value="70">70</option>
                                            </select>
                                            <label for="select1">Select</label>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="textarea1" id="textarea1" class="form-control" rows="3" required></textarea>
                                            <label for="textarea1">Textarea</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-styled">
                                                <label>
                                                    <input type="checkbox" name="terms1" required>
                                                    <span>I have read and accept the term.</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-actionbar">
                                        <div class="card-actionbar-row">
                                            <button type="submit" class="btn btn-flat btn-primary ink-reaction">Validate</button>
                                        </div>
                                    </div>
                                </div>
                                <em class="text-caption">Basic validation</em>
                            </form>
                        </div>
                    </div>
                    <!-- END BASIC VALIDATION -->
                </div>
            </div>
        </div>
    </div>

    <!-- END MORRIS - STACKED BAR CHART -->
</div><!--end .section-body -->