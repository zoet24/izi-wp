<?php
class zoepix_Menu_Walker extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $classes = ['navbar__links'];
    if ($depth !== 0) $classes[] = 'navbar__links--child';
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
    $classes = ['navbar__link'];

    if ($args->walker->has_children) $classes[] = 'navbar__link--children';
    if ($depth === 0) $classes[] = 'navbar__link--top';
    if (!is_front_page() && ($item->current || $item->current_item_ancestor || $item->current_item_parent)) $classes[] = 'navbar__link--current';
    $output .= "<li class='" . implode(' ', $classes) . "' data-depth='" . $depth . "'>";

    if ($permalink && $permalink != '#') {
      $output .= '<a href="' . $permalink . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $title;

    if ($description != '' && $depth == 0) {
      $output .= '<small class="navbar__description">' . $description . '</small>';
    }

    if ($permalink && $permalink != '#') {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }

    if ($args->walker->has_children) $output .= '<div class="navbar__subnav">';
  }

  function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    if ($args->walker->has_children && $depth === 0) $output .= '</div>';
    $output .= '</li>';
  }
}
