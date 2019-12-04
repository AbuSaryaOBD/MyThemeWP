<?php
$video_feature_title      = get_field('video_feature_title');
$video_feature_url        = get_field('video_feature_url');
?>

<!-- VIDEO FEATURETTE
    ====================================================== -->
    <section id="featurette"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $video_feature_title; ?></h2>
                <!-- <iframe src="<?php //echo $video_feature_url; ?>" width="100%" height="450" frameborder="2"></iframe> -->
                <div class="embed-container">
                    <?php the_field('video_feature_embed'); ?>
                </div>
            </div>
                <!-- col-sm-8 -->
        </div>
            <!-- Row -->
    </div>
        <!-- Container -->
</section>