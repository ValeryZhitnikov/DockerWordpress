<?php
$vacancies_query = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'vacancies',
    'posts_per_page' => -1,
    'post_status' => 'publish'
]);

if ($vacancies_query->have_posts()) : ?>
  <section class="vacancies">
    <div class="container">
      <div class="vacancies__row swiper swiper-container">
        <div class="swiper-wrapper">
          <?php while ($vacancies_query->have_posts()) : $vacancies_query->the_post(); ?>
          <div class="swiper-slide">
              <?php
                  $image = get_the_post_thumbnail(null, 'cardPrev');
                  
                  get_template_part('template-parts/components/card', null, [
                      'title' => get_the_title(),
                      'image' => $image,
                      'details_url' => get_permalink(),
                      'classes' => 'vacancies__item'
                  ]);
              ?>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="swiper-nav">
          <div class="icon vacancies__button vacancies__button_prev swiper-button"></div>
          <div class="icon vacancies__button vacancies__button_next swiper-button"></div>
        </div>
      </div>
    </div>
    <img class="vacancies__image" loading="lazy" width="222" height="248" src="<?php echo get_template_directory_uri(); ?>/static/images/3dElem.png" alt="3dElem">
  </section>
<?php endif;

wp_reset_postdata();