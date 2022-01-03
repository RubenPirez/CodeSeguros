<?php

if (!defined('ABSPATH')) {
    exit;
}

global $post, $product;

if (empty($product) || !$product->exists()) {
    return;
}

$subcategories_array = array(0);
$all_categories = wp_get_post_terms($product->id, 'product_cat');
foreach ($all_categories as $category) {
    $children = get_term_children($category->term_id, 'product_cat');
    if (!sizeof($children)) {
    $subcategories_array[] = $category->term_id;
    }
}

if (sizeof($subcategories_array) == 1) {
    return array();
}

$args = array(
    'orderby' => 'rand',
    'posts_per_page' => 4,
    'post_type' => 'product',
    'fields' => 'ids',
    'meta_query' => $meta_query,
    'tax_query' => array(
    array(
        'taxonomy' => 'product_cat',
        'field' => 'id',
        'terms' => $subcategories_array
    )
    )
);
 
$wp_query = new WP_Query($args);
 
 
 if ($wp_query->have_posts()):
    ?>

    <section class="related products">

    <h2><?php esc_html_e('Related products', 'woocommerce'); ?></h2>

    <?php woocommerce_product_loop_start(); ?>

    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <?php
        global $post, $product;

        $post_object = get_post($product->get_id());

        setup_postdata($GLOBALS['post'] = & $post_object);

        wc_get_template_part('content', 'product');
        ?>

    <?php endwhile; ?>

    <?php woocommerce_product_loop_end(); ?>

    </section>

    <?php
endif;


wp_reset_postdata();


?>