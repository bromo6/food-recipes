@extends('master')
@section('title', 'Food Recipes')
@section('content')
    <section id="context" class="heading contact text-center">
      <h3>Contact Us</h3>
    </section>


    <section class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="form-area">
            <form id="text" role="form">
              <br style="clear:both">
              <h5 style="margin-bottom: 10px;">Please leave us a message</h5>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
              </div>
              <button type="button" id="submit" name="submit" class="btn btn-outline-dark pull-right">Submit</button>
            </form>
          </div>
        </div>
        <div id="detailsbg" class="col-md-4">

        </div>
      </div>
    </section>
@endsection
