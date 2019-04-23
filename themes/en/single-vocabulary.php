<?php get_header();?>
        
<div class="container container--narrow page-section"> 
  
    <div class="word-list-features-wraper">

       <?php $loop = CFS()->get('vocabulary'); foreach ($loop as $row) : ?>
         <div class="vocabulary">
            <h2><?php echo $row['word']; ?></h2>
               <p><?php echo $row['napa']; ?></p>
               <audio class="vocabulary-audio" src="<?php echo $row['audio'];?>" controls></audio>
               <p class='vocabulary-defi'><?php echo $row['definition']; ?></p>
               <p class="vocabulary-usage"><?php echo $row['usage']; ?></p>
              <hr>
         </div>        
          <?php endforeach; ?>
    </div>


</div>

<?php get_footer(); ?>