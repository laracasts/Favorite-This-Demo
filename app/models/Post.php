<?php

class Post extends Eloquent {
    protected $fillable = ['title', 'user_id', 'body'];
}
