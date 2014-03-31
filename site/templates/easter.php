<?php snippet('header') ?>
<div class="hero-image center">
  <a href="/"><span class="mini-logo"></span></a>
  <h1 class="heading"><?= $page->title() ?></h1>
  <?php snippet('sociallinks') ?>
</div>
<section class="about">
  <div class="wrapper center">
    <h1><?= $page->storytitle() ?></h1>
    <?= kirbytext($page->storycopy()) ?>
  </div>
</section>
<!-- <section class="fashion hidden">
  <div class="wrapper center">
    <h1>The Fashion</h1>
    <p>Alive created a limited edition fashion collection to celebrate Easter. All proceeds will go towards relief on the refugee crisis in Syria. At Good Friday Alive will host the Easter Special Catwalk, showcasing this limited collection.
    </p>
  </div>
</section> -->

<section class="syria">
  <div class="wrapper center">
    <h1><?= $page->causetitle() ?></h1>
    <?= kirbytext($page->causecopy()) ?>
  </div>
</section>

<section class="event">
  <div class="wrapper center">
    <h1><?= $page->eventtitle() ?></h1>
    <h2><?= $page->eventsubtitle() ?></h2>
    <?= kirbytext($page->eventcopy()) ?>
    <div class="event-details">
      <?= kirbytext($page->eventdetails()) ?>
    </div>
    <a href="https://www.eventbrite.de/e/easter-special-catwalk-live-music-tickets-11144564693" class="button"><?= $page->ticketbutton() ?></a>
    <small><?= $page->buttonsubcopy() ?></small>
  </div>
</section>

<div class="footer-image">
  <a href="/">Berlin Connect</a>
</div>
