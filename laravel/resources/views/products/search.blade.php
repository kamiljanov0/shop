<x-layouts.main>


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">




                <!-- Size Start -->

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Saralash</span></h5>
                <div class="bg-dark p-4 mb-30" >
                    <h5 class="section-title position-relative  text-uppercase mb-3"><span class="text-primary pr-3">Nomi orqali</span></h5>
                    <div class=" p-4 mb-30">
                        <div class="flex-column " style=" height: 300px"  >
                            <form action="{{ route('products.search') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-5" name="query" value="kompyuter">Kompyuter</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-5" name="query"  value="telefon" >Telefon</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-5" name="query" value="televizor" >Televizor</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-5" name="query"  value="kitob" >Kitoblar</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-3" name="query" value="mebel" >Mebellar</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-lg-3" name="query"  value="go'zal" >Go'zallik</button>
                                <button type="submit" class="btn btn-outline-primary mb-4 ml-lg-3" name="query" value="salomat" >Go'zallik</button>
                            </form>

                        </div>
                        </div>

                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @foreach($products as $product)
                            <div class="col-lg-4 col-md-5 col-sm-12 pb-sm-1">
                                <div class="product-item bg-light ">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{'storage/'.$product->photo_one}}" alt="">
                                        <div class="product-action">
                                            <a class="btn btn-outline-dark btn-square" href="{{route('products.show',['product'=>$product->id])}}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>

                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                                        <br>
                                        <h5 class="float-right">Narxi: {{$product->price}} UZS</h5>
                                        <br><br>
                                        <div class="d-flex align-items-center mb-3 pt-2 float-right" >
                                            <a href="{{route('cart.create',$product->id)}}" class="btn btn-outline-success px-3"><i class="fa fa-shopping-cart mr-1"></i> Qo'shish</a>
                                        </div><br><br>

                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <form method="POST" action="{{ route('favorites.store') }}">
                                                @csrf
                                                <button type="submit" id="showAlertButton" class="btn btn float-right">
                                                    <a>Saralangan</a>
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    @auth
                                                        @foreach($favorites as $favorite)
                                                            @if($product->id === $favorite->product_id  and $favorite->user_id === auth()->user()->id)
                                                                <img width="25" height="25" src="https://img.icons8.com/color/48/ok--v1.png" alt="ok--v1"/>
                                                            @endif
                                                        @endforeach
                                                    @endauth
                                                </button>
                                            </form><br>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center mb-1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>

</x-layouts.main>
