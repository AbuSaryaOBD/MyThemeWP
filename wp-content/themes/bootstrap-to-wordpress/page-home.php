<?php
/*
    Template Name: Home Page
*/

// Custom Fields

$prelaunch_price    = get_post_meta(15, 'prelaunch_price', true);
$launch_price       = get_post_meta(15, 'launch_price', true);
$final_price        = get_post_meta(15, 'final_price', true);
$course_url         = get_post_meta(15, 'course_url', true);
$button_text        = get_post_meta(15, 'button_text', true);
$optin_text         = get_post_meta(15, 'optin_text', true);
$optin_button       = get_post_meta(15, 'optin_button', true);

// ACF
$income_feature_image    = get_field('income_feature_image');
$income_section_title    = get_field('income_section_title');
$income_section_desc     = get_field('income_section_description');
$reason_1_title          = get_field('reason_1_title');
$reason_1_desc           = get_field('reason_1_description');
$reason_2_title          = get_field('reason_2_title');
$reason_2_desc           = get_field('reason_2_description');

$who_feature_image       = get_field('who_feature_image');
$who_section_title       = get_field('who_section_title');
$who_section_body        = get_field('who_section_body');

$feature_section_image   = get_field('feature_section_image');
$feature_section_title   = get_field('feature_section_title');
$feature_section_body    = get_field('feature_section_body');

$project_section_title   = get_field('project_section_title');
$project_section_body    = get_field('project_section_body');

get_header();
?>

<!-- HERO 
=====================================================-->
<section id="hero" data-type="background" data-speed="2">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="logo" class="logo">
                </div>
                <!-- col  -->
                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name') ?></h1>
                    <p class="lead"><?php bloginfo('description') ?></p>
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div>
                        <!-- price  -->
                        <div class="price">
                            <h4>Launch Price <small>Coming soon!</small></h4>
                            <span><?php echo $launch_price; ?></span>

                        </div>
                        <!-- price  -->
                        <div class="price">
                            <h4>Final Price <small>Coming soon!</small></h4>
                            <span><?php echo $final_price ;?></span>

                        </div>
                        <!-- price  -->

                    </div>
                    <!-- price-timeline  -->
                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ;?>" role="button"><?php echo $button_text ;?></a></p>
                </div>
                <!-- col  -->
            </div>
            <!-- row  -->
        </div>
        <!-- container  -->
    </article>
</section>
<!-- hero  -->

<!-- OPT IN SECTION
    ====================================================== -->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead"><?php echo $optin_text ;?></p>
            </div>
            <!-- end of col-sm-8 -->
            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button ;?>
                </button>
            </div>
            <!-- end of col-sm-r -->
        </div>
        <!-- end of row -->
    </div>
    <!-- optin -->
</section>

<!-- BOOST YOUR INCOME
    ====================================================== -->
<section id="boost-income">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($income_feature_image)) : ?>
                <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
            <?php endif; ?>
            <h2><?php echo $income_section_title; ?></h2>
        </div>
        <!--  section-header -->
        <p class="lead"><?php echo $income_section_desc; ?></p>

        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_1_title; ?></h3>
                <p><?php echo $reason_1_desc; ?></p>

            </div>
            <!-- col -->
            <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>
                <p><?php echo $reason_2_desc; ?></p>

            </div>
            <!-- col -->
        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>

<!-- WHO BENEFITS
    ====================================================== -->
<section id="who-benefits">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($who_feature_image)) : ?>
                <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
            <?php endif; ?>
            <h2><?php echo $who_section_title; ?></h2>
        </div>
        <!-- section-header -->
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2"><?php echo $who_section_body; ?>            </div>
            <!-- thin col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- who-benefits -->

<!-- COURSE FEATURES
    ====================================================== -->
<section id="course-features">
    <div class="container">
        <div class="setion-header">
            <?php if (!empty($feature_section_image)) : ?>
                <img src="<?php echo $feature_section_image['url']; ?>" alt="<?php echo $feature_section_image['alt']; ?>">
            <?php endif; ?>
            <h2><?php echo $feature_section_title; ?></h2>
            <?php if (!empty($feature_section_body)) : ?>
                <p class="lead"><?php echo $feature_section_body; ?></p>
            <?php endif; ?>
        </div>
        <!-- section-header -->

        <div class="row">
            <?php $loop = new WP_Query(array(
                'post_type'=>'course_feature',
                'orderby'=>'post_id',
                'order'=>'ASC')) ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-sm-2">
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div>
                <!-- col -->
            <?php endwhile; ?>
        </div>
        <!-- row -->
    </div>
</section>

<!-- PROJECT FEATURES
    ======================================================= -->
<section id="project-features">
    <div class="container">
        <h2><?php echo $project_section_title; ?></h2>
        <p class="lead"><?php echo $project_section_body; ?></p>
        <div class="row">
            <?php $loop = new WP_Query(array(
                'post_type'=>'project_feature',
                'orderby'=>'post_id',
                'order'=>'ASC')) ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-sm-4">
                    <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
                    <!-- col-sm-4 -->
            <?php endwhile; ?>
        </div>
            <!-- Row -->
    </div>
        <!-- Container -->
</section>

<!-- VIDEO FEATURETTE
    ====================================================== -->
<section id="featurette"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>Wacth the course introduction</h2>
                <iframe src="#" width="100%" height="450" frameborder="2"></iframe>
            </div>
                <!-- col-sm-8 -->
        </div>
            <!-- Row -->
    </div>
        <!-- Container -->
</section>

<!-- INSTRUCTOR
    ====================================================== -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Your Instructor <small>No one</small></h2>
                    </div>
                        <!-- col-lg-8 -->
                    <div class="col-lg-4">
                        <a href="#" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.google.com/" target="_blank" class="badge social google"><i class="fa fa-google"></i></a>
                        <a href="#" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                        <!-- col-lg-4 -->
                </div>
                    <!-- Row -->
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde vero optio quisquam officia, perferendis non vitae animi dolor sunt fuga illo eius dicta explicabo culpa modi nisi enim rem quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde vero optio quisquam officia, perferendis non vitae animi dolor sunt fuga illo eius dicta explicabo culpa modi nisi enim rem quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde vero optio quisquam officia, perferendis non vitae animi dolor sunt fuga illo eius dicta explicabo culpa modi nisi enim rem quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde vero optio quisquam officia, perferendis non vitae animi dolor sunt fuga illo eius dicta explicabo culpa modi nisi enim rem quod.</p>
                <hr>
                <h3>The Numbers <small>They don't lie</small></h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                41,000 <span>students</span>
                            </div>
                                <!-- num-content -->
                        </div>
                            <!-- num -->
                    </div>
                        <!-- col-xs-4 -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                568 <span>reviews</span>
                            </div>
                                <!-- num-content -->
                        </div>
                            <!-- num -->
                    </div>
                        <!-- col-xs-4 -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                8 <span>courses</span>
                            </div>
                                <!-- num-content -->
                        </div>
                            <!-- num -->
                    </div>
                        <!-- col-xs-4 -->
                </div>
                    <!-- Row -->
            </div>
                <!-- col-sm-8 -->
        </div>
            <!-- Row -->
    </div>
        <!-- Container -->
</section>

<!-- TESTIMONIALS
    ====================================================== -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>What people Are Saying About Brad</h2>
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                    </div>
                        <!-- col-sm-4 -->
                    <div class="col-sm-8">
                        <blockquote>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ad recusandae, et ducimus quasi amet tempora suscipit voluptatibus vero fuga possimus dolor assumenda laudantium, animi provident nostrum voluptatem ut voluptate.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam deleniti quo adipisci asperiores, quidem quisquam, est sequi odit vero dicta, consequatur ratione cum optio minus. Libero esse tenetur expedita!
                            <cite>&mdash; Brennan, blah blah blah</cite>
                        </blockquote>
                    </div>
                        <!-- col-sm-8 -->
                </div>
                    <!-- Row Testimonial -->
                <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Brennan">
                        </div>
                            <!-- col-sm-4 -->
                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ad recusandae, et ducimus quasi amet tempora suscipit voluptatibus vero fuga possimus dolor assumenda laudantium, animi provident nostrum voluptatem ut voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam deleniti quo adipisci asperiores, quidem quisquam, est sequi odit vero dicta, consequatur ratione cum optio minus. Libero esse tenetur expedita!
                                <cite>&mdash; Ben, blah blah blah</cite>
                            </blockquote>
                        </div>
                            <!-- col-sm-8 -->
                    </div>
                        <!-- Row Testimonial -->
                <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Brennan">
                        </div>
                            <!-- col-sm-4 -->
                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ad recusandae, et ducimus quasi amet tempora suscipit voluptatibus vero fuga possimus dolor assumenda laudantium, animi provident nostrum voluptatem ut voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam deleniti quo adipisci asperiores, quidem quisquam, est sequi odit vero dicta, consequatur ratione cum optio minus. Libero esse tenetur expedita!
                                <cite>&mdash; aj, blah blah blah</cite>
                            </blockquote>
                        </div>
                            <!-- col-sm-8 -->
                    </div>
                        <!-- Row Testimonial -->
                <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Brennan">
                        </div>
                            <!-- col-sm-4 -->
                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ad recusandae, et ducimus quasi amet tempora suscipit voluptatibus vero fuga possimus dolor assumenda laudantium, animi provident nostrum voluptatem ut voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam deleniti quo adipisci asperiores, quidem quisquam, est sequi odit vero dicta, consequatur ratione cum optio minus. Libero esse tenetur expedita!
                                <cite>&mdash; Brennan, blah blah blah</cite>
                            </blockquote>
                        </div>
                            <!-- col-sm-8 -->
                    </div>
                        <!-- Row Testimonial -->
            </div>
                <!-- col-sm-8 col-sm-offset -->
        </div>
            <!-- Row -->
    </div>
        <!-- Container -->
</section>
<?php
get_footer();