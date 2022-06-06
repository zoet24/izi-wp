<?php
class Zoepix_Footer_Walker extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $classes = ['footer__navbar--links'];
    if ($depth !== 0) $classes[] = 'footer__navbar--links--child';
    $output .= "<ul class='" . implode(' ', $classes) . "'>\n";
  }

  function end_lvl(&$output, $depth = 0, $args = array())
  {
    $output .= "</ul>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;
    $classes = ['footer__navbar--link'];

    if ($args->walker->has_children) $classes[] = 'footer__navbar--link--children';
    if ($depth === 0) $classes[] = 'footer__navbar--link--top';
    if (!is_front_page() && ($item->current || $item->current_item_ancestor || $item->current_item_parent)) $classes[] = 'footer__navbar--link--current';
    $output .= "<li class='" . implode(' ', $classes) . "' data-depth='" . $depth . "'>";

    if ($permalink && $permalink != '#') {
      $output .= '<a href="' . $permalink . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $title;

    if ($description != '' && $depth == 0) {
      $output .= '<small class="footer__navbar--description">' . $description . '</small>';
    }

    if ($permalink && $permalink != '#') {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }

    if ($args->walker->has_children) $output .= '<div class="footer__navbar--subnav">';
  }

  function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    if ($args->walker->has_children && $depth === 0) $output .= '</div>';
    $output .= '</li>';
  }
}
