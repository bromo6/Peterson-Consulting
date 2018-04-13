@extends('master') @section('title', 'Peterson Consulting') @section('content')
<div id="typeTry1">
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" width="1440" height="800" src="https://images.pexels.com/photos/886465/pexels-photo-886465.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
            <div class="carousel-item">
                <img class="d-block" width="1440" height="800" src="https://images.pexels.com/photos/515169/pexels-photo-515169.jpeg?auto=compress&cs=tinysrgb&h=350">
            </div>
            <div class="carousel-item">
                <img class="d-block" width="1440" height="800" src="https://images.pexels.com/photos/933153/pexels-photo-933153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
        </div>
        <a class="carousel-control-prev caroBtn" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon prev-next" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next caroBtn" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon prev-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="type1"></div>
</div>

    <div class="row my-5 px-5">
        <div class="col text-center">
            <h1 style="margin-top:450px;">Title of paragraph</h1>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti asperiores fuga quisquam consequuntur totam beatae dolorum consectetur enim sunt blanditiis ipsa dolores voluptatibus ea, reprehenderit, itaque dolor, molestias adipisci minima!</p>
        </div>
    </div>
    <div class="row includingText">
        <div class="col">
            <div class="projectBack"></div>
            <div class="row bottomText my-5">
                <div class="col text-center" style="margin-top:40px;">
                    <h1 class="proText">Projects Including</h1>
                </div>
            </div>
            <div class="row miniText">
                <!--MAIN COLUMN 1  ----------------------------------------->
                <div class="col-3 main1">
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
                                                <p> - Create the Vision</p>
                                                <p> - Agree on the Mission</p>
                                                <p> - Articulate Ambitions</p>
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
                                                <p> - Deploy Goals</p>
                                                <p> - Identify Strategies</p>
                                                <p> - Establish Measures</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MAIN COLUMN 2  -------------------------------------------->
                <div class="col-3 main2">
                    <div class="row">
                        <div class="col">
                            <div id="accordion2">
                                <div class="card cardRow">
                                    <div class="card-header rowHead" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link projectsInclude" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                CPG Business Development
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion2">
                                        <div class="card-body">
                                                <p> - Go to Market Strategies</p>
                                                <p> - Broken Identification and Qualification</p>
                                                <p> - Retail Introduction</p>
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
                                                <p> - New Product Processes</p>
                                                <p> - Manufacturing Work Processes</p>
                                                <p> - New Product Launch Planning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MINI COLUMN 3  ----------------------------------------->
                <div class="col-3">
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
                                                <p> - Executive (C-Suite) Presentations</p>
                                                <p> - Professional Sales Training</p>
                                                <p> - Corporate Messaging</p>
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
                                                <p> - Challenging Personnel Matter</p>
                                                <p> - Delegating and Managng Effectively</p>
                                                <p> - Priority Setting in Complex Environment</p>
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
            <h1>Past/Current Clients</h1>
        </div>
    </div>
    <div class="row owlCaro my-5">
        <div class="col-2"></div>
        <div class="col-8 owl-carousel owl-one owl-theme">
            <div>
                <a href="http://www.ey.com/">
                    <img height="100" width="50" src="http://www.ey.com/ecimages/EY-logo-li.png" />
                </a>
            </div>
            <div>
                <a href="https://www.fonterra.com/nz/en.html">
                    <img height="100" width="50" src="https://pbs.twimg.com/profile_images/904939312076144640/QNtr-HbG_400x400.jpg" />
                </a>
            </div>
            <div>
                <a href="https://www.hartagriculture.com/">
                    <img height="100" width="50" src="http://hart2hartfarm.org/wp-content/uploads/2017/01/hart2hart-farm-logo.png" />
                </a>
            </div>
            <div>
                <a href="http://missiontexas.us/city-departments/city-secretary/minutes-and-agendas/medc/">
                    <img height="100" width="50" src="https://pbs.twimg.com/profile_images/811745289174253568/kdtbtJsc_400x400.jpg" />
                </a>
            </div>
            <div>
                <a href="https://www.modernimpact.com/">
                    <img height="100" width="50" src="https://www.modernimpact.com/wp-content/uploads/2017/06/MI-Favicon-1.jpg" />
                </a>
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
