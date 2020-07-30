<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if ($page=='Home') {echo 'active';}?>" href="index.php">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link <?php if ($page=='About') {echo 'active';}?>" href="About.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($page=='Contacts') {echo 'active';}?>" href="Contacts.php">Gallery</a>
					</li>
					<li class="nav-item">
						<button style="color: yellow; background: transparent; border: 2px solid yellow;"><a class="nav-link" href="quote.php">Get a Quote</a></button>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->