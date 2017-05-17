<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use BrowserDetect;
class ChuyenDeController extends Controller{
	public function viemtuyentienliet(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.viemtuyentienliet');
		}else{
			//return view('web.mobile.home');
		}
	}
	public function catbaoquydau(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.catbaoquydau');
		}else{
			//return view('web.mobile.home');
		}
	}
	public function viemnhiemquydau(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.viemnhiemquydau');
		}else{
			return view('web.chuyende.mobile.viemnhiemquydau');
		}
	}
	public function suimaoga(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.suimaoga');
		}else{
			return view('web.chuyende.mobile.suimaoga');
		}
	}
}