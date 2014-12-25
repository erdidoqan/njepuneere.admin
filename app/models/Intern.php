<?php

class Intern extends \Eloquent {

    protected $table = 'tbl_cv_intern';

    public static $rules = array(
		'com_name'=>'required',
		'pos'=> 'required'
		);

}