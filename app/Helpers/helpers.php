<?php

if (! function_exists('getYouTubeVideoId')) {
    function getYouTubeVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $video_vars);
        return $video_vars['v'] ?? '';
    }
}