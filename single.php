<?php

/**
 * The main template file
 */

get_header();

if (have_posts()) {
	// Start the Loop.
	while (have_posts()) {
		the_post();
?>

<?php
		/*		if (in_category('beta')) {
			?>
</div>
<div class="beta row">
    <div class="stage">
        <div class="icon">
            <!--[if gte IE 9]><!-->
            <svg xmlns="http://www.w3.org/2000/svg" class="beta-icon" width="172.77" height="172.77"
                viewBox="0 0 172.773 172.772">
                <path fill="#222"
                    d="M168.98 101.34L157.42 85.2l11.2-16.4-16.87-10.5 4.07-19.43-19.6-3.24-3.67-19.5-19.34 4.5L102.36 4 86.2 15.56 69.8 4.36 59.3 21.24l-19.43-4.07-3.24 19.6-19.52 3.67 4.53 19.34L5 70.64 16.56 86.8l-11.2 16.4 16.87 10.48-4.07 19.43 19.6 3.27v.07c4.22-8.2 8.16-16.9 10.64-25.42 1.47-5.05 2.73-10.18 4.05-15.28L57 78.12c1.77-6.9 3.77-13.73 7.18-20.03 5.35-9.94 13.8-17.68 24.8-20.7 5.78-1.6 11.87-2.2 17.87-2.04 4.8.15 9.83.88 14.05 3.3 8.27 4.72 10.4 15.98 8.46 24.66-2.5 11.34-12.97 17.34-23.64 19.42 5.48 1.4 10.35 4.73 13.44 9.5 3.25 5.03 4.15 11.18 3.4 17.05-1.43 11.4-9.24 21.52-19.22 26.92-5.33 2.88-11.2 4.36-17.26 4.25-5.15-.1-11.48-1.2-14.56-5.83-2.8-4.2-2.05-11.18 3.4-12.75 2.24-.66 5.16-.65 6.72 1.4.66.84 1.05 1.9 1.26 2.94.27 1.35.1 2.74.4 4.07.55 2.4 3.05 3.87 5.4 3.26 2.46-.64 4.1-2.9 5.36-4.95 3.1-5 4.7-10.93 5.68-16.67 1.34-7.77 2.8-19.96-5.54-24.55-2.46-1.37-5.3-1.8-8.1-1.82.68-2.2 1.34-4.4 2-6.6.05-.1 2.75-.14 3.08-.17 1.2-.13 2.42-.35 3.6-.67 2.05-.56 4-1.47 5.7-2.76 4.05-3.08 6.22-8.23 7.73-12.93.87-2.66 1.4-5.4 1.58-8.2.15-2.6.15-5.5-.67-8-1.8-5.57-9.37-4.75-13.4-2.25-4.63 2.9-7.56 8.16-9.8 13-2.73 5.9-4.36 12.16-6.02 18.4-3.13 11.7-6.08 23.44-9.5 35.05-4.08 13.86-5.28 27.83-9.5 41.06L71.66 168l16.14-11.6 16.4 11.2 10.48-16.86 19.44 4.07 3.24-19.6 19.5-3.67-4.5-19.34L169 101.34z" />
            </svg>
            <!--<![endif]-->
        </div>

        <p>
            <strong>Beta</strong> —
            We’re reformatting our articles to work with the new site, but this is one hasn’t been done yet; it may
            contain formatting issues. <em>No need to report this.</em> We’re working on&nbsp;it.
        </p>
    </div>
</div>
<div class="stage">
    <?php
		}
*/
		?>

    <?php
		if (isset($_GET['inspire']) && $_GET['inspire'] == 'success') {
		?>
    <div class="row">
        <div class="ten offset-by-one column">
            <div class="inspiration-success">
                <h2><i class="fa fa-check success"></i> Got It!</h2>

                <p>
                    You’ve been added to the list. Look for inspiration shortly.
                </p>
            </div>
        </div>
    </div>
    <?php
		}
		?>

    <article>
        <div class="row">
            <div class="ten offset-by-one column">
                <h1>
                    <?php echo apply_filters('widont', get_the_title(), 12); ?>
                </h1>

                <div class="meta">
                    <div>
                        <?php
							$author_image = get_user_meta(get_the_author_meta('ID'), 'author_image', true);

							if (!$author_image) {
								// default image
								$author_image = '<div class="entry_author_image"><img src="' . esc_url(get_template_directory_uri()) . '/img/no-avatar.png" alt="Headshot for ' . get_the_author() . '"></div>';
							} else {
								$author_image = get_author_image();
							}

							?>
                        <div class="headshot">
                            <?php echo $author_image; ?>
                        </div>

                        <div class="details">
                            by <?php the_author(); ?><br>
                        </div>
                    </div>
                </div>

                <?php
					$source = get_post_meta(get_the_ID(), 'source', true);
					if ($source) {
					?>
                <p class="small source">
                    <em><?php echo apply_filters('widont', $source, 80); ?></em>
                </p>
                <?php
					}
					?>

                <?php
					$prearticle_ad = get_post_meta(get_the_ID(), 'prearticle_ad_text', true);
					if ($prearticle_ad) {
					?>
                <p class="prearticle-roll">
                    <?php echo apply_filters('widont', $prearticle_ad, 80); ?>
                </p>
                <?php
					}
					?>

                <?php the_content(); ?>

                <div class="post-article-date">
                    Published here on <?php the_date(); ?>.
                </div>

                <?php
					$postarticle_ad = get_post_meta(get_the_ID(), 'postarticle_ad_text', true);
					if ($postarticle_ad) {
					?>
                <p class="postarticle-roll">
                    <?php echo apply_filters('widont', $postarticle_ad, 80); ?>
                </p>
                <?php
					}
					?>

                <?php
					$bio = get_field('rich_biography', 'user_' . get_the_author_meta('ID'));

					if ($bio) {
					?>
                <footer class="about-the-author">
                    <h2>About the Author</h2>
                    <div class="headshot"><?php echo $author_image; ?></div>
                    <div class="blurb small">
                        <?php echo apply_filters('widont', $bio, 80); ?>
                    </div>
                </footer>
                <?php
					}
					?>
                <!-- AD SECTION -->


            <!-- START WIN AD -->
            <?php 
            $title = apply_filters('widont', get_the_title(), 12);
            $leslietitle = 'Yes. And...';
            $yes = 'Yes.';
            $leslies_yes_article = stripos($title, $yes);
            if( $leslies_yes_article === 0){ ?>
                <div class="loa_ad" id="loa_ad"
                        style="border-top: none;border-top:1px solid #ddd;padding:30px;margin-top:20px;background-color: #f3f3f3;">
                        <h2><strong>How to Win Stakeholders & Influence Decisions program</strong></h2>

                        <a href="https://winstakeholders.com/" target="_blank" alt="win-intensive-ad"><img id='win-banner'
                                src="https://asset.uie.com/img/2023-05-win-ad.png" style="width: 100%;"></a>


                        <p>
                            <strong>
                            Gain the power skills you need to grow your influence on critical product decisions.
                            </strong>
                        </p>

                        <p>
                        Get mentored and coached by Jared Spool in a 16-week program. 
                        </p>

                        <p><a href="https://winstakeholders.com/" style="font-weight: bold; text-decoration: none; color:#006F74;"
                                target="_blank">Learn more about our How to Win Stakeholders & Influence Decisions program today!</a></p>
                    </div>
                <?php } else { ?>
                    <div class="loa_ad" id="loa_ad"
                        style="border-top: none;border-top:1px solid #ddd;padding:30px;margin-top:20px;background-color: #f3f3f3;">
                        <h2><strong>Advanced Approaches to UX Research</strong></h2>

                        <a href="https://research.centercentre.com/" target="_blank" alt="research-intensive-ad"><img id='research-banner'
                                src="https://asset.uie.com/img/2023-06-research-ad.png" style="width: 100%;"></a>


                        <p>
                            <strong>
                            Drive Strategy • Gain Influence • Deliver Innovation
                            <br>
                            Intensive led by Jared Spool, June 5-9
                            </strong>
                        </p>

                        <p>
                        Guide your organization to make intelligent choices. Spend five 90-minute sessions discovering what your UX research efforts genuinely need. 
                        </p>

                        <p><a href="https://research.centercentre.com/" style="font-weight: bold; text-decoration: none; color:#662547;"
                                target="_blank">Save your spot for our Advanced Approaches to UX Research intensive today!</a></p>
                    </div>
                <?php }
            ?>
            
                <!-- END AD SECTION -->


                <section class="related">
                    <?php if (function_exists('echo_ald_crp')) echo_ald_crp(); ?>
                </section>
            </div>
        </div>
    </article>

    <?php
	}
} else {
	// If no content, include the "No posts found" template.
	get_template_part('content', 'none');
}

get_footer();
?>
<script>
    const research_banner = document.getElementById('research-banner');
    const win_banner = document.getElementById('win-banner');
    if (window.innerWidth < 500) {
        if ( research_banner ) {
            research_banner.setAttribute('src','https://asset.uie.com/img/2023-06-research-ad-mobile.png');
        } else {
            win_banner.setAttribute('src','https://asset.uie.com/img/2023-05-win-ad-mobile.png'); 
        }
    }


</script>