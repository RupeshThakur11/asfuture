<?php
/**
* Template for those pages which have no content.
* @since Business Consultr 1.0.0
*/
?>
<section class="wrapper wrap-detail-page error-404">
	<div class="container">
		<div class="inner-page-content">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
					<div class="content">
						<h1 class="section-title">
							<?php
								if( is_404() ){

									esc_html_e( 'PAGE NOT FOUND', 'business-consultr' ); 
								}else{

									esc_html_e( 'NOTHING FOUND', 'business-consultr' ); 
								}
							?>
						</h1>
						<h3>
							<?php
								if( is_404() ){

									esc_html_e( 'It looks like nothing was found. Want to try another by search?', 'business-consultr' ); 
								}else{

									esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps another searching can help.', 'business-consultr' ); 
								}
							?>
						</h3>
						<div class="content">
							<?php 
								if( is_404() ){
									get_search_form();
								}else{
									if( current_user_can( 'publish_posts' ) ){
								?>
										<a class="button" href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>">
										    <?php echo esc_html__( 'Add New Post', 'business-consultr' ); ?> 
										</a>
								<?php
									}else{
										get_search_form();
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>