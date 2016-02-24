<?php
	namespace ashiraf\news;

	use Illuminate\Database\Eloquent\Model;

	Class News extends Model{
		protected $table = 'news';

		protected $fillable = ['title_en','title_sw','content_en','content_sw'];
	}
?>