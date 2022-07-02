<?php require('top.php')?>
<div class="body__overlay"></div>
<div class="container-lg">
        <div class="row">
            <div class="the-menu col-12 swiper padding-tren-duoi">
                <div class="swiper-wrapper">
                    <ul class="reset-list hor-list swiper-slide">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Keycap_set.html">Keycap set</a></li>
                        <li><a href="Keyscap.html">Keycap</a></li>
                        <li><a href="switch.html">Switch</a></li>
                        <li><a href="">Mechanical keyboard</a></li>
                        <li><a href="">Fanpage</a></li>
                        <li><a href="">Warranty</a></li>
                        <li><a href="">Community</a></li>
                        <li><a href="landing.html">About us</a></li>
                        <li><a href="">Deal</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Best seller</a></li>
                        <li><a href="">Brand</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="banner col-12">
                <div class="swiper banner-truot">
                    <div class="swiper-wrapper">
                        <a href="" class="swiper-slide b1">
                            <h1 class="font-size">AKKO 3068 v2 2021 Year of the Ox</h1>
                        </a>
                        <a href="font-size" class="swiper-slide b2">
                            <h1 class="font-size">AKKO 3108 v2 Monet’s Pond</h1>
                        </a>
                        <a href="" class="swiper-slide b3">
                            <h1 class="font-size">Akko 3108 v2 One Piece – Chopper</h1>
                        </a>
                        <a href="" class="swiper-slide b4">
                            <h1 class="font-size">Varmilo VA108M Beijing Opera</h1>
                        </a>
                    </div>
                </div>
                <div class="banner-pagination hor-list-center"></div>
                <div class="top-review d-none d-lg-block">
                    <a href=""> <img src="QC/QC1.jpg" alt="">Razer green switch voted as the best switch in 2021</a>
                    <a href=""> <img src="QC/ban_phim5.jfif" alt="">On hand masterpiece Varmilo Crane of Lure's Keyboard</a>
                </div>
            </div>
            <!-- bat dau sua  -->
            <div class="pro-block col-12">
                <h1 class="page-heading">Keycaps</h1>
                <div class="sp-truot-holder keycap-truot">
                    <div class="swiper-button-prev d-none d-md-flex"></div>
                    <div class="pro-block-inner swiper shop-items">
                       <ul class="reset-list pro-grid swiper-wrapper">    
                        <?php
							$get_product=get_product_keycap($con,7);
							foreach($get_product as $list){
							?>
                            <li class="swiper-slide ">
                                <a href="">
                                    <p class="pro-name shop-item-title"><a href="product-details.html"><?php echo $list['name']?></a></p>
                                    <p class="price shop-item-price">1.750.000 VNĐ<del>3.000.000 VNĐ</del></p>
                                </a>
                                <a href="keycap.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                 </a>
                                <div class="the-button shop-item-details">
                                    <button type="button" class="btn-std btn-buy shop-item-button">Buy</button>
                                    <a href="keycap.php?id=<?php echo $list['id']?>" class="btn-std btn-detail">Details</a> </div>
                            </li>  
                            <?php } ?>                         
                        </ul>
                    </div>
                    <div class="swiper-button-next d-none d-md-flex"></div>
                </div>
            </div>
            <!--  -->
            <div class="pro-block col-12">
                <h1 class="page-heading">Switches</h1>
                <div class="sp-truot-holder switch-truot">
                    <div class="swiper-button-prev d-none d-md-flex"></div>
                    <div class="pro-block-inner swiper shop-items">
                        <ul class="reset-list pro-grid swiper-wrapper">
                            <?php
							$get_product=get_product_switch($con,4);
							foreach($get_product as $list){
							?>
                            <li class="swiper-slide ">
                                <a href="">
                                    <p class="pro-name shop-item-title"><a href="product-details.html"><?php echo $list['name']?></a></p>
                                    <p class="price shop-item-price">1.750.000 VNĐ<del>3.000.000 VNĐ</del></p>
                                </a>
                                <a href="switch.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                 </a>
                                <div class="the-button shop-item-details">
                                    <button type="button" class="btn-std btn-buy shop-item-button">Buy</button>
                                    <a href="switch.php?id=<?php echo $list['id']?>" class="btn-std btn-detail">Details</a> </div>
                            </li>  
                            <?php } ?>                   
                        </ul>
                    </div>
                    <div class="swiper-button-next d-none d-md-flex"></div>
                </div>
            </div>
            <!--  -->
            <div class="pro-block col-12">
                <h1 class="page-heading">Keyboards</h1>
                <div class="sp-truot-holder ban-phim-co">
                    <div class="swiper-button-prev d-none d-md-flex"></div>
                    <div class="pro-block-inner swiper shop-items">
                        <ul class="reset-list pro-grid swiper-wrapper">
                        <?php
							$get_product=get_product_keyboard($con,4);
							foreach($get_product as $list){
							?>
                            <li class="swiper-slide ">
                                <a href="">
                                    <p class="pro-name shop-item-title"><a href="product-details.html"><?php echo $list['name']?></a></p>
                                    <p class="price shop-item-price">1.750.000 VNĐ<del>3.000.000 VNĐ</del></p>
                                </a>
                                <a href="keyboard.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                 </a>
                                <div class="the-button shop-item-details">
                                    <button type="button" class="btn-std btn-buy shop-item-button">Buy</button>
                                    <a href="keyboard.php?id=<?php echo $list['id']?>" class="btn-std btn-detail">Details</a> </div>
                            </li>  
                            <?php } ?>            
                        </ul>
                    </div>
                    <div class="swiper-button-next d-none d-md-flex"></div>
                </div>
            </div>

            <!--	  BAT DAU PHAN TRANG-->
            <div class="col-12">
                <ul class="reset-list hor-list-center shop-pagination">
                    <li>
                        <a href="">
                            <svg>
            <use xlink:href="symbol-defs.svg#icon-keyboard_arrow_left"/>
          </svg>
                        </a>
                    </li>
                    <li class="d-md-none">1/10 </li>
                    <li class="d-none d-md-block cur-page"><a href="">1</a></li>
                    <li class="d-none d-md-block"><a href="">2</a></li>
                    <li class="d-none d-md-block"><a href="">3</a></li>
                    <li class="d-none d-md-block"><a href="">4</a></li>
                    <li class="d-none d-md-block"><a href="">5</a></li>
                    <li class="d-none d-md-block"><a href="">6</a></li>
                    <li>
                        <a href="">
                            <svg>
            <use xlink:href="symbol-defs.svg#icon-keyboard_arrow_right"/>
          </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js">
    </script>
    <script src="index_js.js" async></script>
</body>

</html>

<?php 
include "footer.php";

?>
  