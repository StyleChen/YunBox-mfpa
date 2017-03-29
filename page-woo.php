<?php //Template Name:Woo-Page Page
get_header(); ?>
    <style>
        .login-wrap a{color:#333;}
        .login-wrap a:hover{color:#FF5864;}
        html{
            font-size:16px;
        }
        body{
            background: url(wp-content/themes/kadima/images/di-bg.png) center ;
            background-attachment: fixed;
            -webkit-background-size: 100%;
            background-size: 100%;
        }
        .personal-bg h2{
            display: none;
        }

    </style>
    <div class="personal-bg">
        <div class="container">
            <div class="row kadima_blog_wrapper">
                <div class="col-md-12">
                    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
                                <?php the_content( __( 'Read More' , 'kadima' ) ); ?>
                        <?php
                    endwhile;
                    endif; ?>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
    </div>
