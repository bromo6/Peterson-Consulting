@extends('master')
@section('title', 'Peterson Consulting')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" height="800" src="http://gethiredfast.com/wp-content/uploads/2011/12/Get-Hired-Fast-Help-Me-Get-a-Job.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="800" src="https://img.clipartxtras.com/9bccaae70873ae9ecf02e688e532fb56_company-meeting-cliparts-free-download-clip-art-free-clip-art-business-meeting-clipart-png_1024-750.jpeg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="800" src="..." >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
    <div class="row topText my-5">
        <div class="col">
            <h2>Past/Current Clients:</h2>
        </div>
    </div>
    <div class="row owlCaro my-5">
        <div class="col-10 owl-carousel owl-one owl-theme">
            <div>
                <img height="100" width="100" src="http://www.ey.com/ecimages/EY-logo-li.png" />
            </div>
            <div>
                <img height="100" width="100" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
            <div>
                <img height="100" width="100" src="" />
            </div>
        </div>
    </div>
    <div class="row bottomText my-5">
        <div class="col">
            <h2>Projects Including:</h2>
        </div>
    </div>
    <div class="row miniText">
        <!--MAIN COLUMN 1  ----------------------------------------->
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <p>Strategy Development</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Strategy Deployment</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Manufacturing Advisory</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
        </div>
        <!--MAIN COLUMN 2  -------------------------------------------->
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <p>CPG Business Development</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Sales Training</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
        </div>
        <!--MINI COLUMN 3  ----------------------------------------->
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <p>Executive Coaching</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>C-Suite Executive Selling</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
