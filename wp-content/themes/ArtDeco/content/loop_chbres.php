<?php $args_blog = array(
      'post_type' => 'post',
      'posts_per_page' => 8
);
$req_blog = new WP_Query($args_blog); ?>

<?php if ($req_blog->have_posts()): ?>
   <section class="grey">
   <div class="row justify-content-between mt-2">
            <?php while ($req_blog->have_posts()) : $req_blog->the_post(); ?>
            <div class="col-sm-10-g-1 col-md-6 col-lg-4 mb-4 overflow-hidden">
               <div class="card img-fluid" style="max-width: 30rem; height: 100%">
               <img src="<?php the_field('photo'); ?>"/>
                  <div class="card-body">
                        <h6><a class='card-title'href="<?php the_permalink(); ?>"><?php the_field('categorie'); ?></a></h6>
                        <p class="card-text mx-3 my-3 entete"><span id='or'>CARLO BEACH</span></p>
                        <p class="card-text mx-3 my-3">ACCESSIBLE PMR VUE MER BORD DE MER</p>
                        <div class="row">
                           <div class="col-6">
                           <p class="card-text mt-4">à partir de <?php echo(get_field("prix")); ?> € / nuit</p>
                           </div>
                           <div class="col-6 mt-4">
                              <a href="#" class="btn btn-discover">DECOUVREZ</a>
                           </div>
                        </div>
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