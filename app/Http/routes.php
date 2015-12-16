<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/bestapps', function(){
	$ety = array("name"=>"Etymology Dictionary","desc"=>"This application provides you [45885] with detailed explaination of meaning.","url"=>"https://play.google.com/store/apps/details?id=com.fpmil.developer.dictionary.ety");
	$esd = array("name"=>"English Sentence Dictionary","desc"=>"English Sentence Dictionary is an English-English dictionary. It includes 200.000 most common English words","url"=>"https://play.google.com/store/apps/details?id=com.fpmi.developer.eds");
	$story = array("name"=>"Audio Story English","desc"=>"Audio Story English is a free online collection of stories and poems in Mp3 (audiobook) format. ","url"=>"https://play.google.com/store/apps/details?id=vocaja.com.audiostoryenglish");
	$ja = array("name"=>"Japanese English Conversation","desc"=>"Japanese English Conversation includes 100 lessons, 1500 vocabularies and 1000 phrases for your daily conversation.","url"=>"https://play.google.com/store/apps/details?id=vocaja.com.conversation.ja");
	$medic = array("name"=>"Medical Dictionary","desc"=>"Medical Dictionary is ideal for both medical professionals and anyone who wants to keep up with the burgeoning array of terminology found in today's medical news.","url"=>"https://play.google.com/store/apps/details?id=vocaja.com.medical.dictionary");

	$apps = array($ety,$esd,$story,$ja,$medic);
	return json_encode($apps);
});
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
