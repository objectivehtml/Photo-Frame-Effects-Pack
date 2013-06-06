<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RemoveMeanEffect extends PhotoFrameEffect {
	
	protected $effect = 'removeMean';
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_remove_mean');
		$this->description = lang('photo_frame_remove_mean_desc');
	}
	
	public function render($image)
	{
		$image->removeMean();
	}
}