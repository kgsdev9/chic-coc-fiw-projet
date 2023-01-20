<div>



    <main>
        <!-- section-->
        <div class="mt-4">
          <div class="container">
            <!-- row -->

          </div>
        </div>



        <!-- section -->
        <section class="mb-lg-14 mb-8 mt-8">
          <div class="container">
            <!-- row -->

            <div>
              <!-- row -->
              <div class="row">
                <div class="col-lg-7 col-md-12">
                  <!-- accordion -->
                  <div>
                    <div class="mb-8">
                        <!-- heading -->
                      <h1 class="h3">Renseignez les informations correctement pour la livraison </h1>
                      <p>Juste une derniere Etape {{Auth::user()->name}}</p>

                    </div>
                    <!-- form -->
                    <form  wire:submit.prevent="saveOrder" class="row">

                        <!-- input -->
                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="fname"> Nom et Prenom  @error('fullname')
                            @if($errors->has('fullname'))
                            <span>{{ $errors->first('fullname') }}</span>
                        @endif
                            <small>{{$message}}</small>

                        @enderror <span class="text-danger">*</span></label>
                        <input type="text"  wire:model="fullname" placeholder="Votre Nom et prenom" class="form-control" value="{{old('fullname')}}">
                      </div>

                      <div class="col-md-12 mb-3">
                        <!-- input -->
                        <label class="form-label" for="company"> Télephone  @error('phone')

                            <small>{{$message}}</small>

                        @enderror<span class="text-danger">*</span></label>
                        <input type="number"   placeholder=" Exemple : +225 07 68 35 68 66"  wire:model="phone"  class="form-control" value="{{old('phone')}}">
                      </div>

                          <div class="col-md-12 mb-3">
                        <!-- input -->
                        <label class="form-label" for="company">Commune @error('commune')

                            <small>{{$message}}</small>

                        @enderror<span class="text-danger">*</span></label>

                        <select  wire:model="commune" id="" class="form-control">
                            <option value="">-------------</option>
                            <option value="Abobo">Abobo</option>
                            <option value="Bingerville">Bingerville</option>
                            <option value="Koumassi">Koumassi</option>
                            <option value="Yopougon">Yopougon</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Atekoube">Atekoube</option>
                            <option value="Adjame"> Adjame</option>
                            <option value="Yopougon">Yopougon</option>
                            <option value="Port Bouet">Port Bouet</option>
                            <option value="Marcory">Marcory</option>
                            <option value="Songon">Songon</option>
                            <option value="Cocody">Cocody</option>
                            <option value="Treichville">Treichville</option>
                        </select>
                      </div>



                      <div class="col-md-12 mb-3">
                        <!-- input -->
                        <label class="form-label" for="comments"> Adresse De Livraison  @error('addresse')

                            <small>{{$message}}</small>

                        @enderror</label>
                        <textarea  wire:model="addresse"  id="message" placeholder="Description de votre lieu de livraison" class="form-control" ></textarea>
                      </div>
                      <div class="col-md-12">
                        <!-- btn -->
                        <button type="submit" class="btn btn-primary">Confirmer la livraison </button>
                      </div>


                    </form>

                  </div>
                </div>

                <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                  <div class="mt-4 mt-lg-0">
                    <div class="card shadow-sm">
                      <h5 class="px-6 py-4 bg-transparent mb-0">Votre Commande</h5>
                      <ul class="list-group list-group-flush">
                        <!-- list group item -->

                        @foreach( (array)session('cart') as $id => $details)
                        @php $total = 0 @endphp
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <li class="list-group-item px-4 py-3">
                          <div class="row align-items-center">
                            <div class="col-2 col-md-2">
                              <img src="{{asset('cover/'.$details['img_one'])}}" alt="Ecommerce" class="img-fluid"></div>
                            <div class="col-5 col-md-5">
                              <h6 class="mb-0">{{ Str::limit($details['name'], 30) }}</h6>
                              <span><small class="text-muted">.98 / lb</small></span>

                            </div>
                            <div class="col-2 col-md-2 text-center text-muted">
                              <span>{{ $details['quantity']  }}</span>

                            </div>
                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                              <span class="fw-bold">{{ $details['price']  }} FCFA</span>

                            </div>
                          </div>

                        </li>

                        @endforeach



                        <li class="list-group-item px-4 py-3">
                          <div class="d-flex align-items-center justify-content-between fw-bold">
                            <div>
                              Total
                            </div>
                            <div>
                              {{$total_cart}} FCFA


                            </div>

                          </div>


                        </li>

                      </ul>

                    </div>


                  </div>
                </div>


              </div>
            </div>


          </div>


        </section>
      </main>

</div>
