@extends('master')
@section('title', 'Food Recipes')
@section('content')
<form class="insert" action="get_player" method="post">
    @csrf
    <input id="dishName" type="text" name="playerName" placeholder="Enter Dish Name">
    <button id="button" type="submit" name="button">Show Ingredients</button>
</form>
<div id="graph" class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Heating</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
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
@endsection
