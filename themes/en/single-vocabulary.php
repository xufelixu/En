<?php get_header();?>
        
<div class="container container--narrow page-section"> 
  
    <div class="word-list-features-wraper">

       <?php $loop = CFS()->get('word_list'); foreach ($loop as $row) : ?>
         <div class="word-list">
            <h2><?php echo $row['vocab']; ?></h2>
               <p><?php echo $row['napa']; ?></p>
               <audio src="<?php echo $row['audio'];?>" controls></audio>
               <p><?php echo $row['defin']; ?></p>
               <p><?php echo $row['usage']; ?></p>
              <hr>
         </div>        
          <?php endforeach; ?>
    </div>


</div>

<?php get_footer(); ?>