<?php 
get_header()?>

<div class="back-home">
	<div class="aft-back-1">
		<img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<?php (new breadcrumbs())->render()?>
		</div>
	</div>
	<section id="single-product">
		<div class="container">
			<div class="tax-top">
				<h3><?php single_term_title()?></h3>
				<?php echo term_description()?>
			</div>
			<div class="single-product-other">
                <?php 
                $queried_object = get_queried_object();
                $term_id = $queried_object->term_id;
                $query = get_posts([
                    'post_type' => 'products',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'id',
                            'terms' => $term_id,
                        )
                     )
                ]);
                ?>
				<?php foreach( $query as $value ): ?>
					<div class="single-item">
						<div class="row">
							<div class="col-md-6">
								<?php if( get_field('gallery', $value->ID) ):?>
									<div class="single-item-img">
										<?php foreach( get_field('gallery', $value->ID) as $item ): ?>
											<div>
												<div class="single-item-blo">
													<?php echo wp_get_attachment_image( $item['id'], 'single-image-gallery' ); ?>
												</div>
											</div>
										<?php endforeach?>
									</div>
								<?php endif?>
							</div>
							<div class="col-md-6">
								<div class="single-item-txt">
									<h4><?php echo $value->post_title?></h4>
									<?php echo get_field('text', $value->ID)?>
									<div class="single-item-icon">
										<?php 
										$array = get_field('specifically', $value->ID);
										array_walk( $array , function( $value ){
											?>
											<div class="single-item-icon-item">
												<div>
													<span><?php echo $value['top']?></span>
												</div>
												<p><?php echo $value['bottom']?></p>
											</div>
											<?
										})?> 
									</div>
								</div>
							</div>
						</div>
					</div>	
				<?php endforeach?>
			</div>
		</div>
	</section>
	<div class="aft-back-2">
		<img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
	</div>
</div>

<?php get_footer();