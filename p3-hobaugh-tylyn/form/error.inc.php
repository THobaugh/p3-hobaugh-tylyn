<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  body {
    background-size: cover;
    height: 100%;
    overflow: auto;
  }
  /*---------------------

  Header

  -----------------------*/
  .homepage {
    position: fixed;
    left: 0;
    right: 0;
    padding: 0 80px;
  }

  .logo {
    padding: 10px 350px;
  }

  .logo img:hover {
    opacity: 0.5;
    transition: 1s;
  }

  header nav a {
    text-decoration: none;
    font-size: 28px;
    margin: 0 5px;
    text-align: center;
  }
  /*---------------------

  Menu Styling

  -----------------------*/
  .menu {
      max-width: 80%;
      margin: 0 auto;
  }

  .menu ul {
    list-style: none;
  }

  .menu > ul > li {
      display: inline-block;
      background: #eceadd;
      width: 19%;
      margin-bottom: 1px;
      position: relative;
      vertical-align: top;
  }

  .menu ul li a {
      color: #1c1e1c;
      display: block;
      padding: 15px;
      text-decoration: none;
      transition: .3s;
  }

  .sub-menu {
      display: none;
      border: 1px solid #c18748;
      z-index: 999
  }

  .menu ul li a:hover {
    background: #92a38a;
    transition: 2s;
  }

  .menu-item:hover .sub-menu {
      display: block;
      position: absolute;
      top: 50px;
      background: white;
      width: 100%;
  }

  .menu svg {
      position: relative;
      top: 2px;
  }
  /*---------------------

  Container

  -----------------------*/
  .container {
    margin: 0 auto;
    max-width: 750px;
    text-align: center;
  }
  /*---------------------

  Footer

  -----------------------*/
  .socialmedia {
    background-color: #eceadd;
    clear:both;
  }
</style>

<header class="content">
  <div class="logo">
    <a href="index.html"><img src="images/logo.png" alt="Logo" title="Logo" width="400" height="150"/></a>
  </div>
<nav class="menu">
  <ul>
    <li class="menu-item"><a href="index.html">Home</a></li>
    <li class="menu-item"><a href="about.html">About Me</a></li>
    <li class="menu-item"><a href="recipes/recipes.html">Recipes</a>
      <ul class="sub-menu">
        <li><a href="recipes/starters.html">Starters</a></li>
        <li><a href="recipes/entrees.html">Entrees</a></li>
        <li><a href="recipes/beverages.html">Beverages</a></li>
      </ul>
    </li>
    <li class="menu-item"><a href="seasonal/seasonal.html">Seasonal</a>
      <ul class="sub-menu">
        <li><a href="seasonal/winter.html">Winter 2020</a></li>
      </ul>
    </li>
    <li class="menu-item"><a href="contact.html">Contact</a></li>
  </ul>
</nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
<div class="socialmedia">
	<a href="https://pin.it/2Ep0BaU" target="_blank"><img src="images/icon.png" alt="Pinterest" title="Pinterest" width="50" height="50"/></a>
</div>
</footer>
