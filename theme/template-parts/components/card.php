<?php
/**
 * 
 * @param array $args {
 *     @type string $title       - Название карточки
 *     @type string $image       - HTML тег изображения
 *     @type string $details_url - Ссылка для кнопки "Подробнее"
 *     @type string $classes     - Дополнительные CSS классы (необязательный)
 * }
 */

if (empty($args['title']) || empty($args['image'])) {
  return false;
}

$args = wp_parse_args($args, [
    'title' => '',
    'image' => '',
    'details_url' => '#',
    'classes' => ''
]);

$title = $args['title'];
$image = $args['image'];
$details_url = $args['details_url'];
$classes = $args['classes'];

// Формируем CSS классы
$card_classes = ['card'];
if (!empty($classes)) {
  $card_classes[] = $classes;
}
$class_string = implode(' ', $card_classes);
?>

<div class="<?php echo esc_attr($class_string); ?>">
  <div class="card__image">
      <?php echo $image; ?>
  </div>
  
  <div class="card__content">
    <h4 class="card__title"><?php echo esc_html($title); ?></h4>
    
    <div class="card__buttons">
      <?php
        get_template_part('template-parts/UI/button', null, [
            'text' => 'Подать заявку',
            'type' => 'dark',
            'classes' => 'card__button',
            'width' => 'full-width'
        ]);

        get_template_part('template-parts/UI/button', null, [
            'text' => 'Подробнее',
            'type' => 'light',
            'tag' => 'a',
            'href' => $details_url,
            'width' => 'full-width',
            'classes' => 'card__button'
        ]);
      ?>
    </div>
  </div>
</div>
