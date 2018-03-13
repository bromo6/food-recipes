<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function searchRecipe(Request $request)
    {
        $dishName = $request->dish_Name;
        $curl = curl_init();

        curl_setopt_array($curl, array(
      CURLOPT_URL => "https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/search?query=$dishName&number=12",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Postman-Token: 9c5fbdfb-7008-468f-95b0-fa91c5970b0d",
        "X-Mashape-Key: USuehJTkFLmshb5MmGtGN72avuj8p1LDl9njsncxjeS3RyJjRe"
      ),
    ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $recipes = json_decode($response, true);
        $data = [
            'recipes' => $recipes
        ];
        return view('home')->with($data);
    }
}
