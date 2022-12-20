<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Bordered Table
                                    <a href="<?php echo base_url('a_news_create'); ?>">
                                        <button type="button" class="btn btn-success" style="float: right;">Create</button>
                                    </a>
                                </h5>

                                <div class="card-body">

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Category</th>
                                                    <th>Date</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                
                                                <?php foreach ($get_all as $items) { ?>

                                    
                                                    <tr>
                                                        <td><?php echo $items->n_id; ?></td>
                                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong><?php echo $items->n_title; ?></strong></td>
                                                        <td><?php echo $items->n_description; ?></td>
                                                        <td><?php echo $items->n_category; ?></td>
                                                        <td>
                                                            <?php echo date("d-m-Y H:i", strtotime($items->n_date)) ; ?>
                                                        </td>
                                                        <td>

                                                            <img width="100px" src="<?php echo base_url('uploads/news/'.$items->n_file); ?>" alt="">
                                                        </td>

                                                        <td>
                                                            <?php if($items->n_status == "Active"){ ?>
                                                                <span class="badge bg-label-success me-1"><?php echo $items->n_status; ?></span>
                                                            <?php }else if($items->n_status == "Deactive"){ ?>
                                                                <span class="badge bg-label-danger me-1"><?php echo $items->n_status; ?></span>
                                                            <?php }else{ ?>
                                                                <span class="badge bg-label-info me-1">UPSS</span>
                                                            <?php } ?>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="">
                                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <a href="">
                                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-trash me-1"></i> Delete
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerScript'); ?>