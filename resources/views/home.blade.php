@extends('master') @section('title', 'Food Recipes') @section('content')
<div id="station" class="container">
    <div  class="row">
        <div class="col">
            <h1 id="slideText" style="display:none;" class="text-center">Enter The Food You Are Looking For!</h1>
        </div>
    </div>

    <form class="insert" action="get_player" method="post">
        @csrf
        <input id="dishName" type="text" name="dish_Name" placeholder="Enter Dish Name"></br>
        <button id="button" class="btn btn-outline-info rounded-circle" type="submit" name="button">
            <i class="fas fa-search fa-2x searchButton"></i>
        </button>
    </form>

</div>
{{-------------------
---------------------
GRAPH
---------------------
-------------------}}
<div id="graph" class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Cooking Time</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
{{-------------------
---------------------
PARALLAX
---------------------
-------------------}}
<div id="parallax" class="row px-0">
    <div class="col px-0">
        <div class="parallax">
        </div>
    </div>
</div>
{{-------------------
---------------------
BEST OF THE MONTH
---------------------
-------------------}}
<div id="month" class="row">
    <div class="col-6">
        {{-------------------
        ---------------------
        CARD1
        ---------------------
        -------------------}}
        <div class="row">
            <div class="col">
                <h2 id="entree">Entree of the Month!</h2>
            </div>
        </div>
        <div id="card1" class="card">
            <div class="card-body">
                <h4 class="card-title">Orange Chicken</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div id="mini1" class="card" style="width: 10rem;">
                                <h5 class="card-title">Igredients</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="img1" class="card" style="width: 10rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        {{-------------------
        ---------------------
        CARD2
        ---------------------
        -------------------}}
        <div class="row">
            <div class="col">
                <h2 id="desert">Desert of the Month!</h2>
            </div>
        </div>
        <div id="card2" class="card">
            <div class="card-body">
                <h4 class="card-title">Chocolate Molten Cake</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div id="mini2" class="card" style="width: 10rem;">
                                <h5 class="card-title">Ingredients</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="img2" class="card" style="width: 10rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-------------------
---------------------
6 PICTURES
---------------------
-------------------}}
<div id="top6" class="row">
    <div class="col">
        <div id="app" class="row">
            <div class="col">
                <h3>Appetizers</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sal" class="row">
            <div class="col">
                <h3>Salads</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="ent" class="row">
            <div class="col">
                <h3>Entrees</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="des" class="row">
            <div class="col">
                <h3>Deserts</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('bottomjs')
<script>
    $(document).ready(function() {
        $('#slideText').show("slide", {
            direction: "left"
        }, 5000);


    });
    $(document).ready(function(){

        $('#dishName').show("slide", {
            direction: "left"
        }, 6000);

        $('#button').show("slide", {
            direction: "right"
        }, 7000);
    });
</script>
@endsection
