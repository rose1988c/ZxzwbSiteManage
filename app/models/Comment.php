<?php

class Comment extends Eloquent {

	public static $rules = array();

	protected $softDelete = true;
	protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	public function post()
	{
		return $this->belongsTo('Post', 'post_id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}