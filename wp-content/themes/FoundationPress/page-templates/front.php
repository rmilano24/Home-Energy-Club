<?php
/*
Template Name: Front
*/
get_header(); ?>


<section id="hero-section">
	<div class="grid-x grid-padding-x align-justify">
		<div id="logo" class="cell small-5 medium-6">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/home-energy-club@2x.png" width="252" height="75" alt="Home energy club">
			</a>
		</div>
		<div id="clock" class="cell small-7 medium-6">
			<!-- <?php echo do_shortcode("[FlipClock id=60]"); ?> -->
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/clock.png" alt="Home energy club">
		</div>
	</div>

	<div id="hero-info" class="grid-x grid-padding-x align-bottom">
	  <div id="hero-left" class="small-4 cell">
			<?php $image = get_field('hero_image_left');
			if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
	  <div id="hero-center" class="small-8 medium-4 cell align-self-middle">
			<?php the_field('hero_content_block'); ?>
		</div>
		<div id="hero-right" class="small-4 cell show-for-medium">
			<?php $image = get_field('hero_image_right');
			if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
  </div>
</section>

<section id="see-savings">
	<div id="savings-form" class="grid-x grid-padding-x align-middle">
		<div class="medium-10 small-12 medium-offset-2 cell">
			<form>
			  <div class="grid-x grid-padding-x align-middle">
			    <div class="medium-8 small-12 cell">
			      <div class="grid-x grid-padding-x align-middle">
			        <div class="medium-7 small-6 cell">
			          <label for="right-label" class="right inline">Enter your zip code to see your energy savings</label>
			        </div>
			        <div class="medium-5 small-6 cell">
			          <input type="text" id="right-label" placeholder="Zip Code">
			        </div>
			      </div>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</section>

<section id="get-started" class="strip-white">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell medium-12">
				<h2><?php the_field('get_started_header'); ?></h2>
				<?php the_field('get_started_intro'); ?>
			</div>
		</div>
</section>

<section id="rates" class="strip-light-blue">

	<div id="questions">

		<div class="grid-x grid-padding-x ">
			<div id="question-1" class="cell medium-6 large-6">
				<div class="float-right">
					<span class="question"><span class="red">01.</span> Home size</span>
					<div class="isotope-button-group filters-button-group">
					  <button class="button is-checked" data-filter=".apartment">Apartment</button>
					  <button class="button" data-filter=".small-home">Small home</button>
					  <button class="button" data-filter=".large-home">Large home</button>
					</div>
				</div>
				</div>
			<div id="question-2" class="cell medium-6 large-6">
				<span class="question"><span class="red">02.</span> Your electricity rate</span>
				<div class="isotope-button-group filters-button-group">
				  <button class="button is-checked" data-filter="10c">10c</button>
				  <button class="button" data-filter=".11c">11c</button>
				  <button class="button" data-filter=".12c">12c</button>
					<button class="button" data-filter=".13c">13c</button>
				  <button class="button" data-filter=".14c">14c</button>
				</div>
			</div>
		</div>

	 </div> <!-- /#questions -->

	<?php the_field('plan_intro'); ?>

	<div class="grid-container">
  <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-4">

	<?php
				 $args = array(
					 'post_type' => 'plans',
					 'posts_per_page' => 30
				 );
				 $my_plans = new WP_Query( $args );
				 if( $my_plans->have_posts() ) {
					 while( $my_plans ->have_posts() ) {
						 $my_plans->the_post();
						 ?>

						 <div class="cell flex-container align-center">
 				      <div class="card">
 				        <div class="card-section">
									<div class="months">
										<span class="plan"><?php the_field('number_of_months'); ?> Month Plan</span>
									</div>
 				          <span class="price">$<?php the_field('savings'); ?><smaller>savings</smaller></span>
 									<span class="logo">
										<?php
										$image = get_field('provider_logo');
										if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?>
									</span>
 									<a class="button expanded" href="<?php echo get_permalink( $post->ID ); ?>">Sign Up</a>
 				        </div>
 				      </div>
 				    </div>

						 <?php
					 }
				 }
				 else {
					 echo 'There are currently no classes posted.';
				 }
			 ?>
			<?php wp_reset_query(); ?>

		</div>
	</div>


		<div id="view-more-button" class="grid-container">
		  <div class="grid-x grid-padding-x align-center">
					<a class="button view-more-button" href="#">View More</a>
			</div>
	  </div>

</section>


<section id="reasons" class="strip-white">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell medium-12">
				<h2><?php the_field('claim_header'); ?></h2>
				<?php the_field('claim_intro'); ?>
			</div>
		</div>

	<div class="grid-container">
		<div id="icons" class="grid-x grid-padding-x align-middle">
			<div class="cell medium-4">

				<?php
				$image = get_field('claim_icon_one');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>

				<h3><?php the_field('claim_icon_title_one'); ?></h3>
			</div>
			<div class="cell medium-4">
				<?php
				$image = get_field('claim_icon_two');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>

				<h3><?php the_field('claim_icon_title_two'); ?></h3>
			</div>
			<div class="cell medium-4">
				<?php
				$image = get_field('claim_icon_three');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>

				<h3><?php the_field('claim_icon_title_three'); ?></h3>
			</div>
		</div>
	</div>

</section>


<section id="offers" class="strip-light-blue">
	<div class="grid-x grid-padding-x">
		<div class="cell medium-12">
			<h2><?php the_field('offers_header'); ?></h2>
			<?php the_field('offers_intro'); ?>
		</div>
	</div>
	<div class="grid-container">
	<div class="grid-x grid-padding-x align-middle offer-grid">
		<div class="cell medium-4">
			<div class="product-wrapper">
				<div class="product-container">
					<?php
					$image = get_field('offer_image_one');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<h3><?php the_field('offer_title_one'); ?></h3>


				<div class="grid-x grid-padding-x align-bottom">
					<div class="cell medium-8">
						<span class="member-price">$<?php the_field('offer_member_price_one'); ?> <smaller>Member price</smaller></span>
					</div>
					<div class="cell medium-4">
						<span class="org-price">$<?php the_field('offer_original_price_one'); ?></span>
					</div>
				</div>

				<a class="button" data-open="modal1">Get Offer</a>

			</div>

			<div class="reveal" id="modal1" data-reveal>

				<div class="grid-x grid-padding-x align-top offer-grid">
				 <div class="cell medium-6">
					 <div class="product-wrapper">
						 <div class="product-container">
							 <?php
							 $image = get_field('offer_image_one');
							 if( !empty($image) ): ?>
							 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 <?php endif; ?>
						 </div>
						 <h3><?php the_field('offer_title_one'); ?></h3>


						 <div class="grid-x grid-padding-x align-bottom pricing">
							 <div class="cell medium-8">
								 <span class="member-price">$<?php the_field('offer_member_price_one'); ?> <smaller>Member price</smaller></span>
							 </div>
							 <div class="cell medium-4">
								 <span class="org-price">$<?php the_field('offer_original_price_one'); ?></span>
							 </div>
						 </div>

							<?php the_field('offer_modal_description_one'); ?>

					 </div>
				 </div>
				 <div class="cell medium-6">
							<h2>Fill Out This Form</h2>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/progress-bar.svg" alt="">
							<form>

								  <div class="row">
								    <div class="large-12 columns">
								      <label>Select Box
								        <select>
								          <option value="husker">Husker</option>
								          <option value="starbuck">Starbuck</option>
								          <option value="hotdog">Hot Dog</option>
								          <option value="apollo">Apollo</option>
								        </select>
								      </label>
								    </div>
								  </div>
								  <div class="row">
								    <div class="large-6 columns">
								      <label>Choose Your Favorite</label>
								      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
								      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
											<label>Choose Your Favorite</label>
										 <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
										 <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
								    </div>
								  </div>
									<a class="button expanded" href="#">Next</a>
								</form>
				 </div>
			 </div>

		  </div> <!-- /reveal -->

		</div>



		<div class="cell medium-4">
			<div class="product-wrapper">
				<div class="product-container">
					<?php
					$image = get_field('offer_image_two');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<h3><?php the_field('offer_title_two'); ?></h3>


				<div class="grid-x grid-padding-x align-bottom">
					<div class="cell medium-8">
						<span class="member-price">$<?php the_field('offer_member_price_two'); ?> <smaller>Member price</smaller></span>
					</div>
					<div class="cell medium-4">
						<span class="org-price">$<?php the_field('offer_original_price_two'); ?></span>
					</div>
				</div>

				<a class="button" data-open="modal2">Get Offer</a>
			</div>

			<div class="reveal" id="modal2" data-reveal>

				<div class="grid-x grid-padding-x align-top offer-grid">
				 <div class="cell medium-6">
					 <div class="product-wrapper">
						 <div class="product-container">
							 <?php
							 $image = get_field('offer_image_two');
							 if( !empty($image) ): ?>
							 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 <?php endif; ?>
						 </div>
						 <h3><?php the_field('offer_title_two'); ?></h3>


						 <div class="grid-x grid-padding-x align-bottom pricing">
							 <div class="cell medium-8">
								 <span class="member-price">$<?php the_field('offer_member_price_two'); ?> <smaller>Member price</smaller></span>
							 </div>
							 <div class="cell medium-4">
								 <span class="org-price">$<?php the_field('offer_original_price_two'); ?></span>
							 </div>
						 </div>

							<?php the_field('offer_modal_description_two'); ?>

					 </div>
				 </div>
				 <div class="cell medium-6">
							form goes here
				 </div>
			 </div>

		  </div> <!-- /reveal -->

		</div>
		<div class="cell medium-4">
			<div class="product-wrapper">
				<div class="product-container">
					<?php
					$image = get_field('offer_image_three');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<h3><?php the_field('offer_title_three'); ?></h3>


				<div class="grid-x grid-padding-x align-bottom">
					<div class="cell medium-8">
						<span class="member-price">$<?php the_field('offer_member_price_three'); ?> <smaller>Member price</smaller></span>
					</div>
					<div class="cell medium-4">
						<span class="org-price">$<?php the_field('offer_original_price_three'); ?></span>
					</div>
				</div>

				<a class="button" data-open="modal3">Get Offer</a>
			</div>

		</div>

		<div class="reveal" id="modal3" data-reveal>

			<div class="grid-x grid-padding-x align-top offer-grid">
			 <div class="cell medium-6">
				 <div class="product-wrapper">
					 <div class="product-container">
						 <?php
						 $image = get_field('offer_image_three');
						 if( !empty($image) ): ?>
						 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						 <?php endif; ?>
					 </div>
					 <h3><?php the_field('offer_title_three'); ?></h3>


					 <div class="grid-x grid-padding-x align-bottom pricing">
						 <div class="cell medium-8">
							 <span class="member-price">$<?php the_field('offer_member_price_three'); ?> <smaller>Member price</smaller></span>
						 </div>
						 <div class="cell medium-4">
							 <span class="org-price">$<?php the_field('offer_original_price_three'); ?></span>
						 </div>
					 </div>

						<?php the_field('offer_modal_description_three'); ?>

				 </div>
			 </div>
			 <div class="cell medium-6">
						form goes here
			 </div>
		 </div>

		</div> <!-- /reveal -->

	</div>
</div><!-- /.grid-container -->

		<!-- START GREEN PRODUCTS -->

		<div id="green-products" class="grid-x grid-padding-x">
			<div class="cell medium-12">
				<h2><?php the_field('green_offers_header'); ?></h2>
				<?php the_field('green_offers_intro'); ?>
			</div>
		</div>
		<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle offer-grid">
			<div class="cell medium-4">
				<div class="product-wrapper">
					<div class="product-container">
						<?php
						$image = get_field('green_offer_image_one');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<h3><?php the_field('green_offer_title_one'); ?></h3>


					<div class="grid-x grid-padding-x align-bottom">
						<div class="cell medium-8">
							<span class="member-price">$<?php the_field('green_offer_member_price_one'); ?> <smaller>Member price</smaller></span>
						</div>
						<div class="cell medium-4">
							<span class="org-price">$<?php the_field('green_offer_original_price_one'); ?></span>
						</div>
					</div>

					<a class="button" data-open="modal4">Get Offer</a>
				</div>

				<div class="reveal" id="modal4" data-reveal>

					<div class="grid-x grid-padding-x align-top offer-grid">
					 <div class="cell medium-6">
						 <div class="product-wrapper">
							 <div class="product-container">
								 <?php
								 $image = get_field('green_offer_image_one');
								 if( !empty($image) ): ?>
								 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								 <?php endif; ?>
							 </div>
							 <h3><?php the_field('green_offer_title_one'); ?></h3>


							 <div class="grid-x grid-padding-x align-bottom pricing">
								 <div class="cell medium-8">
									 <span class="member-price">$<?php the_field('green_offer_member_price_one'); ?> <smaller>Member price</smaller></span>
								 </div>
								 <div class="cell medium-4">
									 <span class="org-price">$<?php the_field('green_offer_original_price_one'); ?></span>
								 </div>
							 </div>

								<?php the_field('green_offer_modal_description_one'); ?>

						 </div>
					 </div>
					 <div class="cell medium-6">
								form goes here
					 </div>
				 </div>

				</div> <!-- /reveal -->

			</div>
			<div class="cell medium-4">
				<div class="product-wrapper">
					<div class="product-container">
						<?php
						$image = get_field('green_offer_image_two');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<h3><?php the_field('green_offer_title_two'); ?></h3>


					<div class="grid-x grid-padding-x align-bottom">
						<div class="cell medium-8">
							<span class="member-price">$<?php the_field('green_offer_member_price_two'); ?> <smaller>Member price</smaller></span>
						</div>
						<div class="cell medium-4">
							<span class="org-price">$<?php the_field('green_offer_original_price_two'); ?></span>
						</div>
					</div>

					<a class="button" data-open="modal5">Get Offer</a>
				</div>

				<div class="reveal" id="modal5" data-reveal>

					<div class="grid-x grid-padding-x align-top offer-grid">
					 <div class="cell medium-6">
						 <div class="product-wrapper">
							 <div class="product-container">
								 <?php
								 $image = get_field('green_offer_image_two');
								 if( !empty($image) ): ?>
								 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								 <?php endif; ?>
							 </div>
							 <h3><?php the_field('green_offer_title_two'); ?></h3>


							 <div class="grid-x grid-padding-x align-bottom pricing">
								 <div class="cell medium-8">
									 <span class="member-price">$<?php the_field('green_offer_member_price_two'); ?> <smaller>Member price</smaller></span>
								 </div>
								 <div class="cell medium-4">
									 <span class="org-price">$<?php the_field('green_offer_original_price_two'); ?></span>
								 </div>
							 </div>

								<?php the_field('green_offer_modal_description_two'); ?>

						 </div>
					 </div>
					 <div class="cell medium-6">
								form goes here
					 </div>
				 </div>

				</div> <!-- /reveal -->

			</div>
			<div class="cell medium-4">

				<div class="product-wrapper">
					<div class="product-container">
						<?php
						$image = get_field('green_offer_image_three');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<h3><?php the_field('green_offer_title_three'); ?></h3>


					<div class="grid-x grid-padding-x align-bottom">
						<div class="cell medium-8">
							<span class="member-price">$<?php the_field('green_offer_member_price_three'); ?> <smaller>Member price</smaller></span>
						</div>
						<div class="cell medium-4">
							<span class="org-price">$<?php the_field('green_offer_original_price_three'); ?></span>
						</div>
					</div>

					<a class="button" data-open="modal6">Get Offer</a>
				</div>

			</div>

			<div class="reveal" id="modal6" data-reveal>

				<div class="grid-x grid-padding-x align-top offer-grid">
				 <div class="cell medium-6">
					 <div class="product-wrapper">
						 <div class="product-container">
							 <?php
							 $image = get_field('green_offer_image_three');
							 if( !empty($image) ): ?>
							 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 <?php endif; ?>
						 </div>
						 <h3><?php the_field('green_offer_title_three'); ?></h3>


						 <div class="grid-x grid-padding-x align-bottom pricing">
							 <div class="cell medium-8">
								 <span class="member-price">$<?php the_field('green_offer_member_price_three'); ?> <smaller>Member price</smaller></span>
							 </div>
							 <div class="cell medium-4">
								 <span class="org-price">$<?php the_field('green_offer_original_price_three'); ?></span>
							 </div>
						 </div>

							<?php the_field('green_offer_modal_description_three'); ?>

					 </div>
				 </div>
				 <div class="cell medium-6">
							form goes here
				 </div>
			 </div>

			</div> <!-- /reveal -->

		</div>
	</div><!-- /.grid-container -->

</section>


<section id="faqs" class="strip-white">
		<div class="grid-x grid-padding-x align-middle lead-in">
			<div class="cell medium-12">
				<h2><?php the_field('faq_header'); ?></h2>
				<?php the_field('faq_intro'); ?>
			</div>
		</div>

		<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell medium-12">
				<ul class="accordion" data-accordion>
				  <li class="accordion-item" data-accordion-item>
				    <a href="#" class="accordion-title"><?php the_field('question_one'); ?></a>
				    <div class="accordion-content" data-tab-content >
				      <?php the_field('answer_one'); ?>

				    </div>
				  </li>
				  <li class="accordion-item" data-accordion-item>
				    <a href="#" class="accordion-title"><?php the_field('question_two'); ?></a>
				    <div class="accordion-content" data-tab-content>
				     <?php the_field('answer_two'); ?>
				    </div>
				  </li>
				  <li class="accordion-item" data-accordion-item>
				    <a href="#" class="accordion-title"><?php the_field('question_three'); ?></a>
				    <div class="accordion-content" data-tab-content>
				      <?php the_field('answer_three'); ?>
				    </div>
				  </li>
					<li class="accordion-item" data-accordion-item>
				    <a href="#" class="accordion-title"><?php the_field('question_four'); ?></a>
				    <div class="accordion-content" data-tab-content>
				       <?php the_field('answer_four'); ?>
				    </div>
				  </li>
					<li class="accordion-item" data-accordion-item>
				    <a href="#" class="accordion-title"><?php the_field('question_five'); ?></a>
				    <div class="accordion-content" data-tab-content>
				       <?php the_field('answer_five'); ?>
				    </div>
				  </li>
				</ul>
			</div>
		</div>
	</div> <!-- /.grid-container -->

</section>


<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<!-- <footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer> -->
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>


<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer();
