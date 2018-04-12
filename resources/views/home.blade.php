@extends('master') @section('title', 'Peterson Consulting') @section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" width="1440" height="800" src="http://gethiredfast.com/wp-content/uploads/2011/12/Get-Hired-Fast-Help-Me-Get-a-Job.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block" width="1440" height="800" src="https://img.clipartxtras.com/9bccaae70873ae9ecf02e688e532fb56_company-meeting-cliparts-free-download-clip-art-free-clip-art-business-meeting-clipart-png_1024-750.jpeg">
        </div>
        <div class="carousel-item">
            <img class="d-block" width="1440" height="800" src="...">
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
    <div class="row my-5 px-5">
        <div class="col text-center">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti asperiores fuga quisquam consequuntur totam beatae dolorum consectetur enim sunt blanditiis ipsa dolores voluptatibus ea, reprehenderit, itaque dolor, molestias adipisci minima!</p>
        </div>
    </div>
    <div class="row includingText">
        <div class="col">
            <div class="projectBack"></div>
            <div class="row bottomText my-5">
                <div class="col text-center" style="margin-top:40px;">
                    <h2 class="proText">Projects Including:</h2>
                </div>
            </div>
            <div class="row miniText">
                <!--MAIN COLUMN 1  ----------------------------------------->
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <div id="accordion">
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Strategy Development
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Create the Vision</li>
                                                <li>Agree on the Mission</li>
                                                <li>Articulate Ambitions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Strategy Deployment
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Deploy Goals</li>
                                                <li>Identify Strategies</li>
                                                <li>Establish Measures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MAIN COLUMN 2  -------------------------------------------->
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <div id="accordion2">
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Consumer Package Goods</br>
                                                Business Development
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                            <ul>
                                                <li>Go to Market Strategies</li>
                                                <li>Broken Identification and Qualification</li>
                                                <li>Retail Introduction</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Supply Chain Advisory Services
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                        <div class="card-body">
                                            <ul>
                                                <li>New Product Processes</li>
                                                <li>Manufacturing Work Processes</li>
                                                <li>New Product Launch Planning</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MINI COLUMN 3  ----------------------------------------->
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <div id="accordion3">
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                Persuasive Communication
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion3">
                                        <div class="card-body">
                                            <ul>
                                                <li>Executive (C-Suite) Presentations</li>
                                                <li>Professional Sales Training</li>
                                                <li>Corporate Messaging</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Executive Coaching
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion3">
                                        <div class="card-body">
                                            <ul>
                                                <li>Challenging Personnel Matter</li>
                                                <li>Delegating and Managng Effectively</li>
                                                <li>Priority Setting in Complex Environment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row topText my-5">
        <div class="col text-center">
            <h2>Past/Current Clients:</h2>
        </div>
    </div>
    <div class="row owlCaro my-5">
        <div class="col-2"></div>
        <div class="col-8 owl-carousel owl-one owl-theme">
            <div>
                <a href="http://www.ey.com/">
                    <img height="100" width="60" src="http://www.ey.com/ecimages/EY-logo-li.png" />
                </a>
            </div>
            <div>
                <img height="100" width="60" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>
            <div>
                <img height="100" width="60" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>
            <div>
                <img height="100" width="60" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>
            <div>
                <img height="100" width="60" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>
            <div>
                <img height="100" width="60" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
            </div>

        </div>
        <div class="col-2"></div>
    </div>

@endsection @section('bottomjs')
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
        $('#example').tooltip(options)
    })
</script>
@endsection
