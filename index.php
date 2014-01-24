<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Marcker" />
    <meta name="description" content="Website do desenvolvedor Marcos Garcia Marcker" />
    <meta name="keywords" content="marcker, hacker, Mauá, maua, developer, brasil, brazil, programming, interfaces, apps, aplicativos, warchalking" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato|Boogaloo" />
    <link rel="stylesheet" href="css/styles.min.css" />
    <link rel="shortcut icon" href="https://github.com/favicon.ico" />
    <title>{ Marcker } &#8212; Webdeveloper</title>
  </head>

  <body>
    <div id="wrapper"> <!-- Wrapper -->
      <div id="header">
        <div id="logo">
          <a href="index">
            <h1>
              { Marcker }<span> .net</span>
            </h1>
          </a>
        </div>

        <div class="mozilla">
          <a href="//affiliates.mozilla.org/link/banner/40479"><img src="//affiliates.mozilla.org/media/uploads/banners/3e6d4e282cef9e27de25670b3c74b631140ab835.png" alt="Download Beta" /></a>
        </div>

        <div id="nav"></div>

      </div> <!-- #header -->
            
      <div id="content"> 
        <div id="language">
          <p>
            <a id="enus" href="#">English</a> &#8212;   
            <a id="ptbr" href="#">Português</a> &#8212; 
            <a id="nr" href="#">Norske</a> &#8212; 
            <a id="binary" href="#">Binary</a>
          </p>
        </div> <!-- #language -->

        <div id="welcome"></div>

        <div id="github-updates">
          <div class="header-github-updates">
            <h2>Últimas atualizações no <a href="https://github.com/marcker" target="_blank">GitHub</a>:</h2>
          </div>
          <ul class="updates"></ul>
        </div>
      </div> <!-- #content -->
            
      <div id="footer">
        <p>
          marcker.net &#8212; alguns direitos reservados &#8212; 2012-<?php echo date(Y); ?>
        </p>
      </div>
        
    </div> <!-- #wrapper -->

    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="https://api.github.com/users/marcker/events?callback=Website.apps.github"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-31510270-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

  </body>
</html>