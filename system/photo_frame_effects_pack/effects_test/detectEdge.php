<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetectEdgeEffect extends PhotoFrameEffect {
	
	protected $effect = 'detectEdge';
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_edge_detect');
		$this->description = lang('photo_frame_edge_detect_desc');
	}
	
	public function render($image)
	{
		$image->detectEdge();
	}
}