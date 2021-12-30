<?php
// Add custom image sizes
// add_image_size('mobile_hero', 1200, 1200, array( 'center', 'center' ) );

// function add_custom_sizes( $sizes ) {
// 	return array_merge(
// 		$sizes, array(
// 			'mobile_hero'  => __( 'Mobile - Hero' )
// 		)
// 	);
// }

// add_filter( 'image_size_names_choose', 'add_custom_sizes' );


// Get video and video thumbnails
function video_embed($video)
{

    if ($video) {
        // Use preg_match to find iframe src.
        preg_match('/src="(.+?)"/', $video, $matches);
        $src = $matches[1];
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $src, $match);
        $urlID = $match[1];
        if (strpos($src, 'youtube') > 0) {
            $video = preg_replace('/src="(.+?)"/', 'src="$1&enablejsapi=1"', $video);
        } elseif (strpos($src, 'vimeo') > 0) {
            $video = preg_replace('/src="(.+?)"/', 'src="$1&api=1"', $video);
        }
        // Add extra parameters to src and replace HTML.
        $params = [
            'controls'  => 0,
            'hd'        => 1,
            'autohide'  => 1,
        ];
        $new_src = add_query_arg($params, $src);
        $video = str_replace($src, $new_src, $video);
        // Add extra attributes to iframe HTML.
        $attributes = 'frameborder="0"';
        $video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);
    }
    return $video;
}

function get_video_thumbnail ($embed) {
    preg_match('/(?:src=")([^"]*)(?=")/', $embed, $url_matches);
    $url = $url_matches[1];

    if (!$url) return false;

    if (preg_match('/vimeo/', $url)) {
        preg_match('/(?:\/)\d*(?=\?)/', $url, $id_matches);

        $video_id = str_replace('/', '', $id_matches[0]);
        $video_id_xmlzip = 'http://vimeo.com/api/v2/video/' . $video_id . '.php';
        $video_id_xml = unserialize(file_get_contents($video_id_xmlzip));
        $video_thumbnail = $video_id_xml[0]['thumbnail_large'];
        
        return $video_thumbnail;
    } elseif (preg_match('/youtube/', $url)) {
        $url_thumbnail_1 = explode("embed", $url)[1];
        $url_thumbnail = explode("?", $url_thumbnail_1)[0];
        
        return 'http://i3.ytimg.com/vi' . $url_thumbnail . '/hqdefault.jpg';
    } else {
        return false;
    }

}


// Get SVGs
function getSVG($path, $full_path = false)
{
    if ($full_path) {
        $loc = $path;
    } else {
        $loc = __DIR__ . "/images/$path";
    }


    if (!file_exists($loc)) {
        if ($full_path) {
            echo "file not found - " . $path;
        } else {
            echo "file not found - " . __DIR__ . "/images/$path";
        }

        return false;
    }
    $svg = file_get_contents($loc);

    return substr($svg, strpos($svg, '<svg'));
}

?>