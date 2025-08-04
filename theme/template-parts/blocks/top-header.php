<header class="top-header container">
  <div class="top-header__logo-mob">
    <?php if ( !is_front_page() && !is_home() ): ?>
      <a href="/">
        <?php get_template_part('template-parts/UI/logos/logo-mob'); ?>
      </a>
    <?php else: ?>
      <?php get_template_part('template-parts/UI/logos/logo-mob'); ?>
    <?php endif; ?>
  </div>

  <div class="top-header__logo-desc">
    <?php if ( !is_front_page() && !is_home() ): ?>
      <a href="/">
        <?php get_template_part('template-parts/UI/logos/logo-desc'); ?>
      </a>
    <?php else: ?>
      <?php get_template_part('template-parts/UI/logos/logo-desc'); ?>
    <?php endif; ?>
  </div>

  <nav class="top-header__nav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class'     => 'top-header__nav-list',
      'container'      => false,
      'fallback_cb'    => false,
      'walker'         => new TopHeaderWalker(),
    ));
    ?>
  </nav>
  
  <button class="top-header__menu-toggle" aria-label="Открыть меню">
    <span class="top-header__menu-line"></span>
    <span class="top-header__menu-line"></span>
    <span class="top-header__menu-line"></span>
  </button>
  
  <div class="top-header__contact">
    <a href="tel:+73952261260" class="top-header__phone">7 3952 26-12-60</a>
    <a href="mailto:support@t-code.ru" class="top-header__email">support@t-code.ru</a>
  </div>

  <?php 
    $button_args = [
      'text' => 'Подать заявку',
      'type' => 'light',
      'classes' => 'top-header__button',
      'size' => 'size-header',
    ];
    get_template_part('template-parts/UI/button', '', $button_args);
  ?>
</header>
