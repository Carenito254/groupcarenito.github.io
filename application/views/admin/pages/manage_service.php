
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Service App</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">G&K</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Service Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">service & more</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">

                <h6 class="text-uppercase">Services & More ...</h6>
                <hr>
                <div class="row">
                    <i class="bg bg-info"><?php foreach ($st as $nt){echo $nt;};?></i>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabe-13"><i class="icon-wrench"></i> <span class="hidden-xs">Services</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-14"><i class="icon-plus"></i> <span class="hidden-xs">Add Service</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-15"><i class="icon-envelope-open"></i> <span class="hidden-xs">Message</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void();"><i class="icon-settings"></i> <span class="hidden-xs">Setting</span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="tab" href="#tabe-16">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void();">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void();">Link 3</a>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="tabe-13" class="container tab-pane active">
                                        <br>
                                        <div class="table-responsive">
                                            <table id="blog_manager" class="table table-bordered table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Title</th>
                                                    <th>Provided As</th>
                                                    <th>Visibility</th>
                                                    <th>Registered On</th>
                                                    <th>Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($services as $service):?>
                                                    <tr>
                                                        <td><?= $service -> ser_id?></td>
                                                        <td><?= $service -> ser_name?></td>
                                                        <td>

                                                            <?php
                                                            if($service ->provide_as  == 1){echo '<i class="zmdi zmdi-menu"> Menu Item</i>';}
                                                            if($service ->provide_as  == 2){echo '<i class="zmdi zmdi-book"> Page</i>';}
                                                            if($service ->provide_as  == 3){echo '<i class="zmdi zmdi-select-all"> Menu Item & Page</i>';}
                                                            if($service ->provide_as  == 4){echo '<i class="zmdi zmdi-code"> Software App.Dev.Ops</i>';}
                                                            if($service ->provide_as  == 0){echo '<i class="zmdi zmdi-wrench"> Core Service</i>';}

                                                            ?>

                                                        </td>
                                                        <td><?= $service -> ser_visibility?></td>
                                                        <td><?= $service -> ser_registered_on?></td>
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
                                    <div id="tabe-14" class="container tab-pane fade">
                                        <hr>
                                        <form method="post" action="<?= base_url()?>services/add_service" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" name="ser_name">
                                                </div>
                                                </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Provide As</label>
                                                    <select class="form-control" name="provide_as">
                                                        <option value="0">Core Service & Page(default)</option>
                                                        <option value="1">Menu Item</option>
                                                        <option value="2">Page</option>
                                                        <option value="3">Menu Item & Page</option>
                                                        <option value="4">Software Application Dev Ops</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class type="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Service Icon</label>
                                                    <input class="form-control" type="file" name="service_icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class type="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Service Description</label>
                                                    <textarea id="summernoteEditor2" name="ser_content"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                            <button type="submit" class="btn btn-outline-primary">Save</button>
                                        </form>
                                    </div>

                                    <div id="tabe-15" class="container tab-pane fade">
                                        <p>This section has been left intentionally for future developments</p>
                                        todo:
                                        <ul>
                                            <li>app settings</li>
                                            <li>More service controls</li>
                                        </ul>
                                    </div>
                                    <div id="tabe-16" class="container tab-pane fade">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
<!-- End container-fluid-->
