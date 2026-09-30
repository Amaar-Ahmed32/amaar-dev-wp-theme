<?php
/**
 * Title: Projects index
 * Slug: amaardev/projects-index
 * Categories: amaardev
 * Description: A ruled index of project posts showing title, tech-stack tags and year. Uses the Projects category when it exists.
 * Keywords: projects, portfolio, work, index, case studies
 * Viewport Width: 1400
 *
 * Looks up the "projects" post category at registration time and, when it
 * exists, limits the query to it. Otherwise the latest posts are shown.
 */

$amaardev_query_args = array(
	'perPage'  => 6,
	'postType' => 'post',
	'order'    => 'desc',
	'orderBy'  => 'date',
	'inherit'  => false,
);

$amaardev_projects_category = get_category_by_slug( 'projects' );
if ( $amaardev_projects_category instanceof WP_Term ) {
	$amaardev_query_args['taxQuery'] = array(
		'category' => array( (int) $amaardev_projects_category->term_id ),
	);
}

$amaardev_query_json = wp_json_encode( $amaardev_query_args );
?>
<!-- wp:group {"align":"full","anchor":"work","layout":{"type":"constrained","contentSize":"76rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignfull" id="work" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Selected work', 'amaardev' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":<?php echo $amaardev_query_json; ?>,"className":"amaardev-index"} -->
<div class="wp-block-query amaardev-index"><!-- wp:post-template -->
<!-- wp:group {"className":"amaardev-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group amaardev-row"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->

<!-- wp:post-date {"format":"Y","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'No projects yet. Publish a post in the Projects category and add tags for the tech stack.', 'amaardev' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
