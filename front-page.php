<?php get_header(); ?>
<section class="home-hero">
    <div class="container"><h1>Portal do Cliente</h1></div>
</section>

<main class="container">
    <div class="home-grid">
        <?php 
        // 'order' => 'ASC' para pegar do mais antigo para o mais novo
        $args = array(
            'post_type'      => 'post', 
            'posts_per_page' => 6,
            'order'          => 'ASC' 
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
        ?>
            <article class="home-card">
                <div class="home-img-wrapper">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                </div>
                <div class="home-content">
                    <span class="home-category">
                        <?php $cat = get_the_category(); echo $cat ? esc_html($cat[0]->name) : ''; ?>
                    </span>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="home-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></div>
                    <a href="<?php the_permalink(); ?>" class="home-read-more">LEIA MAIS ></a>
                </div>
            </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</main>
<?php get_footer(); ?>