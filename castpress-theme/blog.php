<?php
/*
Template Name: blog
*/
?>

<?php get_header();?>
<main>
    <div class="container">
        <section class="blog">
            <h1 class="blog__title title">Blog</h1>
            <div class="blog__posts">

                <?php		
                global $post;

                $query = new WP_Query( [
                	'posts_per_page' => 4,
                    'paged'          => get_query_var( 'paged' ) ?: 1
                
                ] );
                
                if ( $query->have_posts() ) {
                	while ( $query->have_posts() ) {
                		$query->the_post();
                		?>
                		<div class="post-preview">
                            <div class="post-preview__img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/content/posts/1.jpg" alt="">
                            </div>
                            <div class="post-preview__wrapper">
                                <h3 class="post-preview__title">
                                    <a class="post-preview__link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="post-preview__date"><?php the_time(' M n, Y' ); ?></p>
                                <a href="<?php echo get_permalink(); ?>" class="post-preview__more">Read More</a>
                            </div>
                        </div>
                		<?php 
                	}
                } else {
                	// Постов не найдено
                }
                $wp_query = $query;
                the_posts_pagination(
                    $args = array(
                        'show_all'     => false, // показаны все страницы участвующие в пагинации
                        'end_size'     => 1,     // количество страниц на концах
                        'mid_size'     => 1,     // количество страниц вокруг текущей
                        'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text'    => __(''),
                        'next_text'    => __(''), 
                        'class'        => 'blog__paginations-nav', // CSS класс, добавлено в 5.5.0.

                    )
                );
                wp_reset_postdata(); // Сбрасываем $post
                ?>
               

        </section>
    </div>
</main>
<?php get_footer();?>