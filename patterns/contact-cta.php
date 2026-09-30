<?php
/**
 * Title: Contact call to action
 * Slug: amaardev/contact-cta
 * Categories: amaardev
 * Description: A full-width contact band with a heading, a short paragraph and an email button.
 * Keywords: contact, cta, email, hire
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","anchor":"contact","backgroundColor":"ink","textColor":"base","className":"amaardev-contact","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignfull amaardev-contact has-base-color has-ink-background-color has-text-color has-background" id="contact" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Have a project in mind?', 'amaardev' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Tell me what you need and I will reply within one working day.', 'amaardev' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"ink"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-base-background-color has-text-color has-background wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Email me', 'amaardev' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
