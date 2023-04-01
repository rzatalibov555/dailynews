<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>


    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Category: <?php echo $category['c_name_az']; ?></h4>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    <style>
                        .myImg{
                            width:245px;
                            height:108px;
                            object-fit:cover;
                        }
                    </style>
                        
                        <div class="col-lg-12">
                            
                            <?php foreach($category_of as $item){ ?>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid myImg" src="<?php echo base_url("uploads/news/".$item['n_file']); ?>" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $item['c_name_az']; ?></a>
                                            <a class="text-body" href=""><small><?php echo date("M d, Y", strtotime($item['n_date'])); ?></small></a>
                                        </div>
                                      

                                        <?php if (strlen($item['n_title_'.$this->session->userdata('site_lang')]) > 60) { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 60, 'UTF-8') . '...'; ?>
                                            </a>
                                                
                                        <?php } else { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title_'.$this->session->userdata('site_lang')]; ?>
                                            </a>
                                                
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            
                            
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Reklam</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="<?php echo base_url("public/user/"); ?>img/news-800x500-2.jpg" alt=""></a>
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
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $item['c_name_az']; ?></a>
                                            <a class="text-body" href=""><small><?php echo date("M d, Y", strtotime($item['n_date'])); ?></small></a>
                                        </div>

                                        <?php if (strlen($item['n_title_'.$this->session->userdata('site_lang')]) > 40) { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 40, 'UTF-8') . '...'; ?>
                                            </a>
                                                
                                        <?php } else { ?>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title_'.$this->session->userdata('site_lang')]; ?>
                                            </a>
                                                
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            <?php } ?>                 
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Category</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">

                                <?php foreach($category_list as $item){ ?>
                                    <a href="<?php echo base_url('category/'.$item['c_id']); ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $item['c_name_az']; ?></a>
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