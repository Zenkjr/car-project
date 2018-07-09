@extends('layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container">
        <!-- Name of car -->
        <h3 class="mt-3 mb-3">Mazda 3 1.5AT 2017</h3>
        <div class="row">
            <div class="col-8">

                <!-- Slide -->
                <div id="listImg" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-big" src="https://hips.hearstapps.com/hmg-prod/images/2017-honda-civic-si-vs-2018-volkswagen-golf-gti-comparison-test-placement-1524248453.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-big" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-big" src="https://img.gaadicdn.com/images/mycar/large/maruti/alto-k10/marketimg/alto-k10.webp">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#listImg" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#listImg" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <ul class="row list-inline mt-3">
                    <li class="col-3 list-inline-item active" data-target="#listImg" data-slide-to="0">
                        <img class="d-block w-100 img-small" src="https://hips.hearstapps.com/hmg-prod/images/2017-honda-civic-si-vs-2018-volkswagen-golf-gti-comparison-test-placement-1524248453.jpg">
                    </li>
                    <li class="col-3 list-inline-item" data-target="#listImg" data-slide-to="1">
                        <img class="d-block w-100 img-small" src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">
                    </li>
                    <li class="col-3 list-inline-item" data-target="#listImg" data-slide-to="2">
                        <img class="d-block w-100 img-small" src="https://img.gaadicdn.com/images/mycar/large/maruti/alto-k10/marketimg/alto-k10.webp">
                    </li>
                </ul>

                <!-- Table detail -->
                <div class="row mt-3" style="font-size: 14px">
                    <div class="col-lg-6">
                        <div class="detail-line">
                            <div class="detail-line-lable">Tình trạng</div>
                            <div class="detail-line-value">Đã qua SD</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Nhãn hiệu</div>
                            <div class="detail-line-value">Cerato 1.6MT</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Số loại</div>
                            <div class="detail-line-value"></div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Xuất xứ</div>
                            <div class="detail-line-value">Lắp ráp trong nước Việt Nam</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Năm sản xuất</div>
                            <div class="detail-line-value">2016</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Màu xe</div>
                            <div class="detail-line-value">Bạc</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Màu nội thất</div>
                            <div class="detail-line-value">Đen</div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="detail-line">
                            <div class="detail-line-lable">Kiểu dáng</div>
                            <div class="detail-line-value">Sedans</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Số chỗ ngồi</div>
                            <div class="detail-line-value">5</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Số cửa</div>
                            <div class="detail-line-value">4</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Dẫn động</div>
                            <div class="detail-line-value">Một cầu</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Nhiên liệu</div>
                            <div class="detail-line-value">Xăng</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Hộp số</div>
                            <div class="detail-line-value">Số sàn</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Số km đã đi</div>
                            <div class="detail-line-value">22.000</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-4">
                <div class="border p-3">
                    <div class="text-center">
                        <h3>Giá: <strong class="text-danger">900</strong> triệu</h3>
                    </div>
                    <p>Địa chỉ xem xe:</p>
                    <h5>AN THỊNH AUTO</h5>
                    <p>39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-success">Quan tâm</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Các mẫu oto tương tự -->
        <h4 class="text-center mt-3">Các mẫu ôtô tương tự</h4>
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
@endsection