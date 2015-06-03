<?php include ('scripts/inc/page-header.php'); ?>
		<div class="oxo__page-wrapper">
			<?php include 'scripts/modules/console-chooser/console-chooser.php'; ?>
		</div>
		<div class="oxo__modal__container">
			<?php include 'atari-800.php'; ?>
			<?php include 'pages/snes.php'; ?>
		</div>
		<div class="oxo__hud--bottom">
			<nav class="oxo__nav">
				<ul class="oxo__list">
					<li class="oxo__list-item">
						<a class="oxo__link" title="TITEL | Computerspielemuseum Berlin">TITEL</a>
					</li>
					<li class="oxo__list-item">
						<a class="oxo__link" title="TITEL | Computerspielemuseum Berlin">TITEL</a>
					</li>
					<li class="oxo__list-item">
						<a class="oxo__link" title="TITEL | Computerspielemuseum Berlin">TITEL</a>
					</li>
					<li class="oxo__list-item">
						<a class="oxo__link" title="TITEL | Computerspielemuseum Berlin">TITEL</a>
					</li>
					<li class="oxo__list-item">
						<a class="oxo__link" title="TITEL | Computerspielemuseum Berlin">TITEL</a>
					</li>
				</ul>
			</nav>
		</div>
		<script src="/js/build/main.min.js"></script>
		<script>
		$(function(){
			Foundation.global.namespace = '';
			$(document).foundation();

			// Magnific Popup
			$('.oxo__detail__image-wrapper .oxo__link').magnificPopup({
				type: 'image'
				// other options
			});
		});
		</script>
	</body>
</html>
