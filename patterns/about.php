<?php

/**
 * Title: About
 * Slug: amaardev/about
 * Categories: amaardev
 * Description: Two-column about section with a heading and two short paragraphs.
 * Keywords: about, bio, intro, profile
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"76rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignfull"
    style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('A developer who also cares how it looks.', 'amaardev'); ?>
            </h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:paragraph -->
            <p><?php esc_html_e('I’m a self-taught developer with a designer’s eye. I work remotely with clients and agencies worldwide, from first sketch to launch day.', 'amaardev'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('I prefer simple, maintainable builds over clever ones: clean code, clear documentation, and sites your team can actually edit.', 'amaardev'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->