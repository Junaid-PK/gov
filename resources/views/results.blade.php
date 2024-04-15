<style>
    body, h3, p, div, .card-body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<div class="main-panel">
    <div class="card-body" style="text-align:center">
        <img src="{{ asset('Content/logoAB.png') }}" style="width: 15%;" />

    </div>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body" style="text-align:center">
                                            <b>First Name:</b> {{ $firstName }} <br />
                                            <b>Middle Name:</b>{{ $middleName }} <br />
                                            <b>Last Name:</b> {{ $lastName }} <br />
                                            {{-- <b>Passport Number:</b> {{ $passportNum }} <br /> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body" style="text-align:center">
                                            {!! $qrImg !!}

                                        </div>
                                    </div>
                                </div>


                                <h3>Customs</h3>

                                <div class="row">
                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>(1). I am (We are) bringing fruits, plants, cut flowers, vegetables, soil, meat, live animals and organism, honey, wildlife products, plant material, food, animal products or live birds:</p>
                                                @if ($cusQuestFruits == true)
                                                    <div class="badge badge-danger">Yes</div>
                                                @else
                                                    <div class="badge badge-success">No</div>
                                                @endif
                                                <br />
                                                <p>(2). I am (We are) bringing pharmaceuticals, narcotics and other illicit drugs,and biological substaances:</p>
                                                @if ($cusQuestPhar == true)
                                                    <div class="badge badge-danger">Yes</div>
                                                @else
                                                    <div class="badge badge-success">No</div>
                                                @endif
                                                <br />
                                                <p>(3). I am (We are) bringing arms, ammunication, explosives, fireworks, toy guns or other weapons :</p>
                                                @if ($cusQuestArms == true)
                                                    <div class="badge badge-danger">Yes</div>
                                                @else
                                                    <div class="badge badge-success">No</div>
                                                @endif
                                                <br />
                                                <p>(4). I have(We have) commercial merchandise: (articles for sale, samples used for soliciitng orders or goods that are not considered personal effects)) </p>
                                                @if ($cusQuestMerch == true)
                                                    <div class="badge badge-danger">Yes</div>
                                                @else
                                                    <div class="badge badge-success">No</div>
                                                @endif
                                                <br />
                                                <p>(5). I am(We are) carrying currency or monetary instruments over (EC $10,000) or equivalen </p>
                                                @if ($cusQuestMon == true)
                                                    <div class="badge badge-danger">Yes</div>
                                                @else
                                                    <div class="badge badge-success">No</div>
                                                @endif
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body" style="text-align:center">
                                                {!! $qrImg !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</div>
