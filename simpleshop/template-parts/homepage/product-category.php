<?php
if (get_theme_mod('simpleshop_homepage_display_categories', true)) :
?>
   <section class="space-3">
      <div class="container sm-center">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title text-center">
                  <h2 class="title">
                     <?php
                     echo get_theme_mod('simpleshop_homepage_category_title', __('Shop By Category', 'simpleshop'));
                     ?>
                  </h2>
               </div>
            </div>

            <div class="col-md-12">
               <?php
               // $simpleshop_col = get_theme_mod('simpleshop_homepage_categories_col', 3);
               echo do_shortcode('[product_categories columns="3"]');
               ?>
            </div>
         </div>
      </div>
   </section>
<?php
endif;
?>