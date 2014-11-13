<div id="row">
  <div class"small-12 small centered large-12 columns">
<h2>Featured projects</h2>
  </div>
</div>

<div id="row">
<div class="small-12 medium-6 large-6 columns">

<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(9) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>

</div>
</div>
