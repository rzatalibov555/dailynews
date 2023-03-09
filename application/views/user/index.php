    <?php $this->load->view('user/includes/headerStyle'); ?>
    <?php $this->load->view('user/includes/header'); ?>

    <!-- Navbar End -->
 

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <?php foreach ($slider_left_side as $left_slider){ ?>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100"
                            src="<?php echo base_url('uploads/news/'.$left_slider['n_file']); ?>"
                            style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><?php echo $left_slider['c_name']; ?></a>
                                <a class="text-white"
                                    href=""><?php echo date("d-m-Y", strtotime($left_slider['n_date'])); ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold"
                                href="<?php echo base_url('single/'.$left_slider['n_id']); ?>"><?php echo $left_slider['n_title']; ?></a>
                        </div>
                    </div>
                    <?php } ?>



                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100"
                                src="<?php echo base_url('uploads/news/'.$idman['n_file']); ?>"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $idman['c_name']; ?></a>
                                    <a class="text-white"
                                        href=""><small><?php echo date("M d, Y", strtotime($idman['n_date'])); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                    href="<?php echo base_url('single/'.$idman['n_id']); ?>"><?php echo $idman['n_title']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100"
                                src="<?php echo base_url('uploads/news/'.$medeniyyet['n_file']); ?>"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $medeniyyet['c_name']; ?></a>
                                    <a class="text-white"
                                        href=""><small><?php echo date("M d, Y", strtotime($medeniyyet['n_date'])); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                    href="<?php echo base_url('single/'.$medeniyyet['n_id']); ?>"><?php echo $medeniyyet['n_title']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100"
                                src="<?php echo base_url('uploads/news/'.$biznes['n_file']); ?>"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $biznes['c_name']; ?></a>
                                    <a class="text-white"
                                        href=""><small><?php echo date("M d, Y", strtotime($biznes['n_date'])); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                    href="<?php echo base_url('single/'.$biznes['n_id']); ?>"><?php echo $biznes['n_title']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100"
                                src="<?php echo base_url('uploads/news/'.$texnologiya['n_file']); ?>"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $texnologiya['c_name']; ?></a>
                                    <a class="text-white"
                                        href=""><small><?php echo date("M d, Y", strtotime($texnologiya['n_date'])); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                    href="<?php echo base_url('single/'.$texnologiya['n_id']); ?>"><?php echo $texnologiya['n_title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">
                            Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">

                            <?php foreach($slider_left_side as $item){ ?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"
                                    href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title']; ?></a></div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">

                <?php foreach($slider_left_side as $item){ ?>

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>"
                        style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?php echo $item['c_name']; ?></a>
                            <a class="text-white"
                                href=""><small><?php echo date("M d, Y", strtotime($item['n_date'])); ?></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                            href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title']; ?></a>
                    </div>
                </div>

                <?php } ?>



            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>

                        <?php foreach($slider_left_side_next as $item){ ?>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" style="height:250px"
                                    src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>"
                                    style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href=""><?php echo $item['c_name']; ?></a>
                                        <a class="text-body"
                                            href=""><small><?php echo date('M d, Y', strtotime($item['n_date'])); ?></small></a>
                                    </div>
                                    


                                        <?php if (strlen($item['n_title']) > 60) { ?>
                                            <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title']), 0, 60, 'UTF-8') . '...'; ?>
                                            </a>
                                                
                                        <?php } else { ?>
                                            <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title']; ?>
                                            </a>
                                                
                                        <?php } ?>










                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        
                                        <?php if($item['a_img']){ ?>
                                            <img class="rounded-circle mr-2"
                                            src="<?php echo base_url('uploads/admin/'.$item['a_img']); ?>" width="25"
                                            height="25" alt="">
                                        <?php }else{ ?>
                                            <img class="rounded-circle mr-2"
                                            src="https://static.vecteezy.com/system/resources/thumbnails/012/210/707/small/worker-employee-businessman-avatar-profile-icon-vector.jpg" width="25"
                                            height="25" alt="">
                                        <?php } ?>

                                        <small><?php echo $item['a_name']; ?></small>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php } ?>











                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none"
                                style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">REKLAM</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid"
                                    src="<?php echo base_url('public/user/'); ?>img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

            

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <form action="<?php echo base_url('send_message'); ?>" method="post">
                                    <input name="email" type="text" class="form-control form-control-lg" placeholder="Your Email" style="width:200px;float:left">
                                    <div class="input-group-append" style="float:left;height:48px">
                                        <button type="submit" class="btn btn-primary font-weight-bold px-3">göndər</button>
                                    </div>
                                </form>

                                <?php if($this->session->flashdata('err')){ ?>
                                    <br>
                                   
                                    <div class="alert alert-danger alert-dismissible" style="width: 293px;">
                                        <small><?php echo $this->session->flashdata('err'); ?></small>
                                    </div>
                                 
                                <?php } ?>

                                <?php if($this->session->flashdata('ela')){ ?>
                                    <br>
                                   
                                    <div class="alert alert-success alert-dismissible" style="width: 293px;">
                                        <small><?php echo $this->session->flashdata('ela'); ?></small>
                                    </div>
                                 
                                <?php } ?>

                            </div>
                            
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">CATEGORY</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <?php foreach($category as $item){ ?>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1"><?php echo $item['c_name'] ?></a>
                                <?php } ?>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <?php $this->load->view('user/includes/footer'); ?>
    <?php $this->load->view('user/includes/footerScript'); ?>
    <!-- Footer End -->