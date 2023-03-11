<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>

<!-- <?php print_r('<pre>'); ?>
<?php print_r($single_data); ?> -->

    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            <?php foreach($slider_left_side as $item){ ?>
                            <div class="text-truncate">
                                <a class="text-uppercase font-weight-semi-bold" href="<?php echo base_url('single/'.$item['n_id']); ?>">
                                    <?php echo $item['n_title']; ?>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="<?php echo base_url('uploads/news/'.$single_data['n_file']); ?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><?php echo $single_data['c_name'] ?></a>
                                <a class="text-body" href=""><?php echo date('M d, Y', strtotime($single_data['n_date'])); ?></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?php echo $single_data['n_title']; ?></h1>
                            <p><?php echo $single_data['n_title']; ?></p>
                            
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <?php if($single_data['a_img']){ ?>
                                    <img class="rounded-circle mr-2" src="<?php echo base_url('uploads/admin/'.$single_data['a_img']); ?>" width="25" height="25" alt="">
                                <?php }else{ ?>
                                    <img class="rounded-circle mr-2" src="https://static.vecteezy.com/system/resources/thumbnails/012/210/707/small/worker-employee-businessman-avatar-profile-icon-vector.jpg" width="25" height="25" alt="">
                                <?php } ?>
                                
                                
                                <span><?php echo $single_data['a_name']; ?></span>
                            </div>
                          
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <!-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="<?php echo base_url('public/user/'); ?>img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo base_url('public/user/'); ?>img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="<?php echo base_url('public/user/'); ?>img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum.</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <!-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4">
                   

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Last News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            
                                        <style>
                                            .myImgSize{
                                                width :120px;
                                                height: 110px;
                                                object-fit:cover;
                                            }
                                        </style>
                        
                            <?php foreach($limit_5_news as $item){ ?>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid myImgSize" src="<?php echo base_url("uploads/news/".$item['n_file']); ?>" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $item['c_name']; ?></a>
                                            <a class="text-body" href=""><small><?php echo date("M d, Y", strtotime($item['n_date'])); ?></small></a>
                                        </div>

                                        <?php if (strlen($item['n_title']) > 40) { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title']), 0, 40, 'UTF-8') . '...'; ?>
                                            </a>
                                                
                                        <?php } else { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title']; ?>
                                            </a>
                                                
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            <?php } ?>                 
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">CATEGORY</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <?php foreach($category as $item){ ?>
                                    <a href="<?php echo base_url('category/'.$item['c_id']); ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $item['c_name']; ?></a>
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
