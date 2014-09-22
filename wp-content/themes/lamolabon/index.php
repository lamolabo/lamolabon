<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 contents_wrapper">
            <div class="contents_container">
                <div class="row">

                    <a href="<?php echo get_home_url(); ?>">
                        <img alt="<?php bloginfo('name'); ?>" class="center-block logo"
                             src="https://secure.static.tumblr.com/ee662035bf9410e9b5be862415689b50/kkdbdut/mXVnbrm2m/tumblr_static_38dwz3ndossgococcs8k048wc.png"/>
                    </a>


                    <div class="center-block text-center description">
                        <?php bloginfo('description'); ?>
                    </div>

                    <div class="center-block text-center menu">
                        <?php wp_nav_menu(['container' => false, 'menu_class' => 'nav nav-pills']); ?>
                    </div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <div class="center-block">
                            <h2 class="page_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="the_contents">
                            <?php the_content(); ?>
                        </div>

                        <?php if (has_category()): ?>
                            <p>カテゴリ: <?php the_category(' | '); ?></p>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>

                    <div class="footer text-right">
                        <p>&copy; la mola bon</p>
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>
<!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>