<x-layouts.main>
    <form method="POST" action="{{route('orders.store')}}"></form>
  <div class="row col-lg-12 ">
    <div class="col-lg-8  table-responsive  mb-5">
    <table class="table table-light table-borderless table-hover text-center mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Mahsulotlar</th>
            <th>Narxi</th>
            <th>Soni</th>
            <th>Summa</th>
            <th>Olib tashlash</th>
        </tr>
        </thead>
        <tbody class="align-middle">
        <tr>
            @php $total = 0 @endphp
            @foreach((array)session('cart') as $id => $details)
                @php $total+= $details['price'] * $details['quantity'] @endphp
            @endforeach
            @foreach((array)session('cart') as $id => $details)
                <td class="align-middle"><img src="" alt="" style="width: 50px;"> {{$details['product_name']}}</td>
                <td class="align-middle">{{$details['price']}}</td>
                <td class="align-middle"><img src="" alt="" style="width: 50px;"> {{$details['quantity']}}</td>
                <td class="align-middle">{{$details['price']*$details['quantity']}}</td>
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
        <br>
        @if((array)session('cart') != null)
        @else
            <h2>Sizda buyurtma uchun mahsulotlar yo'q</h2>
        @endif
    </div>

      <div class="padding col-lg-4 float-right">
          <div class="row ">
              <div class="col-lg-11">
                  <div class="card">
                      <div class="card-header bg-primary">
                          <strong > Card</strong>
                          <small >Humo Uzcard </small>
                      </div>
                      <div class="card-body bg-dark ">

                          <div class="row">
                              <div class="col-lg-11">
                                  <div class="form-group">



                                      <label for="name" class="text-primary">Karta egasi</label>
                                      <input class="form-control" id="name" type="text" placeholder="Doniyorjon Komiljonov">
                                  </div>
                                  <div class="form-group">
                                      <label for="ccnumber " class="text-primary">Karta raqami</label>


                                      <div class="input-group">
                                          <input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                          <div class="input-group-append">
                                             <span class="input-group-text">
                                         <img width="24" height="24" src="https://img.icons8.com/glyph-neue/64/FAB005/credit-card-front.png" alt="credit-card-front"/>
                                         </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="form-group ml-5 col-sm-4">
                                  <label for="ccmonth" class="text-primary ">Oy</label>
                                  <select class="form-control text-center  text-dark" id="ccmonth">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      <option>11</option>
                                      <option>12</option>
                                  </select>
                              </div>
                              <div class="form-group col-sm-4">
                                  <label for="ccyear" class="text-primary">Yil</label>
                                  <select class="form-control text-center  text-dark" id="ccyear">
                                      <option>2024</option>
                                      <option>2025</option>
                                      <option>2026</option>
                                      <option>2027</option>
                                      <option>2028</option>
                                      <option>2029</option>
                                      <option>2030</option>
                                      <option>2031</option>
                                      <option>2032</option>
                                      <option>2033</option>
                                      <option>2034</option>
                                  </select>
                              </div>
                          </div>
                      </div>

                      <div>
                          @if((array)session('cart') != null)
                              @php $total = 0 @endphp
                              @foreach((array)session('cart') as $id => $details)
                                  @php $total+= $details['price'] * $details['quantity'] @endphp
                              @endforeach
                          @endif
                      </div>
                      <div class="card-footer">
                          <h5 class=" ">Summa: {{$total}} UZS</h5>
                          <button class="btn btn-lgx     btn-success float-right" type="submit">
                              To'lash</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>




</x-layouts.main>
