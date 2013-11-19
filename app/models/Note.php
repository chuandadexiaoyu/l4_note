<?php

class Note extends Eloquent {

    public $table = 'notes';

    public function category() {

        return $this->hasMany('Category');
    }
}
