<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function upload($articleId,$url){
        if ($articleId!='' && $url !=''){
            $photo = new Photo();
            $photo->imgUrl = $url;
//            $photo->article($articleId)->save($photo);
        }
    }
}
