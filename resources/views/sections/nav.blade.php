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
			
			@if (Auth::guest())
				<li class="active"><a href="/albums/54/play/">Try it now!</a></li>
				<li><a href='/albums/public'>Public Albums</a></li>
				<li><a href="/auth/login">Login</a></li>
				<li><a href="/auth/register">Register</a></li>
			@else
				<li class="has-dropdown">
					<a href="#">My Albums</a>
					<ul class="dropdown">
						@foreach (Auth::user()->albums as $album)
							<li><a href="/albums/{{ $album->id }}">{{ $album->name }}</a></li>
						@endforeach
					</ul>
				</li>
				<li><a href='/albums/public'>Public Albums</a></li>
				<li><a href="/auth/logout">Logout</a></li>
			@endif
			
		</ul>
		 
		<!-- Left Nav Section -->
		<ul class="left">
			<li></li>
		</ul>
	</section>
</nav>