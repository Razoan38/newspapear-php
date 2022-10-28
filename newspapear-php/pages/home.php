<?php include 'pages/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 250px"/>
                    <div class="card-body">
                        <h4 ><?php echo $product['name'] ;?></h4>
                        <p class="top-20"><?php echo $product['detail'] ;?></p>
                        <hr/>
                        <a href="action.php?page=detail&&id=<?php echo $product ['id'] ;?>" class="btn btn-info px-5">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 250px"/>
                    <div class="card-body">
                        <h4 ><?php echo $product['name'] ;?></h4>

                        <p class="top-20"><?php echo $product['detail'] ;?></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="assets/img/2.jpg" alt="" class=" card-img-top" style="height: 250px;">
                    <div class="card-body">
                        <h4 ><?php echo $product['name'] ;?></h4>

                        <p class="top-20"><?php echo $product['detail'] ;?></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="assets/img/5.jpg" alt="" class=" card-img-top" style="height: 250px;">
                    <div class="card-body">
                        <h4 ><?php echo $product['name'] ;?></h4>

                        <p class="top-20"><?php echo $product['detail'] ;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 250px"/>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h4 ><?php echo $product['name'] ;?></h4>
                                <p class="top-20"><?php echo $product['detail'] ;?></p>
                                <a href="action.php?page=detail&&id=<?php echo $product ['id'] ;?>" class="btn btn-info px-5">Detail</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/5.jpg" alt="" class=""style="height: 250px"/>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h2>বিনোদন</h2>
                                <p>সাহসী দৃশ্যে অভিনয়ে মায়ের নিষেধাজ্ঞা, ছবিটি ছাড়তে বাধ্য হন এই অভিনেত্রী</p>
                                <a href="action.php?page=detail&&id=<?php echo $product ['id'] ;?>" class="btn btn-info px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/1.jpg" alt="" class="w-100 h-100"/>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h3>বিশেষ সংবাদ</h3>
                                <p>ব্ল্যাকে টিকিট কেটে নিজের সিনেমা দেখলেন নায়ক</p>
                                <a href="action.php?page=detail&&id=<?php echo $product ['id'] ;?>" class="btn btn-info px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/6.jpg"alt="" class="w-100 h-100"/>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h3>খেলা</h3>
                                <p>বেটিং কোম্পানির সঙ্গে চুক্তি, ধারাভাষ্যের চাকরি হারালেন জনসন</p>
                                <a href="action.php?page=detail&&id=<?php echo $product ['id'] ;?>" class="btn btn-info px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'pages/footer.php'; ?>
