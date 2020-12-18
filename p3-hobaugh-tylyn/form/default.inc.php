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
    <h1> Sorry something went wrong with your submission.</h1>
    <p> Please try again later.</p>
  </div>
