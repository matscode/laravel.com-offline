@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="panel statement light">
	<div class="content">
		<h1>Love beautiful code? We do too.</h1>
		<p>The PHP Framework For Web Artisans</p>
		<div class='browser-window'>
			<div class='top-bar'>
				<div class='circles'>
					<div class="circle circle-red"></div>
					<div class="circle circle-yellow"></div>
					<div class="circle circle-green"></div>
				</div>
			</div>
			<div class='window-content'>
				<pre class="line-numbers"><code class="language-php">
&lt;?php


class Idea extends Eloquent 
{

	/**
	 * Dreaming of something more?
	 *
	 * @with Laravel
	 */
	 public function create()
	 {
	 	// Have a fresh start...
	 }

}

	</code></pre>
				</div>
			</div>

		</div>
	</div>
	<a href="#features" class="next-up">
		Powerful, Modern Features
		<img src="/assets/img/down-arrow.png">
	</a>
</section>

<section class="panel laracon standout" id="laracon">
    <object type="image/svg+xml" data="/assets/img/laracon-16.svg" width="350"></object>
    <h2>This year Laracon goes <strong>bigger than ever</strong>. Early Bird tickets available for a limited time.</h2>
    <a href="http://laracon.us" class="btn"><em>Laracon US</em>Louisville, Kentucky</a>
    <a href="http://laracon.eu" class="btn"><em>Laracon EU</em>Amsterdam, Netherlands</a>
</section>

<section class="panel features dark" id="features">
	<h1>Did someone say rapid?</h1>
	<p>Elegant applications delivered at warp speed.</p>
		<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>Expressive, beautiful syntax.</h2>
					<p>Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started, check out <a href="https://laracasts.com">Laracasts</a> and our <a href="/docs">great documentation</a>.</p>
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
class Purchase implements ShouldQueue 
{

	/**
	 * Purchase a new podcast.
	 */
	 public function handle(Repository $repo)
	 {
	 	foreach ($this->purchases as $purchase)
	 	{
	 		//
	 	}
	 }
</code></pre>
						</div>
					</div>

				</div>
			</div><!-- /.block -->
			<div class="block even">
				<div class="text">
					<h2>Tailored for your team.</h2>
					<p>Whether you're a solo developer or a 20 person team, Laravel is a breath of fresh air. Keep everyone in sync using Laravel's database agnostic <a href="/docs/migrations">migrations</a> and <a href="/docs/migrations">schema builder</a>.</p>
				</div>
				<div class="media">
					<div class="terminal-window">
						<div class='top-bar'></div>
						<div class='window-content'>
							<div class="dark-code">
							<pre><code class="language-bash">
~/Apps $ php artisan make:migration create_users_table
Migration created successfully!

~/Apps $ php artisan migrate --seed
Migrated: 2015_01_12_000000_create_users_table
Migrated: 2015_01_12_100000_create_password_resets_table
Migrated: 2015_01_13_162500_create_projects_table
Migrated: 2015_01_13_162508_create_servers_table
</code></pre></div>
						</div>
					</div>
				</div>
			</div><!-- /.block -->
			<div class="block odd">
				<div class="text">
					<h2>Modern toolkit. Pinch of magic.</h2>
					<p>An <a href="/docs/eloquent">amazing ORM</a>, painless <a href="/docs/routing">routing</a>, powerful <a href="/docs/queues">queue library</a>, and <a href="/docs/authentication">simple authentication</a> give you the tools you need for modern, maintainable PHP. We sweat the small stuff to help you deliver amazing applications.
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
Route::resource('photos', 'PhotoController');

/**
 * Retrieve A User...
 */
Route::get('/user/{user}', function(App\User $user)
{
	return $user;
})
</code></pre>
					</div>
				</div>
			</div><!-- /.block -->
		</div>
		<a href="#ecosystem" class="next-up">
			The Laravel Ecosystem
			<img src="/assets/img/down-arrow.png">
		</a>
	</section>

	<section class="panel ecosystem light" id="ecosystem">
		<h1>The Laravel Ecosystem</h1>
		<p>Revolutionize how you build the web.</p>

		<div class="forge contain">
			<img src="/assets/img/forge-macbook.png" alt="Forge Dashboard" class="screenshot">
			<div class="content">
				<a href="https://forge.laravel.com">
					<img src="/assets/img/forge-logo.png" alt="Forge">
				</a>
				<p>Instant PHP Platforms On Linode, DigitalOcean, and more. Push to deploy, PHP 7.0, HHVM, queues, and everything you need to launch and deploy amazing Laravel applications.</p>
				<p>Launch your application in minutes!</p>
			</div>
		</div>
		<div class="tiles">
			<div class="tile">
				<h2><a href="/docs/homestead">Homestead</a></h2>
				<p>The official Laravel local development environment. Powered by Vagrant, Homestead gets your entire team on the same page with the latest PHP, MySQL, Postgres, Redis, and more.</p>
			</div>
			<div class="tile">
				<h2><a href="https://laracasts.com">Laracasts</a></h2>
				<p>Hundreds (yes, hundreds) of Laravel and PHP video tutorials with new videos added every week! Skim the basics or start your journey to Laravel mastery. All for the price of lunch.</p>
			</div>
			<div class="tile">
				<h2>Power Packed</h2>
				<p>Laravel is amazing out of the box, but there's more to explore! Let <a href="/docs/billing">Cashier</a> make subscription billing painless, or use <a href="https://github.com/laravel/socialite">Socialite</a> to authenticate with Facebook, Twitter, and more.</p>
			</div>
		</div>
	</section>
@endsection
