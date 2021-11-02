
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Blog Manager</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">G&K</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Blog Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="javaScript:void();" class="dropdown-item">Action</a>
                        <a href="javaScript:void();" class="dropdown-item">Another action</a>
                        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
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
                    <div class="card-header"><i class="fa fa-table"></i> Blog Post</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="blog_manager" class="table table-light table-condensed table-responsive">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Except</th>
                                    <th>Visibility</th>
                                    <th>Views</th>
                                    <th>Written On</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($blogs as $blog):?>
                                <tr>
                                    <td><?= $blog -> blog_id?></td>
                                    <td><?= $blog -> blog_author?></td>
                                    <td><?= $blog -> blog_title?></td>
                                    <td><?=substr($blog -> blog_content,0,20).'...' ?></td>
                                    <td><?= $blog -> blog_visibility?></td>
                                    <td><?= $blog -> blog_view_count?></td>
                                    <td><?= $blog -> blog_written_on?></td>
                                    <td>

                                        <td><a href="javascript:void()" class="btn btn-sm btn-info"><i class="fa fa-pencil "></i> </a></td>
                                        <td><a href="javascript:void()" class="btn btn-sm btn-danger"><i class="fa fa-trash bg-danger"></i> </a></td>
                                        <td><a href="javascript:void()" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a></td>
                                    </td>

                                </tr>
                                <?php endforeach;?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
    <!-- End container-fluid-->