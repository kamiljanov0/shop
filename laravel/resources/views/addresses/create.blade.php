<x-layouts.main>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <form method="POST" action="{{route('addresses.store')}}">
                    @csrf
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">
                           @if($addresses == null)
                                Yetkazib beriladigan manzilni kiriting kiriting
                            @else
                               Yetkazib beriladigan manzilni o'zgartiring
                            @endif
                        </span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" name="number" type="text" placeholder="+998 01 234 56 78">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Shahar</label>
                                <input class="form-control" name="city" type="text" placeholder="Toshkent">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tuman</label>
                                <input class="form-control" name="district" type="text" placeholder="Chilonzor">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Manzil</label>
                                <input class="form-control" name="street" type="text" placeholder="123 ko'cha">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Pochta index</label>
                                <input class="form-control" name="postal" type="number" placeholder="123">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Sizning Ma'lumotlaringiz</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        @if($addresses != null)
                            <h6 class="mb-3"><b>Viloyat:</b>{{$addresses->city}} </h6>
                                <h6 class="mb-3"><b>Tuman:</b>{{$addresses->district}} </h6>
                                <h6 class="mb-3"><b>Ko'cha:</b>{{$addresses->street}} </h6>
                                <h6 class="mb-3"><b>Pochta index:</b>{{$addresses->postal_code}}</h6>
                                <h6 class="mb-3"><b>Telefon raqamingiz:</b>{{$addresses->number}}</h6>
                        @else
                            <h5 class="mb-3 " ><span style="color: red" class=""><img width="27" height="27" src="https://img.icons8.com/color/48/break--v4.png" alt="break--v4"/>   Ma'lumotlaringizni kiritmagansiz!</span></h5>
                        @endif
                        <h6 class="mb-3"></h6>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <p></p>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="bg-light p-30">
                        <div class="form-group">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Saqlash</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-layouts.main>
