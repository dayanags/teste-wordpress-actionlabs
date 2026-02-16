<?php get_header(); ?>
<div id="home-portal">
    <section class="hero-banner">
        <div class="container"><h1>Portal do Cliente</h1></div>
    </section>
    <main class="container">
        <div class="post-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-card">
                    <div class="card-img-wrapper">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="card-content">
                        <span class="card-badge"><?php $cat = get_the_category(); echo $cat[0]->name; ?></span>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Leia mais ></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>