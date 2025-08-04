<section class="main-section form-section">
  <div class="h1 main-section__title">
    Заявка
  </div>
  <?php //get_template_part('template-parts/components/main-form'); ?>
  <?php get_template_part('template-parts/components/main-form-cf7', null, [
    'cf7_shortcode' => '[contact-form-7 id="321c422" title="Контактная форма 1"]'
    ]); ?>
  <?php get_template_part('template-parts/UI/gradient-svg'); ?>
</section>