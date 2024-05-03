<x-layouts.main>


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">




                <!-- Size Start -->

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Kabinet</span></h5>
                <div class=" p-4 bg-dark mb-30">
                    <img width="60" height="60" src="https://img.icons8.com/ios-filled/50/FAB005/user-male-circle.png" alt="user-male-circle"/><h5 class="d-inline text-primary"><b>  {{auth()->user()->name }}  {{auth()->user()->last_name }} </b></h5>
                    <br><br>
                    <a class="btn text-primary h1" href="{{route('user.index')}}"><img width="40" height="40" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/FAB005/external-personal-data-protection-flatart-icons-outline-flatarticons.png" class="mr-3" alt="external-personal-data-protection-flatart-icons-outline-flatarticons"/> Shaxsiy ma'lumotlar</a>
                    <br><br>
                    <a class="btn text-primary h1" href="{{route('user.orders')}}"><img width="40" height="40" src="https://img.icons8.com/ios-glyphs/30/FAB005/purchase-order.png" class="mr-3" alt="purchase-order"/> Mening buyurtmalarim</a>
                    <br><br>
                    <a class="btn text-primary h1" href="{{route('user.addresses')}}"><img width="40" height="40" src="https://img.icons8.com/glyph-neue/64/FAB005/marker--v1.png" class="mr-3" alt="marker--v1"/>Manzillarim</a>
                    <br><br>
                    <a class="btn text-primary h1" href="{{route('favorites.index')}}"><img width="40" height="40" src="https://img.icons8.com/ios/50/FAB005/like--v1.png" class="mr-3" alt="like--v1"/>Sevimli mahsulot</a>
                    <br><br>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-4 mr-5   col-md-8">

                <div class="d-flex  col-lg-10   mb-1">
                    <h1 class="mb-3 mt-2">Shaxsiy ma'lumotlar</h1>
                </div >
                <div class="bg-dark" style="border-radius: 10px;">
                    <h4 class="text-primary ml-3 " >Shahar: {{$address->city}}</h4>
                    <h4 class="text-primary ml-3">Tuman:  {{$address->district}}</h4>
                    <h4 class="text-primary ml-3">Ko'cha:  {{$address->street}}</h4>
                    <h4 class="text-primary ml-3">Pochta index:  {{$address->postal_code}}</h4>
                    <a class="btn btn-danger float-right" href="{{route('addresses.create')}}">O'zgartirish</a>
                </div>
            </div>
            <div class="col-lg-3  col-md-8">
                <div class="bg-primary mt-2" style="height: 150px;border-radius: 10px" >
                    <h3 class="mr-3 float-right">{{auth()->user()->name}}</h3>
                    <h3 class="ml-3 ">ID:{{auth()->user()->id}}</h3>
                    <h3 class="ml-3 mt-3">Balasingiz: 0 UZS</h3>
                </div>
                <div class="mt-4">
                    <div class="mt-3" style="height: 150px;border-radius: 10px;background-color: darkorange" >
                        <h3 class="ml-3 ">Bonuslar</h3>
                        <h3 class="mr-3 mt-5 float-right">0 UZS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Shop Product End -->
    </div>
    </div>

</x-layouts.main>
