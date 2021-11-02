<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Mail Inbox</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">G&K</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mail Inbox</li>
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
                    <div class="card-body">

                        <div class="row">

                            <!-- Left sidebar -->
                            <div class="col-lg-3 col-md-4">
                                <a href="mail-compose.html" class="btn btn-danger waves-effect waves-light btn-block">New Mail</a>
                                <div class="card mt-3">
                                    <div class="list-group">
                                        <a href="<?= base_url()?>admin/inbox" class="list-group-item active"><i class="fa fa-inbox mr-2"></i>New <b>(<?= $this -> session -> ms_count?>)</b></a>
                                        <a href="<?= base_url()?>admin/old_messages" class="list-group-item"><i class="fa fa-flag-checkered mr-2"></i>Read  <b>(<?= $this -> session -> msr_count?>)</b></a>

                                        <a href="javascript:void();" class="list-group-item"><i class="fa fa-star-o mr-2"></i>Starred</a>
                                        <a href="javascript:void();" class="list-group-item"><i class="fa fa-file-text-o mr-2"></i>Draft <b>(10)</b></a>
                                        <a href="javascript:void();" class="list-group-item"><i class="fa fa-paper-plane-o mr-2"></i>Sent Mail</a>
                                        <a href="javascript:void();" class="list-group-item"><i class="fa fa-trash-o mr-2"></i>Trash <b>(320)</b></a>
                                        <a href="javascript:void();" class="list-group-item"><i class="fa fa-bookmark mr-2"></i>Important <b>(5)</b></a>
                                        <a href="javascript:void();" class="list-group-item">Labels</a>
                                        <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-info float-right"></span>Work</a>
                                        <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-warning float-right"></span>Software</a>
                                        <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-primary float-right"></span>Feedback</a>
                                        <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-rose float-right"></span>Complaint</a>
                                    </div>
                                </div>


                            </div>
                            <!-- End Left sidebar -->

                            <!-- Right Sidebar -->
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group mr-1">
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-refresh"></i></button>
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <div class="btn-group mr-1">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i>
                                                    <b class="caret"></b>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="javaScript:void();" class="dropdown-item">Action</a>
                                                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mr-1">
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i>
                                                    <b class="caret"></b>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="javaScript:void();" class="dropdown-item">Action</a>
                                                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More
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

                                    <div class="col-lg-4">
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" placeholder="search mail">
                                            <div class="form-control-position">
                                                <i class="fa fa-search text-info"></i>
                                            </div>
                                        </div>
                                    </div>


                                </div> <!-- End row -->

                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                <?php
                                                foreach ($ms as $msg):
                                                    ?>
                                                    <tr>
                                                        <a href="<?=base_url()?>admin/read/<?= $msg -> message_id?>">
                                                            <td>
                                                                <div class="mail-checkbox">
                                                                    <input id="checkbox1" class="filled-in chk-col-primary" type="checkbox" checked="checked">
                                                                    <label for="checkbox1">
                                                                    </label>
                                                                </div>

                                                            </td>
                                                            <td class="mail-rateing">
                                                                <i class="fa fa-star"></i>
                                                            </td>
                                                            <td>
                                                                <a href="<?=base_url()?>admin/read/<?= $msg -> message_id?>"><?= $msg -> sender_name ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?=base_url()?>admin/read/<?= $msg -> message_id?>"><i class="fa fa-circle text-info mr-1"></i><?= substr($msg -> message.'...',0,50)?></a>
                                                            </td>
                                                            <td>
                                                                <i class="fa fa-paperclip"></i>
                                                            </td>
                                                            <td class="text-right">
                                                                <small><?= $msg ->send_on?></small>
                                                            </td>
                                                        </a>
                                                    </tr>
                                                <?php endforeach;?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-7">
                                                Showing 1 - 25 of 300
                                            </div>
                                            <div class="col-5">
                                                <div class="btn-group float-right">
                                                    <button type="button" class="btn btn-outline-secondary waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary waves-effect"><i class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- card body -->
                                </div> <!-- card -->
                            </div> <!-- end Col-9 -->

                        </div><!-- End row -->

                    </div>
                </div>
            </div>
        </div><!-- End row -->

    </div>
    <!-- End container-fluid-->