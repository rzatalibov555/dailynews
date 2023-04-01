


<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
<style>
    .fLeft {
        float: left;
    }
</style>


<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">

                                <!-- result() oldugu halda datalar foreach-a salinir! -->
                                <!-- row()    oldugu halda datalar foreach-a salinmir! -->

                                <!-- ------------------------------------- -->
                                <h1>Edit</h1>
                                <form action="<?php echo base_url('a_news_update_act/'.$single_news->n_id); ?>" method="post" enctype="multipart/form-data">

                                    <!-- ============================= AZ ================================================= -->
                                    <label for="title_az">Title az</label>
                                    <input name="title_az" type="text" id="title_az" class="form-control" placeholder="Enter title" value='<?php echo $single_news->n_title_az; ?>'>
                                    <br>
                                    <label for="desc_az">Description az</label>
                                    <textarea name="description_az" id="desc_az" cols="30" rows="10" class="form-control" placeholder="Enter description"><?php echo $single_news->n_description_az; ?></textarea>
                                    <br>
                                    <!-- ============================================================================== -->

                                    <!-- ============================= EN ================================================= -->
                                    <label for="title_en">Title en</label>
                                    <input name="title_en" type="text" id="title_en" class="form-control" placeholder="Enter title" value='<?php echo $single_news->n_title_en; ?>'>
                                    <br>
                                    <label for="desc_en">Description en</label>
                                    <textarea name="description_en" id="desc_en" cols="30" rows="10" class="form-control" placeholder="Enter description"><?php echo $single_news->n_description_en; ?></textarea>
                                    <br>
                                    <!-- ============================================================================== -->

                                    <!-- ============================= RU ================================================= -->
                                    <label for="title_ru">Title ru</label>
                                    <input name="title_ru" type="text" id="title_ru" class="form-control" placeholder="Enter title" value='<?php echo $single_news->n_title_ru; ?>'>
                                    <br>
                                    <label for="desc_ru">Description ru</label>
                                    <textarea name="description_ru" id="desc_ru" cols="30" rows="10" class="form-control" placeholder="Enter description"><?php echo $single_news->n_description_ru; ?></textarea>
                                    <br>
                                    <!-- ============================================================================== -->


                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2 me-2">
                                        <label for="date">Date</label>
                                        <input type="datetime-local" name="date" class="form-control" id="date" value="<?php echo $single_news->n_date; ?>">
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 fLeft mt-2 me-2">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="">-SELECT-</option>
                                            <?php foreach ($category as $item){ ?>
                                                <option <?php if($single_news->n_category == $item['c_id']){ echo "SELECTED"; } ?> value="<?php echo $item['c_id']; ?>"><?php echo $item['c_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2 me-2">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option <?php if($single_news->n_status == ""){ echo "SELECTED"; } ?> value="">-SELECT-</option>
                                            <option <?php if($single_news->n_status == "Active"){ echo "SELECTED"; } ?> value="Active">Active</option>
                                            <option <?php if($single_news->n_status == "Deactive"){ echo "SELECTED"; } ?> value="Deactive">Deactive</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2">
                                        <label for="img">Image</label>
                                        <input name="image" type="file" id="img" class="form-control">
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2">
                                        <label for="img">Current Image</label>
                                        <img width="100%" src="<?php echo base_url('uploads/news/'.$single_news->n_file); ?>" alt="">
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fLeft mt-3 d-grid">
                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                        <br>
                                        <br>
                                    </div>
                                    
                              
                                </form>

                               
                              
                                <!-- ------------------------------------- -->

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




