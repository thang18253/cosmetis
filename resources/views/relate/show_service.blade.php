@extends('frontLayout')
@section('frontEndContent')
<div class="container-fluid">
    <div class="row slide">
        <div class="col-sm-12 main_slide">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('frontEnd/images/slide_9.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5 class="slide_header">Big Christmas Sale</h5>
                            <p class="slide_desc">Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontEnd/images/slide_2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5 class="slide_header">Black Friday Sale up 70%</h5>
                            <p class="slide_desc">Some representative placeholder content for the second slide.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontEnd/images/slide_3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5 class="slide_header">Super Sale Black Friday</h5>
                            <p class="slide_desc">Some representative placeholder content for the third slide.</p> --}}
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    
    </div>
    <!-- end slide and sub image -->
 </div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            {{-- <div> --}}
                <div class="header_sv">
                    <h4 class="service_heading">T???i sao ph???i ch???n Beaty Group?</h4>
                </div>
              <div class="row">
                  <div class="col-md-1">
                    <img src="{{asset('frontEnd/images/logo_notext1.png')}}" id="logo_service" alt="">
                  </div>
                  <div class="col-md-11">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                        content here
                        </p>
                  </div>
              </div>
              
                    <p style="font-weight: bold;">C??u h???i th?????ng g???p:</p>
                    <ul>
                        <li>??i mua h??ng r???i, kh??ng v???a ?? c?? th??? ?????i l???i hay kh??ng?</li>
                        <li>T??i ???? ?????t h??ng, gi??? mu???n h???y ????n h??ng ph???i l??m sao?</li>
                        <li>T??i c?? ???????c tr??? h??ng n???u t??i kh??ng h??i l??ng v???i s???n ph???m t??i nh???n ???????c?</li>
                    </ul>
                <div class="row">
                    <div class="col-md-3 service_overview">
                        <div class="each_service">
                            <i class="fas fa-exchange-alt"></i>
                            <p>?????i tr???</p>
                        </div>
                    </div>
                    <div class="col-md-3 service_overview">
                        <div class="each_service">
                            <i class="fas fa-shipping-fast"></i>
                            <p>V???n chuy???n</p>
                        </div>
                    </div>
                    <div class="col-md-3 service_overview">
                        <div class="each_service">
                            <i class="fas fa-question-circle"></i>
                            <p>Ch??m s??c kh??ch h??ng</p>
                        </div>
                    </div>
                    <div class="col-md-3 service_overview">
                        <div class="each_service">
                            <i class="fas fa-question-circle"></i>
                            <p>B???o h??nh l??u d??i</p>
                        </div>
                    </div>
                </div>
               
            {{-- </div> --}}
        </div>
        <div class="col-md-4 contribute">
            <form action="">
                <div class="header_sv">
                    <h4 class="service_heading">????NG G??P ?? KI???N</h4>
                </div>
              
                <input type="text" placeholder="h??? v?? t??n"> <br>
                <input type="text" placeholder="email"> <br>
                <input type="text" placeholder="s??? ??i???n tho???i"> <br>
                <textarea name="" id="" cols="30" rows="5" placeholder="n???i dung ????ng g??p"></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="G???i ????ng g??p">
            </form>
        </div>
    </div>

    <div class="row doitra">
        <div class="col-md-12">
            <div class="header_sv">
                <h4 class="service_heading">CH??NH S??CH ?????I TR???</h4>
            </div>
          
            <p class="doitra_desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over
                 2000 years old. Richard McClintock, a Latin professor 
                 at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>
        </div>
        <div class="col-md-12">
            <h5>Ba b?????c ?????i tr??? ????n gi???n</h5>
        </div>
        <div class="col-md-4 doitra_step">
            <i class="far fa-comments first"></i>
            <p>Ph???n h???i tr??n fanpage ho???c g???i hotline t???i s??? 034556449 ????? ???????c t?? v???n chi ti???t</p>
        </div>
        <div class="col-md-4 doitra_step">
            <i class="fas fa-box-open second"></i>
            <p>????ng g??p s???n ph???m k??m th??ng tin ki???n h??ng</p>
        </div>
        <div class="col-md-4 doitra_step">
            <i class="fas fa-share-square thirth"></i>
            <p>G???i h??ng v??? ?????a ch??? 355 ????? Xu??n H???p qu???n 9 Th??nh ph??? H??? Ch?? Minh</p>
        </div>

    </div>
    <div class="row shipping">
        <div class="header_sv">
            <h4 class="service_heading">Qu?? tr??nh v???n chuy???n</h4>
        </div>
       
        <div class="col-md-4 shipping_img">
            <img src="{{asset('frontEnd/images/shipper.png')}}" alt="">
        </div>
        <div class="col-md-8">
            <div class="row sub_ship">
               
    
                <div class="col-md-11 offset-md-1">
                    <p>B?????c 1: G???i y??u c???u giao h??ng </p>
                    <p>Qu?? kh??ch c?? th??? th???c hi???n 1 trong 2 c??ch sau ????? y??u c???u ?????n nh???n h??ng v?? giao ?????n n??i c???n giao: </p>
                        <ul>
                            <li>G???i ??i???n tho???i tr???c ti???p ?????n s??? hotline </li>
                            <li>T??? m??nh ????ng k?? t??i kho???n tr??n trang v?? ti???n h??nh t???o v???n ????n. Sau khi t???o v???n ????n, ?????i ng?? nh??n vi??n t?? v???n s??? g???i ??i???n ?????n qu?? kh??ch ????? x??c nh???n ????n h??ng</li>
                            <li>C??ng ty ch??? nh???n h??ng khi ????n h??ng ???????c t???o tr??n h??? th???ng v???i ?????y ????? th??ng tin (?????a ch??? giao nh???n ph???i bao g???m ?????y ?????: s??? nh??, ???????ng, ph?????ng, qu???n).</li>
                        </ul>
                </div>
               
             </div>
            <div class="row sub_ship">
              
                   
                    <div class="col-md-11 offset-md-1">
                        <p>B?????c 2: Nh???n h??ng t???n n??i</p>
                        <ul>
                            <li>Khi c??ng ty ???? nh???n ???????c th??ng tin v??? v???n ????n c???a qu?? kh??ch, nh??n vi??n ??i???u ph???i s??? g???i ??i???n cho b???n ????? x??c nh???n l???i th??ng tin l???y h??ng</li>
                            <li>Khi qu?? kh??ch ???? x??c nh???n th??nh c??ng, nh??n vi??n ??i???u ph???i  s??? c??? nh??n vi??n giao h??ng tr???c ti???p ?????n nh???n h??ng c???a qu?? kh??ch.</li>
                            <li>Nh??n vi??n giao h??ng ?????n t???n nh??  qu?? kh??ch  ????? l???y h??ng.   Sau ???? h??ng h??a c???a qu?? kh??ch s??? ???????c mang v??? kho v?? qu???n l?? theo t???ng g??i d???ch v??? c???a c??ng ty ???? quy ?????nh</li>
                        </ul>
                    </div>
                   
                </div>
            <div class="row sub_ship">
               
               
                <div class="col-md-11 offset-md-1">
                    <p>B?????c 3: Giao h??ng cho kh??ch h??ng</p>
                </div>
              
            </div>
        </div>
    </div>

</div>

<div class="container-fluid">
    <div class="row map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22490.94611356003!2d106.7629115893542!3d10.820964767863158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527d4e7f051c1%3A0x5eaa32a7dd4f2b54!2sYaMe.vn!5e0!3m2!1sen!2s!4v1639407635423!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection