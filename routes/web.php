<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');

});

Route::get('/about', function () {
    return view('about');

});
Route::post('/get_recipes', 'RecipeController@searchRecipe');

Route::post('/get_ingredients', 'RecipeController@searchIngredient');

Route::post('/get_recipe_details', 'RecipeController@getRecipeById');

Route::get('/get_joke', 'RecipeController@randomJoke');

Route::get('/get_randomFact', 'RecipeController@randomFact');
