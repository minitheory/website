<?php
$bodyClass = 'profile-page';
$thisPage = 'profiles';
$title = "Zixian - Chancery LLC";
include_once '../header.php';

?>
	<div class="banner">
		<img class="banner-image" src="../images/banner-pebbles.jpg"/>
	</div>

	<div class="row main">
		<div class="nine columns page-content push-three">
			<h1>Vincent Tan Vei Chyi</h1>
			<hr class="dotted"/>
			<div class="profile-info">
				<dl>
					<dt>DID</dt>
					<dd>(65) 6236 9355</dd>
					<dt>Fax</dt>
					<dd>(65) 6532 9937</dd>
					<dt>Email</dt>
					<dd><a href="mailto:Vincent.tan@chanceryllc.com">Vincent.tan@chanceryllc.com</a></dd>
				</dl>
				<img src="<?php echo $path; ?>images/vincent.jpg" class="portrait">
			</div>
			<hr class="dotted"/>

			<h3 id="areas-of-practice">Areas of Practice</h3>
			<ul class="practice">
				<li>Corporate Finance &amp; Capital Markets</li>
				<li>Securities Law</li>
				<li>Mergers and Acquisitions</li>
			</ul>

			<h3>About Vincent</h3>
			<p>Vincent Tan Vei Chyi currently practises in the area of corporate finance, securities and capital markets and mergers and acquisitions. His area of work encompasses initial public offerings, private equity investment, cross border acquisition/disposal of businesses and assets joint ventures and corporate restructuring.<p>
			<p>Prior to joining Chancery Law Corporation, Vincent underwent pupillage training and practiced as an Advocate and Solicitor in a boutique corporate commercial law firm in Kuala Lumpur, Malaysia from 2010 to 2012. As a Malaysian lawyer, Vincent’s main areas of practice include civil and commercial disputes resolution, company winding up, company restructuring, banking and bankruptcy.</p>
			
			<h3>Education</h3>
			<ul>
				<li>LLB (Hons) University of Leeds, UK (2008)</li>
				<li>LLM University of Leeds, UK (2009)</li>
				<li>Malaysian Certificate of Legal Practice (2010)</li>
			</ul>

			<h3>Bar Admissions</h3>
			<ul>
				<li>Malaysian Bar (2011)</li>
			</ul>

			
		</div>

		<?php
		include_once 'aside.php';
		?>		
	</div>

<?php
include_once '../footer.php';
?>
