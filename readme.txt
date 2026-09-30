=== AmaarDev ===
Contributors: REPLACE-WITH-YOUR-WP-ORG-USERNAME
Tags: portfolio, blog, one-column, full-site-editing, block-patterns, style-variations, custom-colors, custom-logo, editor-style, featured-images, threaded-comments, translation-ready, wide-blocks
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

AmaarDev is a portfolio block theme for freelance developers, designers and small studios. A drafting-table aesthetic — Bricolage Grotesque display type, Literata serif body and a subtle blueprint grid — with a project index, a case-study template and three style variations.

== Description ==

AmaarDev is a full-site-editing portfolio theme built for people who build things. The front page is assembled from eight block patterns — hero, about, skills, projects index, services, process, testimonial and contact call to action — all editable in the Site Editor with no page builder and no theme options panel.

Portfolio items are regular posts: assign them to a category with the slug `projects` and tag them with your tech stack, and the Projects index pattern picks them up automatically with title, tags and year. The "Case study" post template gives project pages their own layout.

Three style variations ship with the theme: the light default, Dark, and Graphite. The theme bundles its fonts locally (no external requests), uses zero JavaScript on the front end, and respects `prefers-reduced-motion`.

== Installation ==

1. In your WordPress dashboard, go to Appearance > Themes > Add New > Upload Theme.
2. Choose the `amaardev.zip` file and click Install Now, then Activate.
3. Go to Appearance > Editor to customize templates, parts and style variations.
4. Optional: create a post category with the slug `projects`, publish posts in it, and tag them with your tech stack to fill the Projects index.

== Frequently Asked Questions ==

= How do I add portfolio projects? =

Publish a normal post, assign it to a category with the slug `projects`, and add tags for the tech stack (for example: WordPress, Shopify, PHP). The "Selected work" section on the front page lists them automatically with title, tags and year.

= What is the Case study template? =

A custom post template for in-depth project write-ups. Edit any post, open the Template panel in the sidebar, and switch it to "Case study" for a large title, tech-stack tags, a wide featured image and a contact call to action at the end.

= Can I change the colors and fonts? =

Yes. Every color, font family, font size and spacing value is defined in `theme.json` and adjustable in the Site Editor under Styles. The Dark and Graphite variations only re-map the palette, so anything you customize carries over.

= Does the theme load anything from external servers? =

No. Fonts are bundled in `assets/fonts/`, there are no CDN scripts, no Google Fonts links and no remote images.

= Is the demo content translatable? =

Yes. All pattern strings use the `amaardev` text domain and the theme is translation-ready.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

AmaarDev WordPress Theme, (C) 2026 Amaar Ahmed
AmaarDev is distributed under the terms of the GNU GPL v2 or later.

== Resources ==

* Bricolage Grotesque, Copyright 2022 The Bricolage Grotesque Project Authors (https://github.com/ateliertriay/bricolage). Licensed under the SIL Open Font License, Version 1.1. License text bundled in assets/fonts/LICENSE-bricolage-grotesque.txt.
* Literata, Copyright 2017 The Literata Project Authors (https://github.com/googlefonts/literata). Licensed under the SIL Open Font License, Version 1.1. License text bundled in assets/fonts/LICENSE-literata.txt.
* All imagery is CSS-generated (gradients and the drafting grid). No stock images are bundled.
