@extends('master') @section('title', 'Food Recipes') @section('content')
<?php
if (!empty($recipe)) {
    dump($recipe);
}
?>

    <div id="station" class="container">
        <div class="row">
            <div class="col">
                <h1 id="slideText" style="display:none;" class="text-center">What Dish Are You Looking For?</h1>
            </div>
        </div>

        <form class="insert" action="get_recipes" method="post">
            @csrf
            <input id="dishName" type="text" name="dish_Name" placeholder="Enter Dish Name"></br>
            <button id="button" class="btn btn-outline-info rounded-circle" type="submit" name="button">
            <i class="fas fa-search fa-2x searchButton"></i>
        </button>
        </form>

    </div>
    {{------------------- --------------------- GRAPH --------------------- -------------------}}
    <div id="modalIngre" class="row">
        <div class="col">
            <div class="row mx-4">
                @if(!empty($recipes) || !empty($ingredients)) @foreach($recipes['results'] as $recipe)
                <div class="col-3 mt-3 mx-0" style="padding:20px;">
                    <img data-toggle="modal" data-target=".bd-example-modal-lg" data-id="{{$recipe['id']}}" class="recPic" width="300px" height="300px" src="https://spoonacular.com/recipeImages/{{$recipe['image']}}" />
                </div>
                @endforeach @endif
                <!-- Large modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bookmark">
                            <div class="modal-header headButt">
                                <h5 class="modal-title foodTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h6>Ingredients</h6>
                                        <ul class="spices mt-4">

                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col timeSpent prepContainer">
                                                <h6>Prep Time</h6>
                                                <p class="prepTime"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col timeSpent cookingContainer">
                                                <h6>Cooking Time</h6>
                                                <p class="cookTime"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col timeSpent totalContainer">
                                                <h6>Total Time</h6>
                                                <p class="total"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer footnote">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{------------------- --------------------- INTRO --------------------- -------------------}}
    <div class="row">
        <div class="col">
            <p id="intro">
                Hello this website was created to help make elegant foods easily!
                <br> By simply telling us the name of any food/ingredient you will be able to find<br>what ingredients are needed and how to create any dish in the world!
            </p>
        </div>
    </div>
    {{------------------- --------------------- PARALLAX --------------------- -------------------}}
    <div id="parallax" class="row px-0">
        <div class="col px-0">
            <div class="parallax">
            </div>
        </div>
    </div>
    {{------------------- --------------------- BEST OF THE MONTH --------------------- -------------------}}
    <div id="month" class="row">
        <div class="col-6">
            <div id="card1" class="card facts">
                <div class="card-body">
                    <h4 id="funHeader" class="card-title" style="border-bottom:1px solid black;">FUN FACT</h4>
                    <div class="card-body">
                        <p id="randomFact" style="font-size:25px;"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div id="card2" class="card facts">
                <div class="card-body">
                    <h4 class="card-title" style="border-bottom:1px solid black;">RANDOM JOKE</h4>
                    <div class="card-body">
                        <div class="row">
                            <p id="joke" style="font-size:25px;"></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{------------------- --------------------- 6 PICTURES --------------------- -------------------}}
    <div id="top6" class="row">
        <div class="col">

            {{------------------- --------------------- APPETIZERS --------------------- -------------------}}

            <div id="app" class="row">
                <div class="col">
                    <h3>Appetizers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="548547" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">

                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            {{------------------- --------------------- SALADS --------------------- -------------------}}

            <div id="sal" class="row">
                <div class="col">
                    <h3>Salads</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            {{------------------- --------------------- ENTREES --------------------- -------------------}}

            <div id="ent" class="row">
                <div class="col">
                    <h3>Entrees</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            {{------------------- --------------------- DESERTS --------------------- -------------------}}

            <div id="des" class="row">
                <div class="col">
                    <h3>Deserts</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top recPic" data-id="215179" src="https://spoonacular.com/recipeImages/cottage-cheese-salad-2-103182.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection @section('bottomjs')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            $.ajax({
                url: '/get_joke',
                method: 'get'
            }).done(function(response) {
                response = JSON.parse(response);
                $("#joke").html(response.text);

            });

            $.ajax({
                url: '/get_randomFact',
                method: 'get'
            }).done(function(response) {
                response = JSON.parse(response)
                $("#randomFact").html(response.text);
            });


            $('#slideText').show("slide", {
                direction: "left"
            }, 5000);

            $('.recPic').on('click', function() {
                var recipeId = $(this).attr('data-id');

                $.ajax({
                        url: '/get_recipe_details',
                        method: 'post',
                        data: {
                            id: recipeId
                        }
                    })
                    .done(function(response) {
                        response = JSON.parse(response);
                        console.log(response);

                        if (typeof response.preparationMinutes == 'undefined') {
                            $('.prepContainer').hide();
                        } else {
                            $('.prepContainer').show();
                        }

                        if (typeof response.cookingMinutes == 'undefined') {
                            $('.cookingContainer').hide();
                        } else {
                            $('.cookingContainer').show();
                        }

                        $('.modal-title').html(response.title);
                        $('.prepTime').html(response.preparationMinutes + " minutes ");
                        $('.cookTime').html(response.cookingMinutes + " minutes ");
                        $('.total').html(response.readyInMinutes + " minutes ");
                        for (var i = 0; i < response.extendedIngredients.length; i++) {

                            $('.spices').append("<li>" +
                                response.extendedIngredients[i].originalString + "</li>");
                        }
                        // $('.time').html(response.)

                        // append our response to the modal
                        // display the modal
                    })
            })
        });
    </script>
    @endsection
