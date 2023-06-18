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


    {{-- Di động --}}
    <div class="sec-banner bg0">
        <h1 class="cl5 txt-center respon1">
            Máy tính bảng
        </h1>
        <div class="container">
            <div class="row">

                @foreach ($accessorys as $accessory)
                    <div class="col-md-3 col-xl-3 px-0">
                        <!-- Block3 -->
                        <div class="block1 wrap-pic-w " id="do-rong">
                            <div class="block1-img">
                                <img src="/template_admin/img/{{ $accessory->ProImage }}" alt="IMG-BANNER">
                                <div class="block2-txt" id="txt">

                                    <h3>{{ $accessory->ProName }}</h3><br>
                                    <h4>{{ $accessory->ProPrice }}đ</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>


    @include('share_user.footer')
</body>

</html>