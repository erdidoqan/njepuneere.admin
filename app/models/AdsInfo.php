<?php

class AdsInfo extends \Eloquent {

    protected $table = 'ads_infos';


    public function ads()
    {
        return $this->belongsToMany('Ads');
    }
}
