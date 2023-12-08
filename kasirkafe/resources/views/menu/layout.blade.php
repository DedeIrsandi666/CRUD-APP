<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Daftar Menu</title>
</head>
<body>
 <div class="container">
    @yield('content')
 </div>   
</body>
</html>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>

    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Likes</div>
                                <h2>2,315</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Share</div>
                                <h2>3,984</h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Impressions</div>
                                <canvas id="seolinechart3" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">New Users</div>
                                <canvas id="seolinechart4" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body pb-0">
                    <h4 class="header-title">Social ads Campain</h4>
                    <div id="socialads" style="height: 245px;"></div>
                </div>
            </div>
        </div>
        <!-- Social Campain area end -->
        <!-- Statistics area start -->
        <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">User Statistics</h4>
                    <div id="user-statistics"></div>
                </div>
            </div>
        </div>
        <!-- Statistics area end -->
        <!-- Advertising area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Advertising & Marketing</h4>
                    <canvas id="seolinechart8" height="233"></canvas>
                </div>
            </div>
        </div>
        <!-- Advertising area end -->
        <!-- sales area start -->
        <div class="col-xl-8 col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Sales</h4>
                    <div id="salesanalytic"></div>
                </div>
            </div>
        </div>
        <!-- sales area end -->
        <!-- timeline area start -->
        <div class="col-xl-4 col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Timeline</h4>
                    <div class="timeline-area">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- timeline area end -->
        <!-- map area start -->
        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Marketing Area</h4>
                    <div id="seomap"></div>
                </div>
            </div>
        </div>
        <!-- map area end -->
        <!-- testimonial area start -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body bg1">
                    <h4 class="header-title text-white">Client Feadback</h4>
                    <div class="testimonial-carousel owl-carousel">
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="{{ asset('assets')}}/images/team/team-author1.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="{{ asset('assets')}}/images/team/team-author2.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="{{ asset('assets')}}/images/team/team-author3.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
    </div>