<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = $this->getVideosForUser(auth()->user());
        $meta = [
            'title' => 'Videos',
            'description' => 'Video terbaru',
            'keywords' => 'video update, video viral',
            'image' => null
        ];
        return view('videos.index', compact('videos', 'meta'));
    }

    private function getVideosForUser($user)
    {
        $limit = 0;
        switch ($user->membership_type) {
            case 'A':
                $limit = 3;
                break;
            case 'B':
                $limit = 10;
                break;
            case 'C':
                $limit = 100; // Assume no limit for type C
                break;
        }

        // Retrieve videos from the database
        return \App\Models\Video::limit($limit)->get();
    }
}
