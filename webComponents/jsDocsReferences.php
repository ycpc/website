  <script src="js/frameworks/docs.min.js"></script>
  <script src="js/thirdPartyScripts/jquery.nav.js"></script>
  
  <script>
    window.twttr = (function (d,s,id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
      js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
  </script>
  <script>
    $('#top-nav').onePageNav({
      currentClass: 'active',
      changeHash: true,
      scrollSpeed: 750,
    });
  </script>