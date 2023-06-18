@foreach ($products as $product)
    <div class="col-md-3 col-xl-3 px-0">
        <!-- Block3 -->
        <div class="block1 wrap-pic-w " id="do-rong">
            <div class="block1-img">
                <img src="/template_admin/img/{{ $product->ProImage }}" alt="IMG-BANNER">
                <div class="block2-txt" id="txt">

                    <h3>{{ $product->ProName }}</h3><br>
                    <h4>{{ $product->ProPrice }}đ</h4>
                </div>
            </div>

        </div>
    </div>
@endforeach
