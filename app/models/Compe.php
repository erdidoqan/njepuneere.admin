<?php

class Compe extends \Eloquent {

    protected $table = 'tbl_cv_compe';

    public static $rules = array(
		'compe_name'=>'required'
		);

}