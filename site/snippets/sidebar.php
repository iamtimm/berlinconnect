<div class="sidebar">
  <div class="menu-message"><span class="entypo close"></span><span class="nav-text">Navigate through the site</span><span class="close-text">Close this sidebar</span></div>
  <ul class="sidebar-container">
    
    <li class="lvl-1"><a href="<?php echo url('/') ?>">Home</a> </li>
    <h4>Sundays</h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays') as $section): ?>
    <li id="<?= $section->id() ?>" class="lvl-1 internal">
      <a>
        <?php echo html($section->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <h4>Community</h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Community') as $section): ?>
    <li id="<?= $section->id() ?>" class="lvl-1 internal">
      <a>
        <?php echo html($section->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <h4>Social Enterprise</h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Social') as $section): ?>
    <li id="<?= $section->id() ?>" class="lvl-1 internal">
      <a>
        <?php echo html($section->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <h4>More</h4>
    <li class="lvl-2"><a href="<?php echo url('giving') ?>">Giving</a></li>
    <li class="lvl-2"><a href="<?php echo url('contact') ?>">Contact</a></li>
    <li class="lvl-2"><a href="<?php echo url('faq') ?>">FAQ</a></li>
    <li class="lvl-2"><a href="<?php echo url('resources') ?>">Resources</a></li>
    <li class="lvl-2"><a href="<?php echo url('imprint') ?>">Imprint</a></li>
  </ul>  
  <?php snippet('sociallinks') ?>
  <div class="logo-outline"></div>
</div>