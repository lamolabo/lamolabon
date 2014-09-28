<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Latest compiled and minified CSS -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <!-- Optional theme -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css">

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

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=843194075690965&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-2 contents_wrapper">
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
                        <?php wp_nav_menu(['container' => false, 'menu_class' => 'list-inline']); ?>
                    </div>

                    <div class="center-block text-center category">
                        <?php wp_tag_cloud(['smallest' => 10, 'largest' => 10, 'taxonomy' => 'category']); ?>
                    </div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <div class="center-block">
                            <h2 class="page_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="the_contents">
                            <?php the_content(); ?>
                        </div>

                        <div class="post_date text-right text-muted">
                            <?php the_time("Y/m/d"); ?>
                        </div>

                        <?php if (has_category()): ?>
                            <p>カテゴリ: <?php the_category(' | '); ?></p>
                        <?php endif; ?>

                        <div class="text-left">
                            <a href="https://twitter.com/share" class="twitter-share-button"
                               data-url="<?php the_permalink(); ?>">Tweet</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + '://platform.twitter.com/widgets.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, 'script', 'twitter-wjs');</script>

                        </div>
                        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count"
                             data-action="like" data-show-faces="true" data-share="false"></div>

                    <?php endwhile; endif; ?>

                    <div class="text-center">
                        <?php global $wp_rewrite;
                        $paginate_base = get_pagenum_link(1);
                        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
                            $paginate_format = '';
                            $paginate_base = add_query_arg('paged', '%#%');
                        } else {
                            $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                                user_trailingslashit('page/%#%/', 'paged');;
                            $paginate_base .= '%_%';
                        }
                        $page_links = paginate_links(
                            array(
                                'base' => $paginate_base,
                                'format' => $paginate_format,
                                'total' => $wp_query->max_num_pages,
                                'mid_size' => 4,
                                'current' => ($paged ? $paged : 1),
                                'prev_text' => '«',
                                'next_text' => '»',
                                'type' => 'array',
                            )
                        );

                        if (count($page_links)) {
                            $r = "<ul class='pagination'>\n\t<li>";
                            $r .= join("</li>\n\t<li>", $page_links);
                            $r .= "</li>\n</ul>\n";

                            // うまく行ってない。ここは bootstrap との兼ね合い
                            echo str_replace("current", "active", $r);
                        }
                        ?>
                    </div>


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