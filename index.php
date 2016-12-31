<!DOCTYPE html>
<html>
<head>
  <title>The Province Network</title>
  <meta name="viewport" content="user-scalable=yes">
  <meta name="author" content="Province Network">
  <meta name="keywords" content="Province Network">
  <meta name="description" content="Enjoy a fun, interesting storyline. And unlock sweet DLCs.">
  <meta name="google-site-verification" content="zhb1QlczrDJPX1iLsdMeVWypUc4XutDezxuBvwP3uVs">
  <meta name="DC.Language" content="en">
  <meta name="DC.Creator" content="_JB02">
  <meta name="DC.Subject" content="Minecraft Server">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container navContainer"><div class="navbar-collapse collapse">
        <ul id="nav" class="nav navbar-nav">
          <li class="active">
          <a href="/" class="sprite-navbar-button home"></a>
          <li><a href="/store" class="sprite-navbar-button store transition cnleft"></a></li>
          <li><a id="forums" href="/forums" data-toggle="" class="sprite-navbar-button forums cnright"></a></li>
          <li><a href="/help" class="sprite-navbar-button help transition"></a></li>
          <li><a href="/stats" class="sprite-navbar-button stats transition"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <noscript>
    <div role="alert" class="alert alert-warning no-js">For full functionality of this site it is necessary to enable JavaScript. Here are the
      <a href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser</a>.
    </div>
  </noscript>
<div id="content"><div id="transition"><script type="text/javascript" src="/js/dist/home.min.js"></script>
  <header id="introouter" class="section sectionwrapper">
    <div id="home"></div>
    <div id="intro">
      <img src="https://cdn.wynncraft.com/img/intro.png" alt="intro" width="3840" height="2160">
    </div>
    <div id="logoholder">
      <img src="logo2.png" alt="Wynncraft Logo" width="643" height="224" class="wynn-logo center-block">
      <div id="serverstatus">
        <br>
        <br>
        <h2>
          <span class="plycount">There is </span>
          <?php $playeronline = file_get_contents('http://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=96.9.252.10&port=28579'); echo $playeronline;?>
          <span class="plycount">Players Online</span>
        </h2>
      </div>
    </div>
  </header>
  <section id="news" class="section">
    <h1 class="hidden">News</h1>
    <br>
    <div class="container">
      <section id="newscontent" class="col-xs-8">
        <h2 class="text-white">Latest News</h2>
        <div id="news-feed"></div>
      </section>
      <section id="sidebar" class="col-xs-4 content-container">
        <div class="content-inner">
          <h4>Latest Tweets</h4>
          <a href="https://twitter.com/provincenetwork" data-chrome="noheader nofooter transparent noscrollbar" data-tweet-limit="5" link-color="#43ac6a" class="twitter-timeline">Tweets by @provincenetwork</a>
          <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </section>
    </div>
  </section>
</div>
</main>
</html>
