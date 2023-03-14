<?php
get_header();
?>

    <div class="main">
        <div class="container">
            <div class="content">
                <div class="category">
                    <?php wp_list_categories('orderby=name'); ?>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="content__post">
                        <div class="content__post-img"><a
                                    href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                        <div class="content__post-right">
                            <h2 class="content__post-title"><a
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="content__post-text"><?php the_excerpt(); ?></div>
                            <div class="content__post-taxonomy">
                                <?php
                                $categories = get_the_category();
                                $out = '';
                                if ($categories) {
                                    foreach ($categories as $category) {
                                        $out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>, ';
                                    }
                                    echo trim($out, ', ');
                                }
                                ?>
                            </div>
                            <div class="content__post-readmore"><a href="<?php the_permalink(); ?>">Read more</a></div>
                        </div>

                    </div>
                <?php endwhile;
                else:
                endif;
                the_posts_pagination();

                ?>
            </div>
            <div class="sidebar">
                <?php
                get_sidebar();
                ?>

            </div>
        </div>
    </div>
<?php
get_footer();
