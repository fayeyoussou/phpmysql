<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/joke/public/jokes.css">
    <title><?=$title?></title>
  </head>
  <body>
  <nav>
    <header>
      <h1>Internet Joke Database</h1>
    </header>
    <ul>
			<li><a href="/joke/public">Home</a></li>
			<li><a href="/joke/public/joke/list">Jokes List</a></li>
			<li><a href="/joke/public/joke/edit">Add a new Joke</a></li>
			<?php if ($loggedIn): ?>
			<li><a href="/joke/public/logout">Log out</a></li>
			<?php else: ?>
			<li><a href="/joke/public/login">Log in</a></li>
			<?php endif; ?>
		</ul>
  </nav>

  <main>
  <?=$output?>
  </main>

  <footer>
  &copy; IJDB 2017
  </footer>
  </body>
</html>