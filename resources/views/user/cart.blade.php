<!DOCTYPE html>
<html lang="en">

<head>
    @include('share_user.head')
</head>

<body class="animsition">

    <!-- Header -->
    @include('share_user.header')

    <!-- Cart -->
    @include('share_user.cart')


    <!-- breadcrumb -->
    <div style="margin-top: 70px;"></div>
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <form class="bg0 p-t-75 p-b-85" action="{{ route('cart.update') }}" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart" style="width: 100%;">
                                <tr class="table_head">
                                    <th class="column-1 text-center" style="width:3%">Chọn</th>
                                    <th class="column-1 text-center">Sản phẩm</th>
                                    <th class="column-2 text-center"></th>
                                    <th class="column-3 text-center">Giá</th>
                                    <th class="column-4 text-center">Số lượng</th>
                                    <th class="column-5 text-center">Màu sắc</th>
                                    <th class="column-6 text-center">Dung lượng</th>
                                    <th class="column-7 text-center">Tổng cộng</th>
                                    <th class="column-6 text-center">Xóa</th>
                                </tr>
                                @php
                                    $sum = 0;
                                @endphp

                                @foreach ($products as $product)
                                    <input type="hidden" name="productId[]" value="{{ $product->id }}">


                                    <tr class="table_row">
                                        <td class="column-1 text-center">
                                            <input type="checkbox" name="productIds[]" value="{{ $product->id }}"
                                                onchange="updateSelectedProductIds(this)">
                                        </td>
                                        <td class="column-1 text-center">
                                            <div class="how-itemcart1">
                                                <img src="/template_admin/img/{{ $product->ProImage }}" alt="IMG">
                                            </div>
                                        </td>
                                        <td class="column-2 text-center">{{ $product->ProName }}</td>
                                        <td class="column-3 text-center">
                                            <span class="product-price">{{ $product->ProPrice }}đ</span>
                                        </td>
                                        <td class="column-4 text-center">
                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>
                                                <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                    name="num-product[{{ $product->id }}]"
                                                    value="{{ $product->pivot->quantity }}">
                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="column-5 text-center">
                                            <div class="size-600 respon6-next ">
                                                <div class="rs1-select2 bor8 bg0">

                                                    <select class="js-select2" name="color[{{ $product->id }}]">
                                                        <option>Chọn</option>
                                                        <option value="vàng"
                                                            {{ $product->pivot->color == 'vàng' ? 'selected' : '' }}>
                                                            Vàng</option>
                                                        <option value="trắng"
                                                            {{ $product->pivot->color == 'trắng' ? 'selected' : '' }}>
                                                            Trắng</option>
                                                        <option value="đen"
                                                            {{ $product->pivot->color == 'đen' ? 'selected' : '' }}>Đen
                                                        </option>
                                                        <option value="tím"
                                                            {{ $product->pivot->color == 'tím' ? 'selected' : '' }}>Tím
                                                        </option>
                                                    </select>


                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="column-6 text-center">
                                            <div class="size-600 respon6-next">
                                                <div class="rs1-select2 bor8 bg0">
                                                    <select class="js-select2" name="info[{{ $product->id }}]">
                                                        <option>Chọn</option>
                                                        <option value="64"
                                                            {{ $product->pivot->info == '64' ? 'selected' : '' }}>64 GB
                                                        </option>
                                                        <option value="128"
                                                            {{ $product->pivot->info == '128' ? 'selected' : '' }}>128
                                                            GB</option>
                                                        <option value="256"
                                                            {{ $product->pivot->info == '256' ? 'selected' : '' }}>256
                                                            GB</option>
                                                        <option value="512"
                                                            {{ $product->pivot->info == '512' ? 'selected' : '' }}>512
                                                            GB</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </div>

                                        </td>
                                        <td class="column-7 text-center">
                                            {{ $product->ProPrice * $product->pivot->quantity }}.000đ</td>
                                        <td class="column-7 text-center">
                                            <a href="/cart/delete/{{ $product->id }}" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @php
                                        $sum += $product->ProPrice * $product->pivot->quantity;
                                    @endphp
                                @endforeach



                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"
                                    name="coupon" placeholder="Mã giảm giá">

                                <div
                                    class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    Nhập mã giảm giá
                                </div>



                            </div>

                            <div
                                class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                <button typy="submit">Cập nhật giỏ hàng</button>
                            </div>
                            <a href="/user/buy-products">
                                <div
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                    <button formaction="{{ route('cart.buy') }}">Mua ngay</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Tổng
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>

                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    {{ $sum }}.000đ
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2">
                                    Shipping:
                                </span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    There are no shipping methods available. Please double check your address, or
                                    contact us if you need any help.
                                </p>

                                <div class="p-t-15">
                                    <span class="stext-112 cl8">
                                        Calculate Shipping
                                    </span>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <select class="js-select2" name="time">
                                            <option>Select a country...</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                    <div class="bor8 bg0 m-b-12">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state"
                                            placeholder="State /  country">
                                    </div>

                                    <div class="bor8 bg0 m-b-22">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                            name="postcode" placeholder="Postcode / Zip">
                                    </div>

                                    <div class="flex-w">
                                        <div
                                            class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                            Update Totals
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    {{ $sum }}.000đ
                                </span>
                            </div>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proceed to Checkout
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
        <input type="hidden" name="action" value="delete">

        @csrf
    </form>




    <!-- Footer -->
    @include('share_user.footer')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // JavaScript
        var selectedProductIds = []; // Biến lưu trữ giá trị đã chọn

        function updateSelectedProductIds(checkbox) {
            var productId = checkbox.value;

            if (checkbox.checked) {
                // Nếu checkbox được chọn, thêm giá trị productId vào mảng selectedProductIds
                selectedProductIds.push(productId);
            } else {
                // Nếu checkbox bị bỏ chọn, loại bỏ giá trị productId khỏi mảng selectedProductIds
                var index = selectedProductIds.indexOf(productId);
                if (index !== -1) {
                    selectedProductIds.splice(index, 1);
                }
            }

            // Hiển thị các giá trị đã chọn (hoặc sử dụng chúng theo nhu cầu)
            console.log(selectedProductIds);
            $.ajax({
                url: "{{ route('cart.buy') }}",
                type: "post",
                data: {
                    productIds: selectedProductIds,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Xử lý kết quả thành công
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi
                }
            });
        }
    </script>

    {{-- <script>
        const numProductInput = document.querySelector('.num-product');
        const productPriceElement = document.querySelector('.product-price');
        const totalPriceElement = document.querySelector('.total-price');

        // Lấy giá tiền ban đầu và số lượng ban đầu
        const initialPrice = parseFloat(productPriceElement.textContent);
        const initialQuantity = parseInt(numProductInput.value);

        // Cập nhật tổng giá tiền ban đầu
        const initialTotalPrice = initialPrice * initialQuantity;
        totalPriceElement.textContent = '$ ' + initialTotalPrice.toFixed(2);

        // Lắng nghe sự kiện thay đổi số lượng
        numProductInput.addEventListener('change', function() {
            const quantity = parseInt(this.value);

            // Cập nhật tổng giá tiền mới
            const totalPrice = initialPrice * quantity;
            totalPriceElement.textContent = '$ ' + totalPrice.toFixed(2);
        });
    </script> --}}


</body>

</html>
