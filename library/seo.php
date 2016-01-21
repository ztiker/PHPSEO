<?php
///////////////////////////////////////
/// Iván Osorio                       //
///////////////////////////////////////
class SEO_FUNCTIONS{
	/// META TAGS ///
	protected $canonical				=	'<link rel="canonical" href="_VAL_" />';
	
	protected $title 					=	'<title>_VAL_</title>';
	protected $description				=	'<meta name="description" content="_VAL_" charset="utf-8" />';
	protected $keyword					=	'<meta name="keywords" content="_VAL_">';
	protected $author					=	'<meta name="author" content="_VAL_">';
	protected $cache					=	'<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="_VAL_">';
	/// OG TAGS FACEBOOK AND OTHER SOCIALS ///
	protected $_og_profile				=	'<meta property="profile:first_name" content="_VAL_" />';
	protected $_og_title				=	'<meta property="og:title" content="_VAL_" />';
	protected $_og_type					=	'<meta property="og:type" content="_VAL_" />';
	protected $_og_url					=	'<meta property="og:url" content="_VAL_" />';
	protected $_og_img					=	'<meta property="og:image" content="_VAL_" />';
	protected $_og_audio				=	'<meta property="og:audio" content="_VAL_" />';
	protected $_og_description			=	'<meta property="og:description" content="_VAL_" />';
	protected $_og_determiner			=	'<meta property="og:determiner" content="_VAL_" />';
	protected $_og_locale				=	'<meta property="og:locale" content="_VAL_" />';
	protected $_og_locale_alternate		=	'<meta property="og:locale:alternate" content="_VAL_" />';
	protected $_og_site_name			=	'<meta property="og:site_name" content="_VAL_" />';
	protected $_og_video				=	'<meta property="og:video" content="_VAL_" />';
	protected $_og_article				=	'<meta property="article:_TAG_" content="_VAL_" />';
	protected $_fb_id					=	'<meta property="fb:_TAG_" content="_VAL_" />';
	public function __construct(){
		if(@!define(ENCODE)){
			define('ENCODE','UTF-8');	
		}
	}
	protected function replace ($meta , $val){
		$out = str_replace	("_VAL_",$val,$meta	);
		return $out;	
	}
	protected function extend ($meta, $val){
		$out = str_replace ('_TAG_',$val,$meta);
		return $out;	
	}
}
class SEO extends SEO_FUNCTIONS
{
	function canonical($val){
		print(parent::replace($this->canonical , $val)."\n");	
	}
	function meta_title($val)
	{
		print(parent::replace($this->title	,	$val)."\n");
	}
	function meta_description($val)
	{
		$return = (parent::replace($this->description	,	htmlspecialchars(strip_tags(mb_substr($val,0,250,ENCODE))))."\n");
		print ($return);
	}
	function meta_keyword($val)
	{
		print(parent::replace($this->keyword	,	$val)."\n");
	}
	function meta_autor($val)
	{
		print(parent::replace($this->author	,	$val)."\n");
	}
	function cache($val)
	{
		print(parent::replace($this->cache	,	$val)."\n");
	}
	function og_title($val)
	{
		print(parent::replace($this->_og_title	,	$val)."\n");
	}
	function og_type($val)
	{
		print(parent::replace($this->_og_type	,	$val)."\n");
	}
	function og_url($val)
	{
		print(parent::replace($this->_og_url	,	$val)."\n");
	}
	function og_img($val)
	{
		print(parent::replace($this->_og_img	,	$val)."\n");
	}
	function og_audio($val)
	{
		print(parent::replace($this->_og_audio	,	$val)."\n");
	}
	function og_description($val)
	{
		$return = (parent::replace($this->_og_description	,	htmlspecialchars(strip_tags(mb_substr($val,0,250,ENCODE))))."\n");
		print ($return);
	}
	function og_determiner($val)
	{
		print(parent::replace($this->_og_determiner	,	$val)."\n");
	}
	function og_locale($val)
	{
		print(parent::replace($this->_og_locale	,	$val)."\n");
	}
	function og_locale_alternative($val)
	{
		print(parent::replace($this->_og_locale_alternate	,	$val)."\n");
	}
	function og_site_name($val)
	{
		print(parent::replace($this->_og_site_name	,	$val)."\n");
	}
	function og_video($val)
	{
		print(parent::replace($this->_og_video	,	$val)."\n");
	}
	function og_article($val,$tag=NULL){
			$target = parent::replace($this->_og_article	,	$val);
			print(parent::extend($target,	$tag)."\n");
			
	}
	function og_profile($val,$tag=NULL){
			$target = parent::replace($this->_og_article	,	$val);
			print(parent::extend($target,	$tag)."\n");
			
	}
	function og_fb($val, $tag=NULL){
			$target = parent::replace($this->_fb_id			,	$val);
			print(parent::extend($target,	$tag)."\n");	
	}
}
