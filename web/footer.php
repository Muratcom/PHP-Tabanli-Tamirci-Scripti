<footer>
  <div class="main">
    <div class="footer-bg">
      

      <?php echo $ayarcek['adminayar_footer']; ?>
      <ul class="list-services">
        <li><a class="tooltips" href="<?php echo $ayarcek['adminayar_facebook']; ?>"></a></li>
        <li class="item-1"><a class="tooltips" href="<?php echo $ayarcek['adminayar_twitter']; ?>"></a></li>
        <li class="item-2"><a class="tooltips" href="<?php echo $ayarcek['adminayar_linkedin']; ?>"></a></li>
        
      </ul>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 800,
        easing: 'easeOutQuart',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        waitBannerAnimation: false,
        prevBu: '.prev',
        nextBu: '.next'
    });
});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93907463-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
