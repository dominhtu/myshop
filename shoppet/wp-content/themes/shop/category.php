<!-- danh muc  -->

<?php get_header();?>
<div id="content">
    <div class="product-box page-category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="category-page-content">
                        <h1 class="cat-title"><?php single_cat_title()?></h1>
                        <?php if(have_posts()) :?>
                        <?php while(have_posts()) : the_post()?>
                        <div class="list-news">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="<?php the_permalink()?>">
                                        <?php the_post_thumbnail('full')?>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <h4>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                        <?php the_excerpt()?>
                                    </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
                    <div class="sidebar">
                        <?php get_sidebar()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>