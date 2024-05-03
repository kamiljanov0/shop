<x-layouts.main>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>Mahsulotlar</th>
                    <th>Narxi</th>
                    <th>Soni</th>
                    <th>Summa</th>
                    <th>Chegirma</th>
                    <th>Olib tashlash</th>
                </tr>
                </thead>
                <tbody class="align-middle">
                <tr>
                    @php $total = 0 @endphp
                    @foreach((array)session('cart') as $id => $details)
                        @php if (($details['discount']) != null)
                     {
                    $total+= $details['quantity'] * $details['discount'];
                      }else{
                          $total+= $details['price'] * $details['quantity'];
                      }
                     @endphp
                    @endforeach
                    @foreach((array)session('cart') as $id => $details)
                    <td class="align-middle"><img src="" alt="" style="width: 50px;"> {{$details['product_name']}}</td>
                    <td class="align-middle">{{$details['price']}} UZS</td>
                        <td class="align-middle"><img src="" alt="" style="width: 50px;"> {{$details['quantity']}}</td>

                    <td class="align-middle">{{$details['price']*$details['quantity']}} UZS</td>
                        <td class="align-middle">
                            @if($details['discount'] != null)
                            {{$details['discount']}} UZS
                          @else
                              0 UZS
                        @endif
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{ route('removeProduct',['id'=>$details['id']])}}">
                                @csrf
                                <button class="btn btn-sm btn-danger cart_remove" data-id="{{ $details['id'] }}"><i class="fa fa-times"></i></button>
                                <input type="hidden" name="id" value="{{ $details['id'] }}">
                            </form>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Promocode">
                    <div class="input-group-append">

                        <button class="btn btn-primary">Yuborish</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6><b>Qiymati</b></h6>
                        <h6>{{$total}} UZS</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6><b>Ishlatilgan bonus:</b></h6>
                        <h6>0 UZS</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6><b>Promocode:</b></h6>
                        <h6>0 UZS</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6><b>Yetkazib berish summasi:</b></h6>
                        <h6>0 UZS</h6>
                    </div>
                </div>

                <br>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5><b>Jami:</b></h5>
                        <h5 id="totalCost">{{$total}}</h5>
                    </div>
                    <a href="@if($address == false){{route('addresses.create')}}
                    @else
                    {{route('orders.create')}}
                    @endif" id="buyButton" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Buyurtma berish</a>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>



</x-layouts.main>
