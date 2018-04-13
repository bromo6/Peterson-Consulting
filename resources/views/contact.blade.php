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
            <h2 class="mx-0">Contact Us</h2>
        </div>
    </div>
  <div class="row">
    <div class="col-md-8">
      <div class="form-area">
        <form id="text" role="form" action="sendEmail" method="POST">
          <br style="clear:both">
          <h5 style="margin-bottom: 10px;">Please leave us a message</h5>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message *" maxlength="140" rows="7"></textarea>
          </div>
          <button type="button" id="submit" name="submit" class="btn btn-outline-dark pull-right">Submit</button>
        </form>
        <p class="text-primary email-msg"></p>
      </div>
    </div>
    <div id="detailsbg" class="col-md-4">

    </div>
  </div>
</div>
@endsection
@section('bottomjs')
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("#submit").on("click", function(response) {

var formName = $("#name").val();
var formComment = $("#message").val();
var formEmail = $("#email").val();

var data = {
    name: formName,
    comment: formComment,
    email: formEmail
};

$.ajax({
    method: 'POST',
    url: 'sendEmail',
    data: data
}).done(function(response) {
    $(".email-msg").html(response);
    $("#name").val("");
    $("#email").val("");
    $("#message").val("");
});

});
</script>
@endsection
