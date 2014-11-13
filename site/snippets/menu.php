<div class="contain-to-grid">
<nav class= "top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/matthewulstad-logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />Matthew Ulstad
      </a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of the menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

<section class="top-bar-section">
  <!-- Right Nav Section -->
  <ul class="right">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
  </section>

</nav>
</div>