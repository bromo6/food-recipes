@extends('master') @section('title', 'Food Recipes') @section('content')
<div id="station" class="container">
    <div  class="row">
        <div class="col">
            <h2 id="slideText" style="display:none;" class="text-center">Enter Dish Name</h2>
        </div>
    </div>

    <form class="insert" action="get_player" method="post">
        @csrf
        <input id="dishName" type="text" name="dish_Name" placeholder="Enter Dish Name">
        <button id="button" type="submit" name="button">Show Ingredients</button>
    </form>

</div>
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
<div id="parallax" class="row px-0">
    <div class="col px-0">
        <div class="parallax">
        </div>
    </div>
</div>
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

        $('#dishName').show("slide", {
            direction: "right"
        }, 6000);
        
        $('#button').show("slide", {
            direction: "right"
        }, 6000);

    });
</script>
@endsection
