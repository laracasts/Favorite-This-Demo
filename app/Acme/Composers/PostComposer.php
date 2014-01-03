<?php namespace Acme\Composers;

use View, DB, Auth;

class PostComposer {

    /**
     * Compose a post
     *
     * @param $view
     */
    public function compose($view)
    {
        $favorites = DB::table('favorites')->whereUserId(Auth::user()->id)->lists('post_id');

        $view->with('favorites', $favorites);
    }
}