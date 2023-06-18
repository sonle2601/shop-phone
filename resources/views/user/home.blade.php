<!DOCTYPE html>
<html lang="en">

<head>
    @include('share_user.head')
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        @include('share_user.header')
    </header>

    <!-- Cart -->
    @include('share_user.cart')



    <!-- Slider -->
    @include('share_user.slider')


    <!-- Banner -->
    <div class="sec-banner bg0 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <a href="/di-dong">
                        <div class="block1 wrap-pic-w">
                            <div class="block1-img">
                                <img src="/template/images/di-dong1.avif" alt="IMG-BANNER">
                                <div class="block2-txt">
                                    <h3>Di động</h3>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <a href="/may-tinh-bang">
                        <div class="block1 wrap-pic-w">
                            <div class="block1-img">
                                <img src="/template/images/galaxytab1.avif" alt="IMG-BANNER">
                                <div class="block2-txt">
                                    <h3>Máy tính bảng</h3>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <a href="/laptop">
                        <div class="block1 wrap-pic-w">
                            <div class="block1-img">
                                <img src="/template/images/laptop1.jpg" alt="IMG-BANNER">
                                <div class="block2-txt">
                                    <h3>Laptop</h3>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <a href="/dong-ho-thong-minh">
                        <div class="block1 wrap-pic-w">
                            <div class="block1-img">
                                <img src="/template/images/dong-ho1.avif" alt="IMG-BANNER">
                                <div class="block2-txt">
                                    <h3>Đồng hồ thông minh</h3>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-2 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <a href="/phu-kien">
                        <div class="block1 wrap-pic-w">
                            <div class="block1-img">
                                <img src="/template/images/phu-kien1.avif" alt="IMG-BANNER">
                                <div class="block2-txt">
                                    <h3>Phụ kiện</h3>
                                </div>
                            </div>


                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- Di động --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Di động
        </h1>
        <div class="container">
            <div class="row">
                <div class="wrap-slick2">
                    <div class="slick2">
                        @foreach ($mobiles as $mobile)
                            <div class="col-md-3 col-xl-3 px-0">
                                <a href="/{{ $mobile->id }}" class="no-style">
                                    <!-- Block3 -->
                                    <div class="block1 wrap-pic-w" id="do-rong">
                                        <div class="block1-img">
                                            <img src="/template_admin/img/{{ $mobile->ProImage }}" alt="IMG-BANNER">
                                            <div class="block2-txt" id="txt">
                                                <h3>{{ $mobile->ProName }}</h3><br>
                                                <h4>{{ $mobile->ProPrice }}đ</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row text-center" style="width: 100px; margin: 0 auto;">
        <button class="btn btn-success load-more-data">Xem thêm</button>
    </div><br><br> --}}


    {{-- Di động xem thêm --}}
    {{-- <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Sản phẩm
        </h1>
        <div class="container">
            <div id="data-wrapper" class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 col-xl-3 px-0">
                        <a href="/{{ $product->id }}" class="no-style">
                            <!-- Block3 -->
                            <div class="block1 wrap-pic-w" id="do-rong">
                                <div class="block1-img">
                                    <img src="/template_admin/img/{{ $product->ProImage }}" alt="IMG-BANNER">
                                    <div class="block2-txt" id="txt">
                                        <h3>{{ $product->ProName }}</h3><br>
                                        <h4>{{ $product->ProPrice }}đ</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row text-center" style="width: 100px; margin: 0 auto;">
        <button class="btn btn-success load-more-data">Xem thêm</button>
    </div><br><br> --}}


    {{-- Máy tính bảng --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Máy tính bảng
        </h1>
        <div class="container">
            <div class="row">

                <div class="wrap-slick2">
                    <div class="slick2">
                        @foreach ($tabs as $tab)
                            <div class="col-md-3 col-xl-3 px-0">
                                <a href="/{{ $tab->id }}" class="no-style">
                                    <!-- Block3 -->
                                    <div class="block1 wrap-pic-w" id="do-rong">
                                        <div class="block1-img">
                                            <img src="/template_admin/img/{{ $tab->ProImage }}" alt="IMG-BANNER">
                                            <div class="block2-txt" id="txt">
                                                <h3>{{ $tab->ProName }}</h3><br>
                                                <h4>{{ $tab->ProPrice }}đ</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- Laptop --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Laptop
            <div class="container">
                <div class="row">

                    <div class="wrap-slick2">
                        <div class="slick2">
                            @foreach ($laptops as $laptop)
                                <div class="col-md-3 col-xl-3 px-0">
                                    <a href="/{{ $laptop->id }}" class="no-style">
                                        <!-- Block3 -->
                                        <div class="block1 wrap-pic-w" id="do-rong">
                                            <div class="block1-img">
                                                <img src="/template_admin/img/{{ $laptop->ProImage }}" alt="IMG-BANNER">
                                                <div class="block2-txt" id="txt">
                                                    <h3>{{ $laptop->ProName }}</h3><br>
                                                    <h4>{{ $laptop->ProPrice }}đ</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
    </div>

    {{-- đồng hồ thông minh --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Đồng hồ thông minh
            <div class="container">
                <div class="row">

                    <div class="wrap-slick2">
                        <div class="slick2">
                            @foreach ($watchs as $watch)
                                <div class="col-md-3 col-xl-3 px-0">
                                    <a href="/{{ $watch->id }}" class="no-style">
                                        <!-- Block3 -->
                                        <div class="block1 wrap-pic-w" id="do-rong">
                                            <div class="block1-img">
                                                <img src="/template_admin/img/{{ $watch->ProImage }}"
                                                    alt="IMG-BANNER">
                                                <div class="block2-txt" id="txt">
                                                    <h3>{{ $watch->ProName }}</h3><br>
                                                    <h4>{{ $watch->ProPrice }}đ</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>
    </div>

    {{-- Phụ kiện --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Phụ kiện
            <div class="container">
                <div class="row">

                    <div class="wrap-slick2">
                        <div class="slick2">
                            @foreach ($accessorys as $accessory)
                                <div class="col-md-3 col-xl-3 px-0">
                                    <a href="/{{ $accessory->id }}" class="no-style">
                                        <!-- Block3 -->
                                        <div class="block1 wrap-pic-w" id="do-rong">
                                            <div class="block1-img">
                                                <img src="/template_admin/img/{{ $accessory->ProImage }}"
                                                    alt="IMG-BANNER">
                                                <div class="block2-txt" id="txt">
                                                    <h3>{{ $accessory->ProName }}</h3><br>
                                                    <h4>{{ $accessory->ProPrice }}đ</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>
    </div>

    @include('share_user.footer')

    <script>
        var ENDPOINT = "{{ route('home') }}";
        var page = 1;

        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    console.log(response);
                    if (response.html == '') {
                        $('.auto-load').html("End :(");
                        $('.load-more-data').hide();
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append("<div class='row'>" + response.html + "</div>");
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>


</body>

</html>
