<?php require_once "./mvc/core/String.php" ?>
<div id="view-product-list" class="view-product-list">
                            <h1 class="page-heading">
                                <img alt="services" src="mvc/public/images/hot-icon.png" width="20px">
                                <span class="page-heading-title" itemprop="name">SOURCE CODE MỚI NHẤT</span>
                            </h1>
                            <link itemprop="url" href="index.html" />
                            <meta itemprop="description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
                            <ul class="display-product-option">
                                
                                    <li class="view-as-grid selected">
                                        <a onclick="document.getElementById(&#39;mainbody_btnViewBase&#39;).click();" id="mainbody_btnViewBase1" title="Xem danh sách" href="javascript:__doPostBack(&#39;ctl00$mainbody$btnViewBase1&#39;,&#39;&#39;)"><span>grid</span></a>
                                    </li>
                                    
                                        <li class="view-as-list">
                                            <a onclick="document.getElementById(&#39;mainbody_bntViewDetail&#39;).click();" id="mainbody_bntViewDetail1" title="Xem chi tiết" href="javascript:__doPostBack(&#39;ctl00$mainbody$bntViewDetail1&#39;,&#39;&#39;)"><span>list</span></a>
                                        </li>
                            </ul>
                            <!-- PRODUCT LIST -->
                                <ul class="row product-list style2 grid">
                                <?php 
                                    while($row = mysqli_fetch_array($data["CodeMoiNhat"])){
                                        ?>
                                        <li class="col-sx-12 col-sm-3" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href='<?php
                                                echo to_slug($row["tencode"]) ?>'>
                                                    <div class="img-box">
                                                        <img class="img-responsive" itemprop="image" src="<?php echo $row["anhdemo"] ?>" alt="<?php echo $row["tencode"] ?>" title="<?php echo $row["tencode"] ?>" />
                                                    </div>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Download code" class="search" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html#Download'></a>
                                                    <a id="mainbody_rptList_Button4_0" title="Yêu thích code này" class="heart LikeSuccess" href="javascript:__doPostBack(&#39;ctl00$mainbody$rptList$ctl00$Button4&#39;,&#39;&#39;)"></a>
                                                </div>
                                                <div class="downview">
                                                    <span class="view-count2"><?php echo $row["luotxem"] ?></span>
                                                    <span class="down-count2"><?php echo $row["luottai"] ?></span>
                                                </div>
                                                <a class="cate" href='ngon-ngu-lap-trinh/wordpress-29.html'><?php echo $row["theloai"] ?></a>
                                            </div>
                                            <div class="right-block">
                                                <a itemprop="url" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <h2 itemprop="name" class="product-name bold" title="Download Share code tin tức wordpress giống Quantrimang.com"><?php echo $row["tencode"] ?></h2>
                                                </a>
                                                <div class="rateit" data-rateit-value="5"  data-rateit-readonly="true" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><meta itemprop="ratingValue" content="5"/><meta itemprop="reviewCount" content="1"/></div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                   <?php }
                                ?>      
                                </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                        </div>
                        <div id="view-product-list" class="view-product-list">
                            <h1 class="page-heading">
                                <img alt="services" src="https://cdn3.iconfinder.com/data/icons/security-double-color-red-black-vol-2/52/flame__extinguisher__fire__burning__hot__heat__fireplace-512.png" width="20px">
                                <span class="page-heading-title" itemprop="name">WEBSITE NỔI BẬT</span>
                            </h1>
                            <link itemprop="url" href="index.html" />
                            <meta itemprop="description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
                            <ul class="display-product-option">
                                
                                    <li class="view-as-grid selected">
                                        <a onclick="document.getElementById(&#39;mainbody_btnViewBase&#39;).click();" id="mainbody_btnViewBase1" title="Xem danh sách" href="javascript:__doPostBack(&#39;ctl00$mainbody$btnViewBase1&#39;,&#39;&#39;)"><span>grid</span></a>
                                    </li>
                                    
                                        <li class="view-as-list">
                                            <a onclick="document.getElementById(&#39;mainbody_bntViewDetail&#39;).click();" id="mainbody_bntViewDetail1" title="Xem chi tiết" href="javascript:__doPostBack(&#39;ctl00$mainbody$bntViewDetail1&#39;,&#39;&#39;)"><span>list</span></a>
                                        </li>
                            </ul>
                            <!-- PRODUCT LIST -->
                                <ul class="row product-list style2 grid">
                                <?php 
                                    while($row = mysqli_fetch_array($data["WebsiteMoiNhat"])){
                                        ?>
                                        <li class="col-sx-12 col-sm-3" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <div class="img-box">
                                                        <img class="img-responsive" itemprop="image" src="<?php echo $row["anhdemo"] ?>" alt="<?php echo $row["tencode"] ?>" title="<?php echo $row["tencode"] ?>" />
                                                    </div>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Download code" class="search" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html#Download'></a>
                                                    <a id="mainbody_rptList_Button4_0" title="Yêu thích code này" class="heart LikeSuccess" href="javascript:__doPostBack(&#39;ctl00$mainbody$rptList$ctl00$Button4&#39;,&#39;&#39;)"></a>
                                                </div>
                                                <div class="downview">
                                                    <span class="view-count2"><?php echo $row["luotxem"] ?></span>
                                                    <span class="down-count2"><?php echo $row["luottai"] ?></span>
                                                </div>
                                                <a class="cate" href='ngon-ngu-lap-trinh/wordpress-29.html'><?php echo $row["theloai"] ?></a>
                                            </div>
                                            <div class="right-block">
                                                <a itemprop="url" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <h2 itemprop="name" class="product-name bold" title="Download Share code tin tức wordpress giống Quantrimang.com"><?php echo $row["tencode"] ?></h2>
                                                </a>
                                                <div class="rateit" data-rateit-value="5"  data-rateit-readonly="true" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><meta itemprop="ratingValue" content="5"/><meta itemprop="reviewCount" content="1"/></div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                   <?php }
                                ?>      
                                </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                        </div>
                        <!--Ung dung noi bat-->
                        <div id="view-product-list" class="view-product-list">
                            <h1 class="page-heading">
                                <img alt="services" src="mvc/public/images/hot-icon.png" width="20px">
                                <span class="page-heading-title" itemprop="name">ỨNG DỤNG NỔI BẬT</span>
                            </h1>
                            <link itemprop="url" href="index.html" />
                            <meta itemprop="description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
                            <ul class="display-product-option">
                                
                                    <li class="view-as-grid selected">
                                        <a onclick="document.getElementById(&#39;mainbody_btnViewBase&#39;).click();" id="mainbody_btnViewBase1" title="Xem danh sách" href="javascript:__doPostBack(&#39;ctl00$mainbody$btnViewBase1&#39;,&#39;&#39;)"><span>grid</span></a>
                                    </li>
                                    
                                        <li class="view-as-list">
                                            <a onclick="document.getElementById(&#39;mainbody_bntViewDetail&#39;).click();" id="mainbody_bntViewDetail1" title="Xem chi tiết" href="javascript:__doPostBack(&#39;ctl00$mainbody$bntViewDetail1&#39;,&#39;&#39;)"><span>list</span></a>
                                        </li>
                            </ul>
                            <!-- PRODUCT LIST -->
                                <ul class="row product-list style2 grid">
                                <?php 
                                    while($row = mysqli_fetch_array($data["UngDungMoiNhat"])){
                                        ?>
                                        <li class="col-sx-12 col-sm-3" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <div class="img-box">
                                                        <img class="img-responsive" itemprop="image" src="<?php echo $row["anhdemo"] ?>" alt="<?php echo $row["tencode"] ?>" title="<?php echo $row["tencode"] ?>" />
                                                    </div>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Download code" class="search" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html#Download'></a>
                                                    <a id="mainbody_rptList_Button4_0" title="Yêu thích code này" class="heart LikeSuccess" href="javascript:__doPostBack(&#39;ctl00$mainbody$rptList$ctl00$Button4&#39;,&#39;&#39;)"></a>
                                                </div>
                                                <div class="downview">
                                                    <span class="view-count2"><?php echo $row["luotxem"] ?></span>
                                                    <span class="down-count2"><?php echo $row["luottai"] ?></span>
                                                </div>
                                                <a class="cate" href='ngon-ngu-lap-trinh/wordpress-29.html'><?php echo $row["theloai"] ?></a>
                                            </div>
                                            <div class="right-block">
                                                <a itemprop="url" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <h2 itemprop="name" class="product-name bold" title="Download Share code tin tức wordpress giống Quantrimang.com"><?php echo $row["tencode"] ?></h2>
                                                </a>
                                                <div class="rateit" data-rateit-value="5"  data-rateit-readonly="true" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><meta itemprop="ratingValue" content="5"/><meta itemprop="reviewCount" content="1"/></div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                   <?php }
                                ?>      
                                </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                        </div>
                         <!--Game noi bat-->
                         <div id="view-product-list" class="view-product-list">
                            <h1 class="page-heading">
                                <img alt="services" src="mvc/public/images/hot-icon.png" width="20px">
                                <span class="page-heading-title" itemprop="name">ỨNG DỤNG NỔI BẬT</span>
                            </h1>
                            <link itemprop="url" href="index.html" />
                            <meta itemprop="description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
                            <ul class="display-product-option">
                                
                                    <li class="view-as-grid selected">
                                        <a onclick="document.getElementById(&#39;mainbody_btnViewBase&#39;).click();" id="mainbody_btnViewBase1" title="Xem danh sách" href="javascript:__doPostBack(&#39;ctl00$mainbody$btnViewBase1&#39;,&#39;&#39;)"><span>grid</span></a>
                                    </li>
                                    
                                        <li class="view-as-list">
                                            <a onclick="document.getElementById(&#39;mainbody_bntViewDetail&#39;).click();" id="mainbody_bntViewDetail1" title="Xem chi tiết" href="javascript:__doPostBack(&#39;ctl00$mainbody$bntViewDetail1&#39;,&#39;&#39;)"><span>list</span></a>
                                        </li>
                            </ul>
                            <!-- PRODUCT LIST -->
                                <ul class="row product-list style2 grid">
                                <?php 
                                    while($row = mysqli_fetch_array($data["GameMoiNhat"])){
                                        ?>
                                        <li class="col-sx-12 col-sm-3" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <div class="img-box">
                                                        <img class="img-responsive" itemprop="image" src="<?php echo $row["anhdemo"] ?>" alt="<?php echo $row["tencode"] ?>" title="<?php echo $row["tencode"] ?>" />
                                                    </div>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Download code" class="search" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html#Download'></a>
                                                    <a id="mainbody_rptList_Button4_0" title="Yêu thích code này" class="heart LikeSuccess" href="javascript:__doPostBack(&#39;ctl00$mainbody$rptList$ctl00$Button4&#39;,&#39;&#39;)"></a>
                                                </div>
                                                <div class="downview">
                                                    <span class="view-count2"><?php echo $row["luotxem"] ?></span>
                                                    <span class="down-count2"><?php echo $row["luottai"] ?></span>
                                                </div>
                                                <a class="cate" href='ngon-ngu-lap-trinh/wordpress-29.html'><?php echo $row["theloai"] ?></a>
                                            </div>
                                            <div class="right-block">
                                                <a itemprop="url" href='source-code/share-code-tin-tuc-wordpress-giong-quantrimangcom-25266.html'>
                                                    <h2 itemprop="name" class="product-name bold" title="Download Share code tin tức wordpress giống Quantrimang.com"><?php echo $row["tencode"] ?></h2>
                                                </a>
                                                <div class="rateit" data-rateit-value="5"  data-rateit-readonly="true" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><meta itemprop="ratingValue" content="5"/><meta itemprop="reviewCount" content="1"/></div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                   <?php }
                                ?>      
                                </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                        </div>