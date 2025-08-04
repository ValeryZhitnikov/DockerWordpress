<?php
if (!defined('ABSPATH')) {
  exit;
}

class TopHeaderWalker extends Walker_Nav_Menu {
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'top-header__nav-item';
    
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
    
    $output .= '<li' . $class_names . '>';
    
    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a class="top-header__nav-link' . (in_array('current-menu-item', $classes) ? ' top-header__nav-link_active' : '') . '"' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}