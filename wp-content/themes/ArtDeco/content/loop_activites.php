<?php $args_blog = array(
      'post_type' => 'post',
      'posts_per_page' => 5
);
$req_blog = new WP_Query($args_blog); ?>

<?php if ($req_blog->have_posts()): ?>
<?php //if //( has_category( 'activites' ) ): ?>
   <section class="grey">
   <div class="row justify-content-between mt-2">
            <?php while ($req_blog->have_posts()) : $req_blog->the_post(); ?>
            <div class="col-sm-10-g-1 col-md-6 col-lg-4 mb-4 overflow-hidden">
               <div class="card img-fluid" style="max-width: 30rem; height: 100%">
               <img src="<?php the_field('img'); ?>"/>
                  <div class="card-body">
                        <h6><a class='card-title'href="<?php the_permalink(); ?>"><?php the_field('nom'); ?></a></h6>
                        <p class="card-text mx-3 my-3 entete"><span id='or'>  <?php the_field('activites'); ?></span></p>
                        <p class="card-text mx-3 my-3"><?php the_field('date'); ?></p>
                        <div class="row">
                           <div class="col-12">
                           <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'info', true); ?></p>
                           </div></div>
                           <div class="row">
                           <div class="col-12 mb-4">
                              <a href="#" class="btn btn-discover">DECOUVREZ</a>
                           </div></div>
                  </div>
               </div>
            </div>
      <?php endwhile; ?>
         </div><!--/row-->
</div><!--/container-->
         <?php else : ?>
            <h1>Pas d'articles</h1>
         <?php endif; ?>
</section>