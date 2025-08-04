<?php
/**
 * 
 * @param array $args {
 *     @type string $classes     - Дополнительные CSS классы (необязательный)
 *     @type string $form_id     - ID формы (необязательный)
 *     @type string $cf7_shortcode - Shortcode Contact Form 7
 * }
 */

if ( !isset( $args['cf7_shortcode'] ) || empty( $args['cf7_shortcode'] ) ) {
  return;
}

$args = wp_parse_args($args, [
  'classes' => '',
  'form_id' => '',
]);

$classes = $args['classes'];
$form_id = $args['form_id'];
$cf7_shortcode = $args['cf7_shortcode'];

$form_classes = ['main-form', 'main-form-cf7'];
if (!empty($classes)) {
  $form_classes[] = $classes;
}
$class_string = implode(' ', $form_classes);
?>

<div class="<?php echo esc_attr($class_string); ?>" id="<?php echo esc_attr($form_id); ?>">
  <?php echo do_shortcode($cf7_shortcode); ?>
</div>