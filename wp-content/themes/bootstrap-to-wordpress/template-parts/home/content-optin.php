<?php
$optin_text               = get_post_meta(15, 'optin_text', true);
$optin_button             = get_post_meta(15, 'optin_button', true);
?>

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