<?php
/**
 * O template principal (fallback) do tema.
 * * @package Portal_Cliente
 */

get_header(); ?>

<main class="container" style="padding: 50px 0;">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
