<?php
/**
 * 
 * @param array $args {
 *     @type string $text        - Текст кнопки
 *     @type string $type        - Тип кнопки (light, dark)
 *     @type string $size        - Размер кнопки (size-regular, size-footer, size-header)
 *     @type string $width       - Ширина кнопки (auto-width, full-width)
 *     @type string $tag         - HTML тег (button, a)
 *     @type string $href        - Ссылка (для тега a)
 *     @type string $id          - ID кнопки (необязательный)
 *     @type string $classes     - Дополнительные CSS классы (необязательный)
 *     @type array  $attributes  - Дополнительные атрибуты (необязательный)
 * }
 */

if ( !isset($args['text']) || empty($args['text']) ) {
  return;
}

$args = wp_parse_args($args, [
  'type' => 'light',
  'size' => 'size-regular',
  'width' => 'auto-width',
  'tag' => 'button',
  'href' => '#',
  'id' => '',
  'classes' => '',
  'attributes' => []
]);

$text = $args['text'];
$type = $args['type'];
$size = $args['size'];
$width = $args['width'];
$tag = $args['tag'];
$href = $args['href'];
$id = $args['id'];
$classes = $args['classes'];
$attributes = $args['attributes'];

$button_classes = ['button-main'];
$button_classes[] = 'button-main_' . $type;
$button_classes[] = 'button-main_' . $size;
$button_classes[] = 'button-main_' . $width;

if (!empty($classes)) {
  $button_classes[] = $classes;
}

$class_string = implode(' ', $button_classes);

$attr_string = '';
foreach ($attributes as $key => $value) {
  $attr_string .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
}

$id_string = !empty($id) ? 'id="' . esc_attr($id) . '"' : '';

$href_string = $tag === 'a' ? 'href="' . esc_url($href) . '"' : '';

if ($tag === 'a') : ?>
  <a <?php echo $id_string; ?> class="<?php echo esc_attr($class_string); ?>"<?php echo $href_string . $attr_string; ?>><?php echo esc_html($text); ?></a>
<?php else : ?>
  <button <?php echo $id_string; ?> class="<?php echo esc_attr($class_string); ?>"<?php echo $attr_string; ?>><?php echo esc_html($text); ?></button>
<?php endif; ?>