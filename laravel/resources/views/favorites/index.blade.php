<x-layouts.main>
    <!-- Products Start -->
    <!-- Shop Product Start -->
    <div class="col-lg-9 col-md-8">
        <div class="row pb-3">
            <div class="col-12 pb-1">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="ml-2">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Latest</a>
                                <a class="dropdown-item" href="#">Popularity</a>
                                <a class="dropdown-item" href="#">Best Rating</a>
                            </div>
                        </div>
                        <div class="btn-group ml-2">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                                <a class="dropdown-item" href="#">30</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($favorites->isEmpty())
                <div>
                    <h3>
                        Sizda saralangan mahsulotlar yo'q
                    </h3>
                </div>
            @endif

            @foreach($favorites as $favorite)
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{'/storage/'.$favorite->photo_one}}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="{{route('products.show',['product'=>$favorite->id])}}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">{{$favorite->name}}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>{{$favorite->price}}</h5> <!--<h6 class="text-muted ml-2"><del>12322</del></h6> -->

                                <form method="POST" action="{{ route('favorites.destroy',['favorite'=>$favorite->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn"><img width="32" height="32" src="https://img.icons8.com/nolan/64/delete-forever.png" alt="delete-forever"/></button>
                                    <input type="hidden" name="id" value="">
                                </form>

                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
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

</x-layouts.main>
