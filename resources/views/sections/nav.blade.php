<nav class="top-bar small-12" data-topbar>
	<ul class="title-area">
		<li class="name">
		<h1><a href="/">Elo That</a></h1>
		</li>
		 
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>
	 
	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			<!-- <li data-reveal-id="clock-modal">
				<a href="/">About</a>
			</li> -->
			<li class="active"><a href="/play">Try it now!</a></li>
			<li><a href='/rankings'>Rankings</a></li>
			@if (Auth::guest())
				<li><a href="/auth/login">Login</a></li>
				<li><a href="/auth/register">Register</a></li>
			@else
				<li class="has-dropdown">
					<a href="#">My Collections</a>
					<ul class="dropdown">
				
						<li><a href="/play">Lorem Pixel</a></li>
					</ul>
				</li>
				<li class="active"><a href="/play">Current Collection: Lorem Pixel</a></li>
				<li><a href='/rankings'>Rankings</a></li>
			@endif
			
		</ul>
		 
		<!-- Left Nav Section -->
		<ul class="left">
			<li></li>
		</ul>
	</section>
</nav>