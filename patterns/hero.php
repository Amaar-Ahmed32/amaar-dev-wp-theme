<?php
/**
 * Title: Hero
 * Slug: amaardev/hero
 * Categories: amaardev
 * Description: Large headline over a drafting grid, with a lede and two call-to-action buttons.
 * Keywords: hero, intro, headline, welcome
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"amaardev-hero","layout":{"type":"constrained","contentSize":"76rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignfull amaardev-hero" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'I build fast websites that are easy to change.', 'amaardev' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"amaardev-hero-after","layout":{"type":"constrained","contentSize":"38rem","justifyContent":"left"}} -->
<div class="wp-block-group amaardev-hero-after"><!-- wp:paragraph {"fontSize":"large","textColor":"muted"} -->
<p class="has-large-font-size has-muted-color has-text-color"><?php esc_html_e( 'Freelance developer working with small teams and agencies. WordPress, Shopify and custom PHP, built to pass Core Web Vitals and handed over with clear documentation.', 'amaardev' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#work"><?php esc_html_e( 'See selected work', 'amaardev' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start a project', 'amaardev' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
