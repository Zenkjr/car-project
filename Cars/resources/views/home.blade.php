@extends('layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container mt-3">
        <!-- The slideshow -->
        <div id="mySlide" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://bonbanh.com.vn/uploads/users/5680/salon/l_1334723981.jpg">
                </div>
                <div class="carousel-item">
                    <img src="https://bonbanh.com.vn/uploads/users/5680/salon/l_1322472621.jpg">
                </div>
                <div class="carousel-item">
                    <img src="https://bonbanh.com.vn/uploads/users/5680/salon/l_1322472742.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#mySlide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mySlide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- The end slideshow -->

        <!-- Brand -->
        <div class="container-fluid text-center mt-5">
            <h2>HÃNG NỔI BẬT</h2>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://www.pumpedinc.com/placeholders/logos/audi-logo.png">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://www.carlogos.org/logo/Mazda-logo-1997-1920x1080.png">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://interbrand.com/assets/00000001492.png">
                </div>
            </div>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <img class="img-fluid" src="https://www.accutechauto.co/wp-content/uploads/2017/12/hyundai.png">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://interbrand.com/assets/00000001585.png">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://interbrand.com/assets/00000001574.png">
                </div>
            </div>
        </div>
        <!-- End Brand -->

        <!-- Sản phẩm nổi bật -->
        <h2 class="text-center mt-5">SẢN PHẨM NỔI BẬT</h2>
        <br>
        <div class="manufacturer-header mt-3">
            <img class="img-fluid" src="http://www.pumpedinc.com/placeholders/logos/audi-logo.png" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
            <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
            <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
            <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
            <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="http://www.carlogos.org/logo/Mazda-logo-1997-1920x1080.png" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="http://interbrand.com/assets/00000001492.png" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="https://www.accutechauto.co/wp-content/uploads/2017/12/hyundai.png" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="http://templates.scriptsbundle.com/carspot/demos/images/posting/10.jpg" class="img-fluid">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>205 triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>Honda Civic 2017</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>Dầu</li>
                                <li><i class="fas fa-tachometer-alt"></i>35,000 km</li>
                                <li><i class="fas fa-cogs"></i>150 HP</li>
                                <li><i class="fas fa-car"></i>SUV</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>
@endsection