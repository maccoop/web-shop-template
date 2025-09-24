<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>

	<div class="mid-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-block footer-click">
						
						<a href="/" class="logo-wrapper mb-3 d-block ">	
							<!-- wp:site-logo {"width":202 } /-->
						</a>
						
						<div class="single-contact">
							<b>
								<?php
								$shop_name = get_option('woocommerce_store_full_name');	
								if ( $shop_name ) {
									echo esc_html( $shop_name );
								} else {
									bloginfo( 'name' );
								}
								?>
							</b>

						</div>
						<div class="single-contact">
							Mã số thuế 8070540677-888 do Bộ Tài Chính cấp ngày 01/02/2025
						</div>
						<div class="single-contact">
							<i class="fa fa-map-marker-alt"></i>
							<div class="content">Địa chỉ:
							<?php
							$shop_address = get_option('woocommerce_store_address');
							$shop_city    = get_option('woocommerce_store_city');
							if ( $shop_address || $shop_city ) {
								echo "<span>";
								echo esc_html( trim( $shop_address . ', ' . $shop_city) );
								echo "</span>";
							}
							?>
								
							</div>
						</div>
						<div class="single-contact">
							<i class="fa fa-mobile-alt"></i>
							<div class="content">
								<?php
								$shop_phone = get_option('woocommerce_store_phone');
								if ( $shop_phone ) {
									echo '<div class="shop-phone"><a href="tel:'.esc_attr($shop_phone).'">'.esc_html($shop_phone).'</a></div>';
								}
								?>
							</div>
						</div>
						<div class="single-contact">
							<i class="fa fa-envelope"></i>
							<div class="content">
								<?php
								$shop_email = get_option('woocommerce_store_email');
								if ( $shop_email ) {
									echo '<div class="shop-email"><a href="mailto:'.esc_attr($shop_email).'">'.esc_html($shop_email).'</a></div>';
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="footer-block footer-click">
								<h3 class="footer-title title-menu clicked">
									CHÍNH SÁCH
									<i class="fa fa-angle-down d-md-none d-inline-block"></i>
								</h3>
								<ul class="list-menu toggle-mn">
									
									<li class="li_menu">
										<a class="link" href="/chinh-sach-bao-mat-thong-tin" title="Chính sách bảo mật thông tin">Chính sách bảo mật thông tin</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/chinh-sach-bao-mat-thong-tin-thanh-toan" title="Chính sách bảo mật thông tin thanh toán">Chính sách bảo mật thông tin thanh toán</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/dieu-khoan-giao-dich-chung" title="Điều khoản giao dịch chung">Điều khoản giao dịch chung</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/chinh-sach-van-chuyen-giao-hang" title="Chính sách vận chuyển &amp; giao hàng">Chính sách vận chuyển &amp; giao hàng</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh toán</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-block footer-click">
								<h3 class="footer-title title-menu clicked">
									HỖ TRỢ KHÁCH HÀNG
									<i class="fa fa-angle-down d-md-none d-inline-block"></i>
								</h3>
								<ul class="list-menu toggle-mn">
									
									<li class="li_menu">
										<a class="link" href="/" title="Trang chủ">Trang chủ</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/cua-hang" title="Sản phẩm">Sản phẩm</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/chuong-trinh-khuyen-mai" title="Chương trình khuyến mãi">Chương trình khuyến mãi</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/loi-khuyen-cua-chuyen-gia" title="Lời khuyên của chuyên gia">Lời khuyên của chuyên gia</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/feedback-kh" title="Feedback KH">Feedback KH</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/chinh-sach-dai-ly" title="Chính sách đại lý">Chính sách đại lý</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/blog" title="Blog">Blog</a>
									</li>
									
									<li class="li_menu">
										<a class="link" href="/lien-he" title="Liên hệ">Liên hệ</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-block footer-click">
								
								<h3 class="footer-title title-menu">FANPAGE</h3>
								<div id="fb-page">
									<?php
										$shop_fb = get_option('woocommerce_store_facebook');
									?>
									<iframe 
										src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $shop_fb ?>&tabs=timeline&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true" 
										width="340" 
										height="130" 
										style="border:none;overflow:hidden" 
										scrolling="no" 
										frameborder="0" 
										allowfullscreen="true" 
										allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
									</iframe>

								</div>
								<ul class="follow_option d-flex flex-wrap align-items-center list-unstyled mt-2">	
									
									<li>
										<a class="facebook link" href="https://www.facebook.com/sang.050594" target="_blank" title="Theo dõi Facebook Mrpinzo">
											<img src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/facebook.png?1751449870639" width="32" height="32" alt="facebook">	
										</a>
									</li>
									
									
									<li>
										<a class="zalo link" href="https://zalo.me/0976500046" target="_blank" title="Theo dõi zalo HARITA">
											<img src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/zalo.png?1751449870639" width="32" height="32" alt="zalo">	
										</a>
									</li>
									
									
									<li>
										<a class="instgram link" href="#" target="_blank" title="Theo dõi instgram HARITA">
											<img src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/instagram.png?1751449870639" width="32" height="32" alt="instgram">	
										</a>
									</li>
									
																		<li>
										<a class="youtube link" href="#" target="_blank" title="Theo dõi youtube HARITA">
											<img src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/youtube.png?1751449870639" width="36" height="36" alt="youtube">	
										</a>
									</li>
									
																		<li>
										<a class="tiktok link" href="#" target="_blank" title="Theo dõi tiktok HARITA">
											<img src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/tiktok.png?1751449870639" width="36" height="36" alt="tiktok">	
										</a>
									</li>
									
								</ul>
															</div>

						</div>	
					</div>
					<div class="row">

						<div class="col-lg-4">
													</div>
						<div class="col-lg-4">

							
							<div class="trustbadge-wrap mt-4">
																								<div class="product-trustbadge d-flex flex-wrap align-items-center">
	<a href="/collections/all" target="_blank" title="Phương thức thanh toán">
		<img class=" img-fluid" src="//bizweb.dktcdn.net/100/478/630/themes/905975/assets/footer_trustbadge.png?1751449870639" alt="Phương thức thanh toán" width="277" height="34">
	</a>
</div>
														</div>
												</div>

				</div>
			</div>
		</div>
	</div>
</div>