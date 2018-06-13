@extends('layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container mt-3">
        <!-- The slideshow -->
        <div id="mySlide" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.ak-vs.com/interiordesign/int_05_beijingcarshowroom/int_beijingcarshowroom_07.jpg" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="https://spaceideology.files.wordpress.com/2009/01/bmw-museum-munich-17_lightweight-construction.jpg" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="http://www.ceramicsolutions.com.au/sites/default/files/mercedes_benz_center_stuttgart.jpg" width="1100" height="500">
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
                    <img class="img-fluid" src="https://wavelengthmarketing.files.wordpress.com/2014/01/screen-shot-2014-01-16-at-17-22-00.jpg">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="https://www.volkswagenag.com/presence/markenlogos/Lamborghini_Logo_Willkommen.jpg.x_1163.y_1900.trans">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://interbrand.com/assets/00000001492.png">
                </div>
            </div>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <img class="img-fluid" src="http://images.jkdaily.com/data/images/full/2485/hyundai-motor-america.jpg">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="https://s8096.pcdn.co/wp-content/uploads/2014/10/citroen-logo.jpg">
                </div>
                <div class="col-sm-4">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/1/1f/Lancia_Logo.jpg">
                </div>
            </div>
        </div>
        <!-- End Brand -->

        <!-- Sản phẩm nổi bật -->
        <h2 class="text-center mt-5">SẢN PHẨM NỔI BẬT</h2>
        <br>
        <div class="manufacturer-header mt-3">
            <img src="https://wavelengthmarketing.files.wordpress.com/2014/01/screen-shot-2014-01-16-at-17-22-00.jpg" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img src="https://www.volkswagenag.com/presence/markenlogos/Lamborghini_Logo_Willkommen.jpg.x_1163.y_1900.trans" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img src="http://interbrand.com/assets/00000001492.png" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="manufacturer-header mt-5">
            <img src="http://images.jkdaily.com/data/images/full/2485/hyundai-motor-america.jpg" width="100px">
            <span><a href="#">Xem thêm ></a></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        <div class="card-body">
                            <p class="text-danger" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente 1.6MT 2011</p>
                            <span class="border text-secondary">2015</span>
                            <span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>
                            <span class="text-danger float-right"><strong>359 triệu</strong></span>
                        </div>
                        <div class="d-flex flex-row p-1">
                            <div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự động</div>
                            <div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước 195 triệu</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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