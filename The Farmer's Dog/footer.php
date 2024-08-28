<?php
include 'variable.php';
?>


<section class="container-fluid">
	<div class="row footer py-4">
		<div class="col-12 text-center">
			<!-- <img class="logo" src="public/img/logo.png" width="180" alt=""> -->
		</div>
		<div class="col-12 my-2">
		<div class="col-12 my-2">
			<div class="row justify-content-center">
				<div class="col-auto">
					<a href="index.php" style="text-decoration:none;" class="cr-pointer">Homepage |</a>
					<a href="contact.php" style="text-decoration:none;" class="cr-pointer">Contact |</a>
					<a href="terms.php" target="_blank" class="cr-pointer">Terms & Conditions |</a> 
					<a href="privacy.php" target="_blank" class="cr-pointer">Privacy Policy</a> 
					
				</div>
			</div>
		</div>
			<p class="f-11 text-left">
				*THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE*
				ATTENTION: ALL CONTENT AND INFORMATION FOUND IN THE <?php echo $nombre; ?> WEBSITE AND AFFILIATED LINKS
				 (COLLECTIVELY REFERRED TO HEREIN AS "WE", “US” OR "OUR") 
				<?php echo $dominio; ?>
				is a participant in the <?php echo $nombre; ?> Associates Program, an affiliate advertising program designed to provide a way for web owners to gain
				 advertising fees by advertising and linking to <?php echo $dominio; ?> website. Testimonials and comments found within our website are unverified results that have 
				 been sent to us by appreciative customers, which are representative of typical or average consumers, and are not intended to guarantee that everyone 
				 will achieve the exact same results. Our website content is provided as a service; all content is solely for informational purpose only. MARKETING DISCLOSURE:
					 This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. 
					 The owner receives payment whenever a qualified lead is referred but that is the extent of it. ADVERTISING DISCLOSURE: This website and the products & services
					  referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site 
					  are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
			</p>

		</div>
		<div class="col-12 f-11">
			<p style="line-height: 140%; text-align: center; font-size: 14px;">
				<span style="font-size: 14px; line-height: 19.6px;">
					© Copyright <o class="year-now" >  </o> All rights reserved <?php echo $nombre; ?>
				</span>
			</p>
		</div>
		<div class="col-12 f-11">
			<p style="line-height: 140%; text-align: center; font-size: 12px;">
			<?php echo $direccion; ?>
			</p>
		</div>
		<div class="col-12 f-11">
			<p style="line-height: 140%; text-align: center; font-size: 12px;">
				support@<?php echo $dominio; ?>.com
			</p>
		</div>
	</div>
</section>



<style type="text/css">
<?php
include 'public/css/app.css';
?>
</style>
