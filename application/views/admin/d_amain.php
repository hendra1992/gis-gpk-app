<style>
    .page-header {
        margin-bottom: 0px;
    }

    .carousel-inner {
        border-radius: 5px;
    }

    .carousel-fade .carousel-inner .item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
    }
    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
    }
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }
    .carousel-fade .carousel-control {
        z-index: 2;
    }
    
    .custom-width {
        max-width: 860px!important;
        text-align: center!important;
        margin: 0 auto!important;
        float: none!important;
    }
</style>

<div>
    <div class="custom-width">
        <div class="row-fluid">
            <div class="span12">
                <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="thumbnail" src="<?php echo base_url(); ?>aset/img/office-room.jpg">
                        </div>
                        <div class="item">
                            <img class="thumbnail" src="<?php echo base_url(); ?>aset/img/macbook-pro.jpg">
                        </div>
                        <div class="item">
                            <img class="thumbnail" src="<?php echo base_url(); ?>aset/img/mug-table.jpg">
                        </div>
                        <div class="item">
                            <img class="thumbnail" src="<?php echo base_url(); ?>aset/img/room-layout.jpg">
                        </div>
                    </div>

                    <!-- Controls -->
                    <!--
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
