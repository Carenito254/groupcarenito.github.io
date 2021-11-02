<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Data Tables</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">G&K</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button><div class="dropdown-menu">
                        <a href="javaScript:void();" class="dropdown-item" data-toggle="modal" data-target="#largesizemodal">Add blog category</a>
                        <a href="javaScript:void();" class="dropdown-item">Manage blog</a>
                        <a href="javaScript:void();" class="dropdown-item">Blog Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($categories as $category)?>
                                <tr>
                                    <td><?= $category ->blog_cat_id?></td>
                                    <td><?= $category -> cat_title?></td>
                                    <td>edit/delete</td>


                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
</div><!--End wrapper-->

<!-- Modal -->
<div class="modal fade" id="largesizemodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Add new Blog Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" method="post" action="<?= base_url()?>blog/add_category">
                    <div class="form-group">
                        <div class="">
                            <input  class="form-control" name="cat_title" placeholder="category name">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
