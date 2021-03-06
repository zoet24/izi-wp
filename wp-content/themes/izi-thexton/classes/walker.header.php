<?php
class Zoepix_Header_Walker extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $classes = ['header__navbar--links'];
    if ($depth !== 0) $classes[] = 'header__navbar--links--child';
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
    $classes = ['header__navbar--link'];

    if ($args->walker->has_children) $classes[] = 'header__navbar--link--haschildren';
    if ($depth === 0) $classes[] = 'header__navbar--link--top';
    if (($item->current || $item->current_item_ancestor || $item->current_item_parent)) $classes[] = 'header__navbar--link--current';
    $output .= "<li class='" . implode(' ', $classes) . "' data-depth='" . $depth . "'>";

    if ($permalink && $permalink != '#') {
      $output .= '<a href="' . $permalink . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $title;

    if ($description != '' && $depth == 0) {
      $output .= '<small class="header__navbar--description">' . $description . '</small>';
    }

    if ($args->walker->has_children) {
			$output .= '<i class="fa fa-chevron-right header__navbar--arrow"></i>';
		}

    if ($permalink && $permalink != '#') {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }

    if ($args->walker->has_children) $output .= '<div class="header__navbar--subnav">';
  }

  function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    if ($args->walker->has_children && $depth === 0) $output .= '</div>';
    $output .= '</li>';
  }
}
