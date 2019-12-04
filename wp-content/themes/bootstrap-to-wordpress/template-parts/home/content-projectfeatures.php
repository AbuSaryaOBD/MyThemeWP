<?php
$project_section_title    = get_field('project_section_title');
$project_section_body     = get_field('project_section_body');
?>

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

<?php wp_reset_query(); ?>