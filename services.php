
<div class="content py-5">
    <h3 class="">Our Services</h3>

<div class="callout border-primary rounded-0 shadow-lg-primary">
    <img src="uploads\gif\service.gif" width="950px" height="450px" align="center">
</div>

<hr>
    <div class="container-fluid">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 gx-2 gy-2">
            <?php 
                $services = $conn->query("SELECT * FROM `service_list` where delete_flag = 0 order by `service` asc");
                while($row = $services->fetch_assoc()):
            ?>
                <div class="col">
                    <div class="callout border-primary rounded-0 shadow">
                        <h3><b><?= $row['service'] ?></b></h3>
                        <div class="form-group">
                            <span class="float-right"><i class="fa fa-tags text-muted"></i> <?= number_format($row['cost'],2) ?></span>
                        </div>
                        <p class="text-muted"><small><?= str_replace("\n","<br/>",$row['description']) ?></small></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php ?>
        </div>
    </div>



</div>

   <div class="animated-shadow-quote">
  <blockquote>
    <p>
        Discover competitive prices tailored to your needs.<br>
        Our pricing is dynamic, ensuring the best value for every service.<br>
        Experience flexible pricing that adjusts to market trends.<br>
        Expect transparency in pricing, reflecting the quality of our products and services.<br>
        Explore a range of options to find the perfect fit for your budget.<br>
        Enjoy the possibility of savings with fluctuating prices on hardware and services.<br>
        We strive to offer fair and competitive pricing for all our offerings.<br>
        Prices may vary, but our commitment to quality remains consistent.<br>
        Embrace the potential for discounts and deals on our diverse range of products and services.<br>
        Rest assured, whether prices are high or low, our dedication to customer satisfaction never wavers.<br>
    </p>
  </blockquote>
</div>
<br>