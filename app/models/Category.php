<?php

class Category extends Eloquent {

    public $table = 'categories';

    public function notes() {

        return $this->hasMany('Note');
    }
}
