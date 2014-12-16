		<footer class="footer wrapper" role="contentinfo">
			<div class="footer-block footer-contact">
				<h4 class="footer-header">Contact</h4>
				<ul>
					<li><a href="tel:<?php echo $site->phone()->html() ?>" itemprop="telephone"><?php echo $site->phone()->text() ?></a></li>
					<li><a href="mailto:<?php echo $site->email()->html() ?>" itemprop="email"><?php echo $site->email()->text() ?></a></li>
				</ul>
			</div>
			<div class="footer-block footer-elsewhere">
				<h4 class="footer-header">@kdeckr</h4>
				<ul>
					<li><a href="http://dribbble.com/<?php echo $site->dribbble()->html() ?>">Dribbble</a></li>
					<li><a href="http://facebook.com/<?php echo $site->facebook()->html() ?>">Facebook</a></li>
					<li><a href="http://github.com/<?php echo $site->github()->html() ?>">Github</a></li>
					<li><a href="http://instagram.com/<?php echo $site->instagram()->html() ?>">Instagram</a></li>
				</ul>
			</div>
		</footer>
	</div> <!-- .body-wrapper -->
</body>
</html>