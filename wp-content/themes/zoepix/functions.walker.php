<?php
function has_children($non_nested_menu, $menu_item)
{
    // dump($non_nested_menu);

    foreach ($non_nested_menu as $key => $nnm) {
        // dump($nnm);
        if ($key === 0) {
            continue;
        }

        foreach ($nnm as $key => $item) {
            if (intval($key) === intval($menu_item->ID)) {
                return true;
            }
        }
    }

    return false;
}

function get_non_nested_menu($menu_name)
{
    // Get the menu items (This will just get an unordered array)
    $locations = get_nav_menu_locations();

    if (!$locations || !$locations[$menu_name]) {
        return;
    }

    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_by_depth = [];

    // Go through each menu item and assign it a depth, creating the new array.
    // NOTE: There's a potential for an infinite loop here so should probably think of a way around that.. 
    while (count($menu_items) > 0) {
        foreach ($menu_items as $key => $item) {
            if (intval($item->menu_item_parent) === 0) {
                $menu_by_depth[0][] = $item;

                unset($menu_items[$key]);

                continue;
            }

            $parent_id = intval($item->menu_item_parent);

            foreach ($menu_by_depth as $levelKey => $level) {
                foreach ($level as $levelItem) {
                    if (intval($levelItem->ID) === $parent_id) {
                        $menu_by_depth[intval($levelKey) + 1][] = $item;

                        unset($menu_items[$key]);
                    }
                }
            }
        }
    }

    foreach ($menu_by_depth as $index => $mdp) {
        if ($index === 0) {
            continue;
        }

        $newDepthArray = [];

        foreach ($mdp as $item) {
            $newDepthArray[intval($item->menu_item_parent)][] = $item;
        }

        $menu_by_depth[$index] = $newDepthArray;
    }

    return $menu_by_depth;
}
