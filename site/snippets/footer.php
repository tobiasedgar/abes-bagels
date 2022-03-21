<footer class="site-footer grid-container text">
  <div class="logo">
    <?php snippet('media', ['field' => $site->logoImage()])?>
  </div>

  <nav>
      <ul>
          <li class="font__medium font__lite font__brown about__button" aria-label="About Scroll">
              GOT CHOC?
          </li>
          <li class="enter__button font__medium font__lite font__brown" aria-label="Enter Toggle" id="enter4">
              HOW TO WIN
          </li>
          <li class="tnc__button font__medium font__lite font__brown" aria-label="TnC Toggle" id="tncBtn">
              T&C's
          </li>
      </ul>
  </nav>
</footer>
</div>
</body>

<?php snippet('head/js') ?>
</html>