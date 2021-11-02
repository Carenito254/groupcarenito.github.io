
<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="">
                <img src="<?= base_url()?>ext/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">G&K</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="<?= base_url()?>" class="waves-effect">
                    <i class="icon-globe"></i> <span>Site</span>
                </a>
            </li>
           <!-- <li>
                <a href="<?/*= base_url()*/?>en/" class="waves-effect">
                    <i class="icon-home"></i> <span>Dashboard</span>
                </a>
            </li>
-->

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-envelope"></i>
                    <span>Messages</span>
                    <small class="badge float-right badge-warning"><?= $this -> session -> ms_count?></small>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?= base_url()?>admin/inbox"><i class="fa fa-circle-o"></i> Inbox</a></li>
                </ul>
            </li>

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-note"></i> <span>Blog</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?= base_url()?>admin/blog_categories"><i class="fa fa-circle-o"></i> Categories</a></li>
                    <li><a href="<?= base_url()?>admin/new_blog"><i class="fa fa-circle-o"></i> New Blog</a></li>
                    <li><a href="<?= base_url()?>admin/blog_manager"><i class="fa fa-circle-o"></i> Blog Manager</a></li>
                </ul>
            </li>

            </li>
        </ul>

    </div>
    <!--End sidebar-wrapper-->
