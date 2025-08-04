<footer class="main-footer container">
  <div class="main-footer__content">
    <div class="main-footer__logo-mob">
      <?php if ( !is_front_page() && !is_home() ): ?>
        <a href="/">
          <?php get_template_part('template-parts/UI/logos/logo-mob'); ?>
        </a>
      <?php else: ?>
          <?php get_template_part('template-parts/UI/logos/logo-mob'); ?>
      <?php endif; ?>
    </div>

    <div class="main-footer__logo-desc">
      <?php if ( !is_front_page() && !is_home() ): ?>
        <a href="/">
          <?php get_template_part('template-parts/UI/logos/logo-desc'); ?>
        </a>
      <?php else: ?>
        <?php get_template_part('template-parts/UI/logos/logo-desc'); ?>
      <?php endif; ?>
    </div>
    
    <div class="main-footer__contact">
      <a href="tel:+73952261260" class="main-footer__phone">7 3952 26-12-60</a>
      
      <div class="main-footer__social">
        <a href="#" class="icon main-footer__social-link">
          <?php get_template_part('template-parts/UI/icons/vk'); ?>
        </a>
        <a href="#" class="icon main-footer__social-link">
          <?php get_template_part('template-parts/UI/icons/f'); ?>
        </a>
        <a href="#" class="icon main-footer__social-link">
          <?php get_template_part('template-parts/UI/icons/inst'); ?>
        </a>
      </div>
    </div>
      
    <?php
      get_template_part('template-parts/UI/button', null, [
        'text' => 'Подать заявку',
        'type' => 'light',
        'tag' => 'button',
        'size' => 'size-footer main-footer__button',
      ]);
    ?>
  </div>
  <div class="main-footer__copyright"><?php echo date('Y'); ?></div>
</footer>