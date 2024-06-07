<div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-6">
            <div class="card card-outline card-primary rounded-0 shadow">
                <div class="card-header">
                    <h4 class="card-title">Contact</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <dt class="text-muted"><i class="fa fa-envelope"></i> Email</dt>
                        <dd class="pr-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted"><i class="fa fa-phone"></i> Contact #</dt>
                        <dd class="pr-4"><?= $_settings->info('contact') ?></dd>
                        <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Location</dt>
                        <dd class="pr-4"><?= $_settings->info('address') ?></dd>
                    </dl>
                    <hr class="dark-primary" height="2px">
                    <!-- embeded google map -->


                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=645&amp;height=386&amp;hl=en&amp;q=bhandari compound, balaji nagar bhiwandi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed-googlemap.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:386px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:386px;}.gmap_iframe {height:386px!important;}</style></div>
                    <br>
                    <center>
                    <img src="uploads\gif\computer-fixing.gif">
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded-0 card-outline card-primary shadow" >
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div>
                        <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>