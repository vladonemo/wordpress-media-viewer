<?php

class WpWrapper
{
    private $url;
    private $params;

    public function __construct($url)
    {
        $this->url = $url;
    }

    function getMedia($search_term)
    {
        $url = $this->url . 'wp-json/wp/v2/media?search=' . urlencode($search_term);
        return json_decode(file_get_contents($url));
    }

    function getMediaById($id)
    {
        $url = $this->url . 'wp-json/wp/v2/media/' . $id;
        return json_decode(file_get_contents($url));
    }

    function getMediaIds($search_term): array
    {
        return array_map(function($media){ return $media->id; }, $this->getMedia($search_term));
    }

    function getFirstMediaId($search_term)
    {
        foreach ($search_term as $search)
        {
            $media_array = $this->getMedia($search);
            if (!empty($media_array))
            {
                return $media_array[0]->id;
            }
        }
        return 0;
    }

    function getImageUrlById($id)
    {
        $media = $this->getMediaById($id);
        return empty($media) ? false : $media->source_url;
    }
}
