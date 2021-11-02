
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Blog Editor</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">G&K</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Blog</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="javaScript:void();" class="dropdown-item" data-toggle="modal" data-target="#largesizemodal">Add blog category</a>
                        <a href="javaScript:void();" class="dropdown-item">Manage blog</a>
                        <a href="javaScript:void();" class="dropdown-item">Blog Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-uppercase bg-white">Blog editor</div>
                    <i class="bg bg-info"><?php foreach ($st as $nt){print_r($nt) ;};?></i>

                    <div class="card-body">
                            <form method="post" action="<?= base_url()?>admin/register_blog/" enctype="multipart/form-data">
                                <div class=" row">
                                    <div class="form-group col col-lg-4 col-md-6 col-sm-12">
                                        <label>Category</label>
                                        <select name="blog_category_id" class="form-control single-select">
                                            <?php foreach ($categories as $cat):?>
                                            <option value="<?= $cat ->blog_cat_id?>"><?=$cat ->cat_title?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group col col-lg-4 col-md-6 col-sm-12">
                                        <label>Title</label>

                                        <input  type="text" class="form-control" name="blog_title" placeholder="Angular components">
                                    </div>
                                    <div class="form-group col col-lg-4 col-md-6 col-sm-12">
                                        <label>Cover</label>
                                        <small>pic displayed in the blog header</small>
                                        <input type="file" name="blog_cover" class="form-control">
                                    </div>
                                </div>
                        <div class="row">
                            <div class="form-group col col-lg-4 col-md-6 col-sm-12">
                                <label>Author</label>
                                <input type="text"  name="blog_author" class="form-control" placeholder="Admin:Dev">
                            </div>
                        </div>

                        <div class="row">
                        <div class="form-group col col-lg-12 col-md-12 col-sm-12">
                            <label>Write your Blog</label>

                        <textarea id="summernoteEditor" name="blog_content"></textarea>
                        </div>
                        </div>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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