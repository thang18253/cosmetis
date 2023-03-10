@extends('frontLayout')
@section('frontEndContent')
<style>
     .rating .active{
    color: #ff9705 !important;
   }

</style>
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
  
    <!-- start main product -->

<div class="row product">
    <!-- start left sidebar include: category, wishlist, popular tag, newsletter -->
    <div class="col-sm-3 sidebar">
        <!--category -->
        <div class="category">
            <h3 class="category_heading">
                DANH M???C S???N PH???M
            </h3>
            <ul class="category_list">
                @foreach($category as $key => $muc)
                <li><a href="{{URL::to('/chi-tiet-danh-muc/'.$muc->category_id)}}">{{$muc->category_name}} <span>+</span></a></li>
                @endforeach
            </ul>
        </div>
        <!-- category -->
        <!-- start wishtlist -->
        <div class="wishlist">
            <h3>B??N CH???Y</h3>
            @foreach ($bestsellers as $key3 => $item3)
            <div class="wishlist_item">
                
                <img src="{{asset('backEnd/images/'.$item3->product_img)}}" alt="">
                <div class="wishlist_content">
                    <h4> <a href="{{URL::to('/chi-tiet-san-pham/'.$item3->product_id)}}" style="color: black;">  {{$item3->product_name}} </a></h4>
                    <p class="wishlist_price">{{number_format( $item3->product_price)}} VND</p>
                  
                </div>
           
            </div>
            @endforeach
           
        </div>
        <!-- end wishlist -->
        <!-- start popular tag -->
        <div class="popular_tag">
            <h3>B?? QUY???T L??M ?????P</h3>
            <ul class="popular_list">
                <li><a href="https://beauty2review.com/beauty-review/review-kem-chong-nang/">Review KCN Miin Daily Protection Sunblock ??? M???i Th??? ?????u ???n ??p, Ri??ng Thi???t K??? C??n Tr??i Chi???u</a></li>
                <li><a href="https://beauty2review.com/beauty-review/review-kem-chong-nang/">REVIEW Son Kem L?? Romand Zero Velvet Tint 5.5g, Tr???i Nghi???m Ch???t Vintage M???n M??i</a></li>
                <li><a href="https://beauty2review.com/beauty-review/review-kem-chong-nang/">Review T???t T???n T???t V??? Kem Ch???ng N???ng Miin Premium Tone Up Sunblock</a></li>
                <li><a href="https://beauty2review.com/beauty-review/review-kem-chong-nang/">T??? tin r??nh m??? ph???m, b???n ???? bi???t ph???n n?????c Lime Real Cover Pink Cushion ch??a?</a></li>
            </ul>
        </div>

        <!-- end popular tag -->
        <!-- start newsletter -->
        <div class="newsletter">
            {{-- <h3>NEWLETTERS</h3>
            <div class="content">
                <p>sign up for your newsletter</p>
                <input type="text" placeholder="Your email here">
                <button>Subcribe</button>
            </div> --}}
            <div class="image">
                <img src="{{asset('frontEnd/images/caythong4.gif')}}" alt="">
            </div>
        </div>
    </div>
    <!-- end newsletter -->
    <!-- end left side bar -->


    <!-- start list product -->
    <div class="col-sm-9 main_product">
        <div class="container">
         @foreach($category_name as $key =>$muc_ten)
            <div class="row heading">
                S???n ph???m {{$muc_ten->category_name}}
            </div>
         @endforeach
        <div class="row-loc">
            <label for="amount"> S???p x???p theo</label>
            <form id="form-sort">
            {{ csrf_field() }}
                <select name="sort_by" id="sort" class="form-control" form="form-sort">
                        <option value="none">Li??n quan</option>
                        <option value="moi_nhat">M???i nh???t</option>
                        <option value="ban_chay">B??n ch???y</option>
                        <option value="tang_dan">Gi?? t??ng d???n</option>
                        <option value="giam_dan">Gi?? gi???m d???n</option>
                        <option value="kytu_az">L???c theo t??n A ?????n Z</option>
                        <option value="kytu_za">L???c theo t??n Z ?????n A</option>
                </select>
            </form>
        </div>
        <div class ="row">
        
            @foreach($category_by_id as $key => $sp)
            <div class="col-sm-4 product_wrap">
                <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->product_id)}}">
                    <div class="home-product-item">
                        <div class="product_image">
                            <img src="{{URL::to('backEnd/images/'.$sp->product_img)}}"  alt="">
                            <div class="overlay"></div>
                            <form action="{{URL::to('/add-to-cart')}}" method="POST">
                            {{ csrf_field() }}
                                <input type="hidden" name="productid_hidden" value="{{$sp->product_id}}" />
                                <input type="hidden" name="product_cart_name" value="{{$sp->product_name}}" />
                                <input type="hidden" name="product_cart_price" value="{{$sp->product_price}}" />
                                <input type="hidden" name="product_cart_image" value="{{$sp->product_img}}" />
                                <input type="hidden" name="qty_cart" value="1" min="1"> 
                                @if($sp->product_quanity != 0)
                                    <button type="submit" class="add_cart" ><i class="fas fa-cart-plus"></i>Th??m v??o gi??? h??ng</button> 
                                @endif 
                            </form> 
                        </div>

                        <div class="product_content">
                            <h3 class="name">{{$sp->product_name}}</h3>
                            <?php
                                $ageDetail = 0;
                                if($sp->product_total_comment){
                                    $ageDetail = round($sp->product_total_rating / $sp->product_total_comment,2);
                                }
                            ?>
                          <div class="rating">
                            @for($i = 1; $i<=5;$i++)
                                <a href="#"><i class="fa fa-star {{$i <= $ageDetail ? 'active' : '' }}" style="color: #999"></i></a>
                            @endfor
                          </div>
                            <p class="price">
                             <span> {{number_format($sp->product_price)}} vn?? </span> 
                            </p>
                            <div class="add_to">
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->product_id)}}">
                                <button>Xem chi ti???t</button>
                            </div>
                        </div>
                        
                    </div>
                    </a>
                </div>
                
                @endforeach
            
         </div>
            <div class="row-paginate">
            <div class="col l-12 m-12 c-12 pagination_wrap">
                <div class="pagination">
                    <li style="display:inline;{{ ($category_by_id->currentPage() == 1) ? 'none;' : '' }}">
                        <a href="{{ $category_by_id->url(1) }}">&laquo;</a>
                    </li>
                    @for ($i = 1; $i <= $category_by_id->lastPage(); $i++)
                        <?php
                        $link_limit = 7;
                        $half_total_links = floor($link_limit / 2);
                        $from = $category_by_id->currentPage() - $half_total_links;
                        $to = $category_by_id->currentPage() + $half_total_links;
                        if ($category_by_id->currentPage() < $half_total_links) {
                        $to += $half_total_links - $category_by_id->currentPage();
                        }
                        if ($category_by_id->lastPage() - $category_by_id->currentPage() < $half_total_links) {
                            $from -= $half_total_links - ($category_by_id->lastPage() - $category_by_id->currentPage()) - 1;
                        }
                        ?>
                        @if ($from < $i && $i < $to)
                            <li style="display:inline;" class="{{ ($category_by_id->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $category_by_id->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                    <li style="display:inline;{{ ($category_by_id->currentPage() == $category_by_id->lastPage()) ? 'none;' : '' }}">
                        <a href="{{ $category_by_id->url($category_by_id->lastPage()) }}">&raquo;</a>
                    </li>
                </div>
            </div>
    </div>
            <div class="row sales">
                <div class="col l-6 m-6 c-12 single_sale">
                    <div class="single_sale_imgae">
                        <img src="{{asset('frontEnd/images/single_sale1.jpg')}}" alt="">
                        <div class="sale_overlay"></div>
                        <div class="sale_discount">Up to 40% off</div>
                    </div>
                </div>
                <div class="col l-6 m-6 c-12 single_sale">
                    <div class="single_sale_imgae">
                        <img src="{{asset('frontEnd/images/single_sale2.jpg')}}" alt="">
                        <div class="sale_overlay"></div>
                        <div class="sale_discount">Sale off 30%</div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <h3>BRANDS</h3>
                <ul class="col l-12 m-12 c-12 brand_list">
                    <li>
                        <img src="{{asset('frontEnd/images/brand1.jpg')}}" alt="">
                    </li>
                    <li>
                        <img src="{{asset('frontEnd/images/brand2.jpg')}}" alt="">
                    </li>
                    <li>
                        <img src="{{asset('frontEnd/images/brand3.jpg')}}" alt="">
                    </li>
                    <li>
                        <img src="{{asset('frontEnd/images/brand4.jpg')}}" alt="">
                    </li>
                    <li>
                        <img src="{{asset('frontEnd/images/brand5.jpg')}}" alt="">
                    </li>
                    <li>
                        <img src="{{asset('frontEnd/images/brand6.jpg')}}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div> 
</div>
</div>
  <!-- start slide and sub image -->

@endsection