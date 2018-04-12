@extends('master')
@section('title', 'Peterson Consulting')
@section('content')
<div class="jumbotron jumbotron-fluid topJum" id="conJum">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="container inTouch">
    <div class="row">
        <div id="context" class="col">
            <h2>Contact Us</h2>
        </div>
    </div>
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
</div>
@endsection
