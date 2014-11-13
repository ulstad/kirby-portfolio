<?php snippet('header') ?>

  <main >
  	<div id="row" id="main-content">
  		<div class="large-12 column">   
      	<?php echo $page->text()->kirbytext() ?>
    	</div>
	</div>
    <hr>
    <div id="row">
    	<div class="small-12 medium-6 large-6 columns">
    <?php snippet('projects') ?>
    	</div>
    </div>
  </main>

<?php snippet('footer') ?>