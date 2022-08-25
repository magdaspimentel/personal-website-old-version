			
		<?php if($currentPage == "resume.php") : ?>
		<?php else : ?>
			<footer>	
				<div class="icons">
					<a href="#">
						<i class="far fa-envelope" title="Email"></i>
					</a>
					<a href="#">
                        <i class="fab fa-skype" title="Skype"></i>
                    </a>
					<a href="#">
						<i class="fab fa-facebook-f" title="Facebook"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter" title="Twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-linkedin-in" title="LinkedIn"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram" title="Instagram"></i>
					</a>
					<a href="#">
						<i class="fab fa-pinterest-p" title="Pinterest"></i>
					</a>	
					<a href="#">
						<i class="fab fa-github" title="GitHub"></i>
					</a>
					<a href="#">
						<i class="fab fa-codepen" title="CodePen"></i>
					</a>
					<a href="#">
						<i class="fab fa-behance" title="Behance"></i>
					</a>
					<a href="#">
						<i class="fab fa-medium-m" title="Medium"></i>
					</a>
				</div>	

				<div>
					<p><?php echo $footerText1; ?></p>
				</div>
			</footer>	
		<?php endif; ?> 	

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://kit.fontawesome.com/9be7ef0aa1.js" crossorigin="anonymous"></script>
		<script src="js/scriptV1.min.js" type="text/javascript"></script>	

		<?php if($currentPage == "index.php") : ?>
			<script src="js/main.min.js" type="text/javascript"></script>	
		<?php endif; ?> 				
	</body>
</html>