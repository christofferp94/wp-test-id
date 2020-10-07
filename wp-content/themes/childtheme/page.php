<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>
		<div class="image-gallery container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<h4 class="intro-text" id="title1">Duis porta, ligula rhoncus euis mod pretiu, 
					nisi tellus eleifend odio, luctus viverra sem dolor id sem. 
					Maecena sa venenatis en m, quis porttitor magna.</h4>
					<h4 class="intro-text hide" id="title2">Ligula rhoncus euis mod pretiu, 
					nisi tellus eleifend odio, luctus viverra sem dolor id sem. 
					Maecena sa venenatis en m, quis porttitor magna.</h4>
					<h4 class="intro-text hide" id="title3">Ligula rhoncus euis mod pretiu, 
					nisi tellus eleifend odio, luctus viverra sem dolor id sem.</h4>
					<p id="text1">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
					Pra esent sollici tudin felis vel mi facilisis posuere. 
					Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
					Interdum et malesuada fames ac antei psum primis in faucibus. 
					Phasellus at ante mattis, condimentum velite t, dignissim nunc. 
					Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. 
					Nulla vehicula vestibulum p urus at rutrum. Pellentesque habitant morbi tristique senectus et netu 
					s et malesuada fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. 
					Curabitur ac purus id elit hendrerit lacinia.</p>
					<p class="hide" id="text2">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
					Pra esent sollici tudin felis vel mi facilisis posuere. 
					Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
					Interdum et malesuada fames ac antei psum primis in faucibus. 
					Phasellus at ante mattis, condimentum velite t, dignissim nunc. 
					Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. 
					Nulla vehicula vestibulum p urus at rutrum.</p>
					<p class="hide" id="text3">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
					Pra esent sollici tudin felis vel mi facilisis posuere. 
					Nulla ultrices facilisis ju sto, non varius nisl semp ervel.</p>
					<div class="indicator-container">
						<button id="button1" class="gallery-indicator">01. Lorem</button>
						<button id="button2" class="gallery-indicator">02. Ipsum</button>
						<button id="button3" class="gallery-indicator">03. Dolores</button>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<img class="gallery-image" id="image1" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild1.png"/>
					<img class="gallery-image hide" id="image2" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild1.png"/>
					<img class="gallery-image hide" id="image3" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild1.png"/>
				</div>
			</div>
		</div>
	</section>
	<section class="form-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<h4 class="intro-text">Registrera dig</h4>
					<p>Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
					Pra esent sollici tudin felis vel mi facilisis posuere. 
					Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
					Interdum et malesuada fames ac antei psum primis in faucibus. 
					Phasellus at ante mattis, condimentum velite t, dignissim nunc. 
					Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, eu hendrerit leo ultrices. 
					Nulla vehicula vestibulum p urus at rutrum. Pellentesque habitant morbi tristique senectus et netu 
					s et malesuada fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. 
					Curabitur ac purus id elit hendrerit lacinia.</p>
				</div>
				<div class="col-lg-6 col-md-12">
					<form action="<?php echo get_template_directory_uri(); ?>/create-user.php" method="post">
						<div class="custom-control custom-checkbox">
							<div class="form-group">
								<label for="name">Namn*</label>
								<input type="text" class="form-control" name="fname" required>
							</div>
							<div class="form-group">
								<label for="email">Epost*</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label for="birth">Födelseår*</label>
								<input type="text" class="form-control" name="birth" required>
							</div>
							<div class="form-group">
								<label for="pwd">lösenord*</label>
								<input type="password" class="form-control" name="pwd" required>
							</div>
							<div class="form-group">
								<label for="confirmpwd">Bekräfta lösenord*</label>
								<input type="password" class="form-control" name="confirmpwd" required>
							</div>
							<div class="checkbox">
								<label><input type="checkbox">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae.</label>
							</div>
							<small>Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicit udi n felis vel mi facilisis posuere. Nulla ultrices facilisis justo, non varius nisl semper vel. I nterdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus at ante matti s, condimentum velit et, dignissim nunc. Integer quis tincidunt purus.</small>
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->
</main>