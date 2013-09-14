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
			<h1>Lin Zixian</h1>
			<hr class="dotted"/>
			<div class="profile-info">
				<dl>
					<dt>DID</dt>
					<dd>(65) 6236 9352</dd>
					<dt>Fax</dt>
					<dd>(65) 6532 9937</dd>
					<dt>Email</dt>
					<dd><a href="mailto:lin.zixian@chanceryllc.com">lin.zixian@chanceryllc.com</a></dd>
				</dl>
				<img src="<?php echo $path; ?>images/zixian.jpg" class="portrait">
			</div>
			<hr class="dotted"/>
			
			<h3>Areas of Practice</h3>
			<ul class="practice">
				<li>Infrastructure, Construction and Engineering Law</li>
				<li>Corporate and Commercial Dispute Resolution</li>
				<li>Litigation, Arbitration &amp; Mediation</li>
				<li>Insolvency Law</li>
			</ul>

			<h3>About Zixian</h3>
			<p>Zixian joined the firm in October 2012. Zixian graduated from the National University of Singapore in 2011 and was called to the Singapore Bar in 2012.<p>
			<p>Zixian has assisted in several High Court suits involving trust law, construction litigation and defamation.</p>
			<p>She has also assisted in:</p>
			<ul>
				<li>acting for a defendant creditor in an application by the debtor company to restrain the creditor from bringing a winding up application;</li>
				<li>resisting a challenge to an arbitral tribunal’s jurisdiction in an ad hoc arbitration for a multi-million dollar contract claim involving a concession agreement for exploration and sale of energy resources</li>
				<li>adjudication applications under the Building and Construction Security of Payment Act</li>
				<li>matters before the World Bank Sanctions Board.</li>
			</ul>
			<p>She currently specializes in engineering and construction law and is involved in complex construction arbitrations and litigation.</p>
			<p>She has experience in the following arbitral regimes: the LMAA Rules, SIAC Rules, UNCITRAL Rules; Ad Hoc arbitrations and World Bank Sanctions Board.</p>
			<p>Zixian is effectively bilingual and has a particular interest in Chinese law. She was one of 2 undergraduates selected for a six month exchange programme to the Law Faculty of Beijing University, the premier law faculty of the People’s Republic of China.</p>

			<h3>Education</h3>
			<ul>
				<li>LLB (Hons) National University of Singapore (2011)</li>
			</ul>

			<h3>Bar Admissions / Professional Qualifications</h3>
			<ul>
				<li>Advocate and Solicitor of the Supreme Court of Singapore (2012)</li>
				<li>Law Society of Singapore (2012)</li>
			</ul>

			
		</div>

		<?php
		include_once 'aside.php';
		?>	
	</div>

<?php
include_once '../footer.php';
?>
