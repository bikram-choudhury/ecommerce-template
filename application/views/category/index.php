
<div id="content">
	<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Ladies</li>
                    </ul>
                </div>

                <div class="col-xs-4 col-sm-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <?php $this->load->view('includes/sidebar'); ?>

                    <!-- *** MENUS AND FILTERS END *** -->

                </div>

                <div class="col-xs-8 col-sm-9">
                    <div class="box">
                        <h3 class="inline">Ladies</h3>
                        <div class="products-showing">
                            <span><span>(Showing </span><span>1</span><span> – </span><span>12</span><span> products of </span><span>25</span><span> products)</span></span>
                        </div>
                        
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                        
                        <ul class="products-sort-by list-inline pull-right">
                            <li value="popularity">Popularity</li>
                            <li value="plth">Price -- Low to High</li>
                            <li value="phtl">Price -- High to Low</li>
                            <li value="new">Newest First</li>
                        </ul>
                        <div class="margin-small"></div>
                    </div>

                    <div class="row products">

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <a href="<?php echo site_url('category/details'); ?>" class="item_div" style="">
                                    <div class="">
                                        <div class="img_div">
                                            <span>
                                                <img src="<?php echo base_url('assets'); ?>/img/product1.jpg" alt="" class="img-responsive">
                                            </span>
                                        </div>
                                        <div class="text_div" style="padding: 10px;">
                                            <h5>Fur coat with very but very very long name</h5>
                                            <p class="price">$143.00 &ensp; <del>$280</del></p>
                                            <p style="color: #D51525; "><b>See similar products > </b></p>

                                            <p class="buttons text-center">
                                                <label class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</label>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <a href="<?php echo site_url('category/details'); ?>" class="item_div" style="">
                                    <div class="">
                                        <div class="img_div">
                                            <span>
                                                <img src="<?php echo base_url('assets'); ?>/img/product2.jpg" alt="" class="img-responsive">
                                            </span>
                                        </div>
                                        <div class="text_div" style="padding: 10px;">
                                            <h5>Fur coat with very but very very long name</h5>
                                            <p class="price">$143.00 &ensp; <del>$280</del></p>
                                            <p style="color: #D51525; "><b>See similar products > </b></p>

                                            <p class="buttons text-center">
                                                <label class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</label>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets'); ?>/img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                                    <p class="price"><del>$280</del> $143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets'); ?>/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets'); ?>/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets'); ?>/img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets'); ?>/img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets'); ?>/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">Fur coat</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
</div>
<!-- /#content -->
