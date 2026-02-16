<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section class="post-banner-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></section>

    <main class="container">
        <article class="post-card-overlap">
            <div class="post-internal-img">
                <?php if (has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
            </div>

            <span class="post-badge-blue">
                <?php 
                $categories = get_the_category();
                if (!empty($categories)) { echo esc_html($categories[0]->name); } 
                ?>
            </span>

            <div class="post-meta-line">
                <div class="meta-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-data.png" alt="Data">
                    <?php echo get_the_date(); ?>
                </div>
                
                <div class="meta-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tag.png" alt="Tags">
                    <?php 
                    $post_tags = get_the_tags();
                    if ($post_tags) {
                        $tag_names = array();
                        foreach ($post_tags as $tag) {
                            $tag_names[] = $tag->name;
                        }

                        if (count($tag_names) > 1) {
                            // Pega a última tag para o "e"
                            $last_tag = array_pop($tag_names);
                            // Une o restante com vírgula e finaliza com " e "
                            echo esc_html(implode(', ', $tag_names) . ' e ' . $last_tag);
                        } else {
                            // Se houver apenas uma tag
                            echo esc_html($tag_names[0]);
                        }
                    } else {
                        echo 'Sem categorias';
                    }
                    ?>
                </div>
            </div>

            <h1 class="post-main-title"><?php the_title(); ?></h1>
            <span class="post-author-name">Autor: <?php the_author(); ?></span>

            <div class="post-main-content">
                <?php the_content(); ?>
            </div>
        </article>
    </main>
<?php endwhile; ?>

<?php get_footer(); ?>