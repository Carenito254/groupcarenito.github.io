
<!-- Section -->
<div class="section white">
    <div class="container" id="posts">
        <div class="content center">

            <h5 class="t-black">THE BLOG</h5>
            <span class="line gold"></span>
            <h2 class="t-dark">Latest from the <span class="t-gold">Blog</span></h2>
            <div class="row text-justify mt-30">
                <?php foreach ($blog_posts as $blog_post):
                $get_image_path = $blog_post ->blog_image_url;
                $get_path = explode('/',$get_image_path);
                $real_path = base_url().$get_path[4].'/'.$get_path[5].'/'.$get_path[6];


                $dates = $blog_post -> blog_written_on ;
                $date = explode('-',$dates);
                $month = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                $month =$month[(int)$date[1]];

                $day = explode(' ',$date[2]);
                $day = $day[0];

                $category = '';
                foreach ($blog_categories as $blog_category){
                    if ($blog_category -> blog_cat_id == $blog_post){
                        $category .= $blog_category -> cat_title;
                    }
                }
                ?>

                <!-- Info Box -->
                <div class="col-lg-6 left mt-20" >
                    <div class="post-item">
                        <?php

                        $file_name = $get_path[6];
                        $type = explode('.',$file_name);

                        $type = $type[1];
                        $is_image = true ;
                             /*determine if the cover is an image or video*/
                             $image_template = array('jpg','png','gif');
                             $is_image = in_array($type,$image_template);

                            $video_template = array('ogg','mp4','m4p','m4v','avi','mov','flv','webm','mpg','mpg','wmv');
                             $is_video = in_array($type,$video_template);

                        ?>

                        <?php if ($is_image):?>
                        <img src="<?=$real_path?>" alt="exodus" class="img-fluid main">
                        <?php endif;?>

                        <?php if ($is_video):?>
                        <video controls>
                            <source src="<?= $real_path ?>" type="video/<?= $type?>">
                        </video>
                        <?php endif;?>
                        <a href="<?= base_url()?>blog/blog_post/<?= $blog_post->blog_id?>/<?= $blog_post -> blog_title?>"><h4 class="t-black"><?= $blog_post -> blog_title?></h4></a>
                        <div class="info-box-detail left">
                            <div class="post-info">By: <a class="author t-gold"><?= $blog_post -> blog_author?></a></div>
                            <span class="separation">/</span>
                            <div class="post-date"><?= $day .'/ '.$month?></div>
                            <div class="post-views">

                            </div>
                        </div>
                    </div>
                </div><!-- End -->
                <?php endforeach;?>


            </div>
        </div>
    </div>
</div><!-- Section Ends -->

