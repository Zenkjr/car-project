@extends('layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container"><div class="col-md-12 pt-5">

            <div class="row">
                <div class="col-md-6">

                    <form class="container form-control">
                        <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                                <input class="form-control"  placeholder="Họ Tên Của Bạn">
                            </div>


                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <input class="form-control"  placeholder="Địa Chỉ Của Bạn">
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                            </div>
                            <input class="form-control"  placeholder="Số Điện Thoại Của Bạn">

                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-quote-right"></i></span>
                            </div>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu Đề Của Bạn">

                        </div>

                        <div class="form-group mt-3">
                            <label for="exampleInputHoten1">Nội Dung:</label>
                            <!-- <input type="textarea" name="noidung">  -->
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-check mt-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi Liên Hệ</button>
                    </form>
                </div>
                <div class="col-md-6" >
                    <!-- <form class="form-control"> -->
                    <div class="border-bottom">
                        <h3>CÔNG TY CỔ PHẦN XE AN THỊNH AUTO</h3>
                        <h5>Văn phòng đại diện: </h5>
                        <p>Cơ sở 1 :39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội </p>
                        <p>Cơ Sở 2 :99 Nguyễn Chánh, Trung Hoà, Cầu Giấy, Hà Nội</p>
                        <h5>Hotline mua bán :</h5>
                        <p>0961.694.594</p>
                        <h5>Email:</h5>
                        <p>tran.trungviet19@gmail.com</p>
                    </div>
                    <iframe class="pt-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58372841617!2d105.80747501446614!3d21.009317186008904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9e43748717%3A0x88517efdb51c1e3a!2zMzkgxJDGsOG7nW5nIEzDqiBWxINuIEzGsMahbmcsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1528797715142" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
