<?php include 'pages/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="assets/img/<?php echo $singleProduct['image'] ;?>" alt="" class=""/>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body">
                        <h1><?php echo $singleProduct['name']; ?></h1>
                        <p><?php echo $singleProduct['detail']; ?></p>
                        <hr/>


                        <div>
                            <h4>Description</h4>
                            <p><?php echo $singleProduct['description']; ?></p>
                        </div>
                    </div>
                </div>
        </div>

    </div>

</section>





<?php include 'pages/footer.php'?>
