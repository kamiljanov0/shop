
<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">

        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg  navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Online</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0 ">
                        <a href="/" class="nav-item nav-link active "><h4 class="text-primary"><img width="30" height="30" src="https://img.icons8.com/windows/32/FAB005/home.png" alt="home"/>MarketUz</h4></a>
                        <a href="{{route('products.discount')}}" class="nav-item nav-link"><img width="28" height="28" src="https://img.icons8.com/ios/50/FAB005/discount--v1.png" alt="discount--v1"/><span class="h5 text-white">Aksiyalar</span></a>
                        <a href="{{route('products.forYou')}}" class="nav-item nav-link"><span class="h5 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-box-seam text-primary" viewBox="0 0 16 16">
                       <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                         </svg>Siz uchun</span></a>
                        <div class="col-lg-2  d-lg-block">
                            <a class="btn d-flex align-items-center justify-content-between  w-100" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                                <h4 class=" m-lg-5"></h4>

                            </a>
                            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">

                            </nav>
                        </div>
                    </div >
                </div>

            </nav>
               </div>
    </div>

    <ul class="btn  mb-1 mb-lg-0">
         <h4 class="text-primary float-left">Kategoriya</h4>
        @if(getCategories() !== null)
            @foreach(getCategories() as $category)

                <li class="nav-item dropdown d-inline">
                    <button class="btn btn-outline-primary rounded-pill ml-3  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        {{$category->name}}
                    </button>
                    @if($category->subcategory->isNotEmpty())
                        <div class="dropdown-menu bg-dark">
                            <ul>
                                @foreach($category->subcategory as $subcategory)
                                        <li class="btn-outline-primary"><a href="{{route('filter',$subcategory->id)}}" ><span class="text-primary">{{$subcategory->name}}</span></a></li>
                                @endforeach
                            </ul>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
    <div class=" float-right ">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    </div>
</div>



        <!-- Navbar End -->
