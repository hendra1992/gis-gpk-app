<div class="section-header">
    <ol class="breadcrumb">
        <li><a href="http://localhost/materialadmin/html/charts/charts.html">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</div><!--end .section-header -->
<div class="section-body">
    <div class="disappear">
        <hr class="ruler-xxl"/>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-primary">Rickshaw charts</h2>
            </div>
            <div class="col-lg-12">
                <h4>Examples</h4>
            </div>
            <div class="col-lg-3 col-md-4">
                <article class="margin-bottom-xxl">
                    <p>
                        Rickshaw is a JavaScript toolkit for creating interactive time series graphs.
                    </p>
                </article>
            </div>
            <div class="col-lg-offset-1 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                    </div>
                </div>
                <em class="text-caption"> Interactive Real-Time Data (Dig into continuously updating data)</em>
                <div class="card">
                    <div class="card-body">
                        <div class="column">
                            <div id="rickshawDemo2"></div>
                            <div id="slider"></div>
                        </div>
                    </div>
                </div>
                <em class="text-caption"> Multiple Renderers (Bars, lines, area, and scatterplot graphs all in one setting)</em>
            </div>
        </div>
        <hr class="ruler-xxl"/>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Sold Property</header>
                </div>
                <div class="card-body">
                    <div id="morris-donut-graph" class="height-6" data-colors="#9C27B0,#2196F3,#0aa89e,#FF9800"></div>
                </div><!--end .card-body -->
            </div><!--end .card -->

        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Last Sales</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Project</th>
                                            <th>Block Number</th>
                                            <th class="sort-numeric">Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td>3.5</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td>1</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head">
                    <header class="text-light">Sitemap Property</header>
                    <div class="tools">
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
                                            <th>No. </th>
                                            <th>Project Code</th>
                                            <th class="sort-alpha">Project Name</th>
                                            <th class="sort-numeric">Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td>3.5</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td>1</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>-</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#" class="btn ink-reaction btn-floating-action btn-xs btn-primary center-block" target="_BLANK"><i class="md md-trending-up"></i></a></td>
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

    <!-- END MORRIS - STACKED BAR CHART -->
</div><!--end .section-body -->