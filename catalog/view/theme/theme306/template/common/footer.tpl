<div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<?php if ($informations) { ?>
			<div class="span2">
				<h3><?php echo $text_information; ?></h3>
				<ul>
				<?php foreach ($informations as $information) { ?>
				<li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
				<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<div class="span2">
				<h3><?php echo $text_service; ?></h3>
				<ul>
				<li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
				<li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
				<li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
				</ul>
			</div>
			<div class="span2">
				<h3><?php echo $text_extra; ?></h3>
				<ul>
				<li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
				<li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
				<li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
				<li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
				</ul>
			</div>
			<div class="span2">
				<h3><?php echo $text_account; ?></h3>
				<ul>
				<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
				<li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
				<li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
				<li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
				</ul>
			</div>
<!--			<div class="span2">
				<h3><?php echo $text_follow; ?></h3>
				<ul>
					<li><a href="http://facebook.com"><?php echo $text_fb; ?></a></li>
					<li><a href="http://twitter.com"><?php echo $text_twi; ?></a></li>
					<li><a href="#"><?php echo $text_rss; ?></a></li>
					<li><a href="http://youtube.com"><?php echo $text_yt; ?></a></li>
				</ul>
			</div>-->
			<div class="span4">
				<h3><?php echo $text_contact; ?></h3>
				<div class="foot-phone">
					<div><i class="icon-map-marker "></i><?php echo $address; ?></div>
					<div><i class="icon-phone"></i><?php echo $telephone; ?></div>
						<!--<div><?php echo $fax; ?></div>-->
				</div>
				<ul class="soc-icon">
					<li><a title="Facebook" class="tooltip-2" href="http://facebook.com" ><i class=" icon-facebook"></i></a></li>
					<li><a title="Twitter" class="tooltip-2" href="http://twitter.com" ><i class=" icon-twitter"></i></a></li>
					<li><a title="RSS" class="tooltip-2" href="#"><i class=" icon-rss"></i></a></li>					
				</ul>
				
			</div>
		</div>
		
	</div>
	<div id="powered">
		<div class="container">
			<div class="row">
				<div class="span12">
					<?php echo $powered; ?><!-- [[%FOOTER_LINK]] -->
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" 	src="catalog/view/theme/<?php echo $this->config->get('config_template');?>/js/livesearch.js"></script>
</div>
</div>
</div>
</body></html>