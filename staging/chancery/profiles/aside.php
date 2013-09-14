<?php $profileName = basename($_SERVER['PHP_SELF'], ".php"); ?>
<aside class="three columns pull-nine">
			<h3>Directors</h3>
			<ul>
				<li class="<?php if($profileName == 'chua-kern') echo 'active' ?>"><a href="<?php echo $path ?>profiles/chua-kern.php">Chua Kern</a></li>
				<li class="<?php if($profileName == 'tian-luh') echo 'active' ?>"><a href="<?php echo $path ?>profiles/tian-luh.php">Tan Tian Luh</a></li>
			</ul>
			<h3>Associate Directors</h3>
				<li class="<?php if($profileName == 'chang-min') echo 'active' ?>"><a href="<?php echo $path ?>profiles/chang-min.php">Chew Chang Min</a></li>
			<ul>
				
			</ul>
			<h3>Associates</h3>
			<ul>
				<li class="<?php if($profileName == 'zixian') echo 'active' ?>"><a href="<?php echo $path ?>profiles/zixian.php">Lin Zixian</a></li>
			</ul>
			<h3>Corporate Legal Executives</h3>
			<ul>
				<li class="<?php if($profileName == 'vincent') echo 'active' ?>"><a href="<?php echo $path ?>profiles/vincent.php">Vincent Tan</a></li>
			</ul>

		</aside>
