@extends ('artistlayouts.master')
        @section('header')
        
        @include('artistinc.navbar')
        @include('artistinc.popup')
        <title>Home - @yield('title')</title>
        <style>
        .art {
          display: block;
          width: 285px;
          height: 285px;
        }
      </style>
@endsection
  
        @section('body')
      
        <div class="row">
            <div class="col-4 col-lg-3">
                @include('artistinc.sidebar')
            </div>
            
            <div class="col-8 col-lg-9">
                <span class="border">
                    <div class="p-2 pb-5 bg-white rounded">
                        <h3>Artwork Enlistments</h3>
                        <br>
                        <br>
                        <div class="row">
                            
                            @foreach($artwork as $artworks)
                            @if ($artworks->start_price)
                            <div class="col-sm-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('artworks/'.$artworks->image) }}" alt="" class="art">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $artworks->title }}</h5>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($artworks->description, 30) }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Total Bids:</b> {{ $artworks->bids->count() }}</li>
                                        <li class="list-group-item"><b>Highest Bid:</b> ₱{{ $artworks->bids->max('amount') }}</li>
                                        <li class="list-group-item"><b>Start Date:</b> {{ \Carbon\Carbon::parse($artworks->start_date)->format('Y-m-d') }}</li>
                                        <li class="list-group-item"><b>Duration:</b> 
                                            <span id="countdown">
                                                <span id="days">0</span> days left</li>
                                            </span>
                                    </ul>
                                    <div class="card-body">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#ARTMODAL_{{ $artworks->id }}">
                                                View
                                            </button>
                                            <div class="modal fade" id="ARTMODAL_{{ $artworks->id }}" tabindex="-1" role="dialog" aria-labelledby="ARTMODALLabel" aria-hidden="true">
                                                <div class="modal-dialog fixed-modal-dialog " role="document">
                                                  <div class="modal-content modalart">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>   
                                                        </button>
                                                  </div>
                                                  <div class="modal-body" style="margin-left: 20px; margin-right:20px">
                                                    <div class="row">
                                                    <div class="row-6 text-center">
                                                      <div class="row image-container ">
                                                        <H1>{{ $artworks->title }}</H1>
                                                      <img src="{{ asset('artworks/'.$artworks->image) }}" alt="" style="max-width: 200px; max-height: 200px;"class="mx-auto d-block">
                                                      </div>
                                                    
                                                      <p style="color: rgba(142, 146, 149, 0.491)">{{ $artworks->dimension }}</p>
                                                    </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-4 text-center"><img style="width: 20px; height:20px;" src="images/person.png"><br>Bidders<br><span><b>{{ $artworks->bids->count() }}</b></span></div>
                                                            <div class="col-md-4 text-center">
                                                                <img style="width: 20px; height:20px;" src="images/time.png"><br>
                                                                Time Remaining<br>
                                                                <span id="countdown">
                                                                    <b>
                                                                        <span id="days">0</span> days
                                                                        <span id="hours">0</span> hours
                                                                        <span id="minutes">0</span> minutes
                                                                        <span id="seconds">0</span> seconds
                                                                    </b>
                                                                </span>
                                                            </div>
                                                            
                                                            <script>
                                                                // Replace this with the correct end_date value from your backend
                                                                const end_date = '{{$artworks->end_date}}';
                                                            
                                                                const targetDate = new Date(end_date).getTime();
                                                                
                                                                const countdownInterval = setInterval(function() {
                                                                    const now = new Date().getTime();
                                                                    const timeRemaining = targetDate - now;
                                                            
                                                                    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                                                                    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                                                                    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
                                                            
                                                                    document.getElementById('days').textContent = days;
                                                                    document.getElementById('hours').textContent = hours;
                                                                    document.getElementById('minutes').textContent = minutes;
                                                                    document.getElementById('seconds').textContent = seconds;
                                                            
                                                                    // Stop the countdown when it reaches zero
                                                                    if (timeRemaining < 0) {
                                                                        clearInterval(countdownInterval);
                                                                        document.getElementById('countdown').innerHTML = "Expired";
                                                                    }
                                                                }, 1000); // Update every 1 second (1000 milliseconds)
                                                            </script>
                                                            <div class="col-md-4 text-center"><img style="width: 20px; height:20px;" src="images/bidd.png"><br>Highest Bid<br><span><b>₱{{ $artworks->bids->max('amount') }}</b></span></div>  
                                                        </div>
                                                        <div class="row mt-4">
                                                          <div class="col-md-4 text-center" style="color: #9ea2a1">Bidder</div>
                                                          <div class="col-md-4 text-center acc"style="color: #9ea2a1">Amount</div>
                                                          <div class="col-md-4 text-center acc"style="color: #9ea2a1">Date and Time</div>  
                                                       </div> 
                                                       
                                                        <div class="row flex-grow-1">
                                                          
                                                          @foreach ($artworks->bidders as $bidder)
                                                          <div class="separator"></div>
                                                          <div class="col-md-4 text-center">{{ $bidder->bidder_name }}</div>
                                                          <div class="col-md-4 text-center">{{ $bidder->amount }}</div>
                                                          <div class="col-md-4 text-center">{{ $bidder->created_at }}</div>
                                                      @endforeach
                                                        </div>

                                                        <style>
                                                          .separator {
                                                              border-top: 1px solid #9ea2a1;
                                                              margin-top: 10px; 
                                                              margin-bottom: 10px; 
                                                          }
                                                      </style>
                                                        
                                                      </div>
                                                      
                                                     
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-dark" id="markAsSoldBtn" data-dismiss="modal">Mark As Sold</button>
                                                      </div>
                                                  </div>
                                                  
                                                  </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!$artworks->start_price)
                            <div class="col-sm-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('artworks/'.$artworks->image) }}" alt="" class="art">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $artworks->title }}</h5>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($artworks->description, 150) }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Price:</b> ₱{{ $artworks->price}}</li>
                  </ul>
                  <div class="card-body">
                      <div class="d-grid gap-2 col-6 mx-auto">
                          <button class="btn btn-dark" type="button">Mark as Sold</button>
                      </div>
                  </div>
              </div>
          </div>
          @endif 
                            @if($loop->iteration % 3 == 0)
                        </div>
                        <div class="row">
                            @endif
                            
        

                            @endforeach
                        </div>
                    </div>
                </span>
            </div>
        </div>
                        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        @endsection
        