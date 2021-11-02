
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Application</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Client</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Request</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ap[plication</li>
                </ol
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <?php foreach ($application as $app): foreach ($service as $ser):

                    $image_path = explode('/',$ser ->ser_icon_url);

                    $path = $image_path[4].'/'.$image_path[5].'/'.$image_path[6];

                    ?>
                    <img src="<?= base_url().$path?>" class="card-img-top img-responsive" alt="Card image cap" style="height: 300px">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= $ser ->ser_name?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush list shadow-none">
                        <li class="list-group-item d-flex justify-content-between align-items-center"><?= $app ->app_name?><span class="badge badge-dark badge-pill">14</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in <span class="badge badge-success badge-pill">2</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros <span class="badge badge-danger badge-pill">1</span></li>
                    </ul>
                    <div class="card-body">
                        <a href="javascript:void();" class="card-link">Card link</a>
                        <a href="javascript:void();" class="card-link">Another link</a>
                    </div>
                    <?php endforeach; endforeach;?>
                </div>
            </div>

            <div class="col-lg-8">
                <?php  foreach ($application as $app):?>
                <div class="card">
                    <div class="card-header text-white bg-dark"><?= $app -> app_name?></div>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $app -> app_description?>

                        </p>
                    </div>
                    <div class="card-footer">Card footer</div>
                </div>
                <?php endforeach;?>

                <div class="row">

                    <div class="col-lg-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Quotation Form</div>
                                <br>
                                <div class="alert alert-icon-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <div class="alert-icon icon-part-info">
                                        <i class="icon-info"></i>
                                    </div>
                                    <div class="alert-message">
                                        <span><strong>Info!</strong>Sending a quotation is not an approval for project commencement. A project starts once a quoatation is accepted by a client and a down payment has ben made </span>
                                    </div>
                                </div>
                                <hr>
                                <form>
                                    <?php  foreach ($application as $app):?>
                                    <div class="form-group">
                                        <label for="input-1">Name</label>
                                        <input type="text" disabled class="form-control" id="input-1" value="<?= $app -> applicant_name?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Email</label>
                                        <input type="text" disabled class="form-control" id="input-2" value="<?= $app -> applicant_email?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Quotation Message</label>
                                        <small class="info"><i class="fa fa-info"> Remember to include a quote price and declare if this quote is negotiable</i></small>
                                        <textarea id="summernoteEditor3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="fa fa-money"></i> Send Quote</button>
                                    </div>
                                    <?php endforeach;?>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div><!--End Row-->
        </div>
    </div>
</div>