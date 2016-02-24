<?php 
namespace ashiraf\news\Http;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use ashiraf\news\News as News;

class NewsController extends Controller{

	public function index(){
		return "yes am here";
	}
	public function test_index(){
		return "hahahahahah it work";
	}
}
