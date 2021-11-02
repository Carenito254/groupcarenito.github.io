<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Applications</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Client</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Request</a></li>
                    <li class="breadcrumb-item active" aria-current="page">For Quote</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>App Name</th>
                                    <th>App Type</th>
                                    <th>Resolved</th>
                                    <th>Applied on</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($requests as  $request):?>
                                <tr>
                                    <td><?= $request -> applicant_name?></td>
                                    <td><?=  $request -> app_name?></td>
                                    <td><?= $request -> app_type?></td>
                                    <td><?php if ($request -> resolved ==0 ):?>
                                       <button class="btn btn-sm btn-danger">No</button>
                                        <?php else:?>
                                        <button class="btn btn-sm btn-success">Yes</button>
                                        <?php endif;?>
                                    </td>
                                    <td><?= $request -> applied_on?></td>
                                    <td><a href="<?= base_url().'admin/request_view/'.$request -> app_id?>"><i class="fa fa-eye" ></i> view</a></td>

                                </tr>
                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Client Name</th>
                                    <th>App Name</th>
                                    <th>App Type</th>
                                    <th>Resolved</th>
                                    <th>Applied on</th>
                                    <th>View</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>