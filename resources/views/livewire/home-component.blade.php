<div>
    <div class="navbar navbar-expand-sm header-menu">
        <div class="hamburger slide-my-btn">
            <div class="hamburger__container">
              <div class="hamburger__inner"></div>
              <div class="hamburger__hidden"></div> 
            </div>
        </div>
        <h3 class="nav-brand menu-header-c">
            <img class="logo" src="{{asset('./assets/image/logo/logo.png')}}" alt="">
           <span class="logo-c">BCM Bank</span> 
        </h3>
    </div> 
    <div class="header"> 
        <div class="menu-container">
            <button class="btn float-end text-white slide-my-btn"><b>X</b></button>
            @guest
                <div class="list-group  slide-login">
                    <a href="{{route('login')}}" class="list-group-item btn btn-primary bg-primary">Login</a>
                </div>
            @endguest
            @auth
                <div class="slide-menu-header mt-3 mb-4">
                    <div class="user-icon"><i class="fa fa-user"></i></div>
                    <h2 class="user-name mt-2">{{auth()->user()->name}}</h2>
                    <h5 class="amount">{{auth()->user()->amount}}<span>Kyat</span></h5>
                    <h5 class="user-level"> Level ?</h5>
                </div>
            @endauth
            <div class="list-group ">
                @auth
                    <a class="list-group-item menu-list profile-btn"><i id="menu-icon" class="fa fa-user"></i><span class="slide-menu-content">Profile</span> </a>
                @endauth
                <a href="" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-money-bill-1-wave"></i><span class="slide-menu-content">Fees</span></a>
                <a href="" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-question"></i><span class="slide-menu-content">Help</span></a>
                <a href="" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-book"></i><span class="slide-menu-content">Tutorials</span></a>
                <a href="" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-scale-balanced"></i><span class="slide-menu-content">Terms & Conditions</span></a>
                <a href="" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-gear"></i><span class="slide-menu-content">Settings</span></a>
                @auth
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="list-group-item menu-list"><i id="menu-icon" class="fa-solid fa-right-from-bracket"></i><span class="slide-menu-content">Logout</span></button>
                    </form>
                @endauth
            </div>
            <div class="menu-footer">
                <p>Version 0.1</p>
            </div>
        </div>
        <div class="menu">
        </div>
        @auth
            <div class="container-fluid main-profile">
                <div class="d-flex ps-5">
                    <div class="profile-icon me-3">
                        <div class="user-icon mx-auto"><i class="fa fa-user"></i></div>
                    </div>
                    <div class="profile-content "> 
                        <h3 class="profile-user-name">{{auth()->user()->name}}
                            @if(auth()->user()->position == 'agent')
                                <small class="badge bg-success rounded-pill " style="font-size: 12px">Agent</small>
                            @elseif(auth()->user()->position == 'user')
                                <small class="badge bg-primary rounded-pill " style="font-size: 12px">User</small>
                            @endif
                        </h3>
                        <div class="input-group">
                            <input class="profile-amount me-2" type="password" value="{{auth()->user()->amount}}" disabled id="password">
                            <b class="mt-1 me-1">Kyat</b>
                            <i class="fa fa-eye-slash" id="toggle-password"></i>
                        </div>
                        {{-- <h5 class="profile-amount">{{auth()->user()->amount}} kyat</h5> --}}
                        <h6 class="profile-user-level">LEVEL ?</h6>
                    </div>
                </div>
            </div>
        @endauth
    </div>
            {{-- {!! QrCode::size(100)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!} --}}
    <div class="content-body">
        <div class="container-fluid ">
            <div class="row exchange-tools">
                <div class="col">
                    <button class="btn btn-white send-money">
                        <div>
                            <i class="fa-solid fa-money-bill exchange-tools-icon"></i>
                            <p class="exchange-tools-content">Send Money</p>
                        </div>
                    </button>
                </div>
                <div class="col-1">
                    <div class="outer">
                        <div class="inner"></div>
                    </div>
                </div>
                <div class="col">
                    <button  class="btn btn-white history-btn">
                        <div>
                            <i class="fa-solid fa-clock-rotate-left exchange-tools-icon"></i>                            
                            <p class="exchange-tools-content">History</p>
                        </div>
                    </button>
                </div>
                <div class="col-1">
                    <div class="outer">
                        <div class="inner"></div>
                    </div>
                </div>
                <div class="col">
                    <a href="" class="btn btn-white ">
                        <div>
                            <i class="fa-solid fa-wallet exchange-tools-icon"></i>                            
                            <p class="exchange-tools-content">Cash In/Out</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="functions row">
                <div class="col-4" >
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/prepaid.png')}}" alt="" srcset="">
                            <p class="exchange-tools-content">Topup</p>
                        </div>
                    </a>
                </div>
                <div class="col-4" >
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/online-shopping.png')}}" alt="" srcset="">                            
                            <p class="exchange-tools-content">Shopping</p>
                        </div>
                    </a>
                </div>
                <div class="col-4" >
                    <button href="" class="btn btn-white ticket-btn">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/airplane-ticket.png')}}" alt="" srcset="">                       
                            <p class="exchange-tools-content">Tickets</p>
                        </div>
                    </button>
                </div>
                <div class="col-4" >
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/personal.png')}}" alt="" srcset="">                        
                            <p class="exchange-tools-content">Loan</p>
                        </div>
                    </a>
                </div>
                <div class="col-4" >
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/cashless-payment.png')}}" alt="" srcset="">                            
                            <p class="exchange-tools-content">Online Payments</p>
                        </div>
                    </a>
                </div>
                <div class="col-4" >
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="function-img" src="{{asset('./assets/image/icons/more.png')}}" alt="">                          
                            <p class="exchange-tools-content">More</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- for send money login condition --}}
        @auth
            @if(auth()->user()->phone === Null)
                <div class="send-money-bg">
                </div>
                <div class="for-send-money">
                    <div class="row">
                        <button class="col-2 send-money btn btn-white">X</button>
                        <div class="col text-center">
                            <img class="send-money-h-icon" src="{{asset('./assets/image/icons/dollar.png')}}" alt="">
                            <p class="send-money-h-c">Send Money</p>
                        </div>
                        <button class="col-2 btn btn-white"><i class="fa-solid fa-question"></i></button>
                    </div>
                    <div class="p-5">
                        <strong>Register Your Mobile Number</strong>
                        <small>to continue the process</small>
                        <form class="send-money-form mt-5" wire:submit.prevent="registerPhone" >
                            <div class="input-group">
                                <div class="d-flex btn">
                                    <img class="phone-flag me-1" src="{{asset('./assets/image/logo/pngegg.png')}}" width="30" alt="">
                                    <small class="my-auto">+95</small>
                                </div>
                                <input class="form-control" type="text" name="phone" wire:model.defer="phone" required>      
                                <button class="btn btn-secondary" type="submit">Go</button>                      
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="send-money-bg">
                </div>
                <div class="for-send-money">
                    <div class="row">
                        <button class="col-2 send-money btn btn-white">X</button>
                        <div class="col text-center">
                            <img class="send-money-h-icon" src="{{asset('./assets/image/icons/dollar.png')}}" alt="">
                            <p class="send-money-h-c">Send Money</p>
                        </div>
                        <button class="col-2 btn btn-white"><i class="fa-solid fa-question"></i></button>
                    </div>
                    <form class="send-money-form" action="{{route('transaction')}}">
                        @csrf
                        {{-- receiver --}}
                            <div class="input-group send-money-menu receiver-btn">
                                <div class="send-money-icon-bg">
                                    <img class="send-money-icon" src="{{asset('./assets/image/icons/user.png')}}" alt="">
                                </div>
                                <div class="send-money-contact" id="final-result-contact">
                                    <strong for="" >Receiver</strong>
                                    <p class="text-muted">Enter Phone Number</p>
                                    <input type="hidden" name="phone" value="">
                                </div>
                                <div class="send-money-right-arrow">
                                    <span class="float-end">
                                        <img class="send-money-icon-right" src="{{asset('./assets/image/icons/right-arrow.png')}}" alt="">
                                    </span>
                                </div>
                            </div>
                        {{-- amount --}}
                            <div class="input-group send-money-menu amount-btn">
                                <div class="send-money-icon-bg">
                                    <img class="send-money-icon" src="{{asset('./assets/image/icons/dollar.png')}}" alt="">
                                </div>
                                <div class="send-money-contact" id="final-amount">
                                    <strong for="" >Amount</strong>
                                    <p class="text-muted">Enter Amount</p>
                                    <input type="hidden" name="amount" value="">
                                </div>
                                <div class="send-money-right-arrow">
                                    <span class="float-end">
                                        <img class="send-money-icon-right" src="{{asset('./assets/image/icons/right-arrow.png')}}" alt="">
                                    </span>
                                </div>
                            </div>
                        {{-- paymethod --}}
                            <div class="input-group send-money-menu">
                                <div class="send-money-icon-bg">
                                    <img class="send-money-icon" src="{{asset('./assets/image/icons/more.png')}}" alt="">
                                </div>
                                <div class="send-money-contact">
                                    <strong for="" >More Payment Methods</strong>
                                    <p class="text-muted">Choose Payment Type</p>
                                    <input type="hidden" name="amount">
                                </div>
                                <div class="send-money-right-arrow">
                                    <span class="float-end">
                                        <img class="send-money-icon-right" src="{{asset('./assets/image/icons/right-arrow.png')}}" alt="">
                                    </span>
                                </div>
                            </div>
                        <hr>
                        <button type="submit" class="btn btn-secondary send-money-btn">Confirm</button>
                    </form>
                </div>

                {{-- for receiver --}}
                <div class="receiver">
                    <div class="row receiver-header">
                        <div class="col-2">
                            <button class="btn receiver-btn">
                                <img src="{{asset('./assets/image/icons/left-arrow.png')}}" width="20" height="20" alt="">
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn history-h-t">
                                Receiver
                            </button>
                        </div>
                    </div>
                    <div class="container">
                            <div class="search-contact bg-info">
                                <label for=""><b>Receiver</b></label>
                                <div class="input-group">
                                    <img src="{{asset('./assets/image/icons/pngwing.com.png')}}" width="30" alt="">
                                    <input type="text" class="form-control bg-info" id="search-receiver" name="search" placeholder="09-XXX-XXXXXX-XX">
                                </div>
                            </div>
                            <hr>
                            <div id="buttonContainer"></div>
                    </div>
                </div>
                {{-- for amount  --}}
                <div class="transaction-amount">
                    <div class="row transaction-amount-header">
                        <div class="col-2">
                            <button class="btn amount-btn">
                                <img src="{{asset('./assets/image/icons/left-arrow.png')}}" width="20" height="20" alt="">
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn history-h-t">
                                Amount
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="search-contact bg-info" id="one">
                            <form id="form-one">
                                <label for="" class="amount-one"><b>Amount</b></label>
                                <div class="input-group">
                                    <img src="{{asset('./assets/image/icons/coin.png')}}" width="30" alt="">
                                    <input type="text" class="form-one form-control bg-info" id="search-amount-one" name="search" placeholder="10000 kyat" required>
                                    <button type="submit" class="btn btn-secondary">Continue</button>
                                </div>
                            </form>
                        </div>
                        <div class="message"></div>
                        <div class="row">
                            <div class="col text-center">
                                <button class="btn col kyat-btn btn-1">5,000</button>
                            </div>
                            <div class="col text-center">
                                <button class="btn col kyat-btn btn-2">10,000</button>
                            </div>
                            <div class="col text-center">
                                <button class="btn col kyat-btn btn-3">20,000</button>
                            </div>
                            <div class="col text-center">
                                <button class="btn col kyat-btn btn-4">50,000</button>
                            </div>
                        </div>
                        <div class="d-flex ms-5 mt-3">
                            <img src="{{asset('./assets/image/logo/logo.png')}}" width="40" alt="">
                            <div class="my-auto ps-2">
                                <p class="my-auto my-amount">Balance <strong>{{auth()->user()->amount}}</strong> kyat</p>
                            </div>
                        </div>
                        <hr>
                        <div id="buttonContainer"></div>
                    </div>
                </div>


            @endif
        @endauth
        @guest
            <div class="pls-login-bg">
            </div>
            <div class="pls-login">
                <button class="send-money btn"><strong>X</strong></button>
                <div class="text-center mt-5">
                    <h3>Mingalarbar</h3>
                    <p>I guess you may need to <strong>Register</strong></p>
                    <p>or</p>
                    <p><strong>Login</strong> with this device.</p>
                </div>
                <a href="{{route('login')}}" class="btn btn-primary pls-login-btn mt-4">Login</a>
                <a href="{{route('register')}}" class="btn btn-white pls-register-btn mt-2">Register</a>
            </div>
        @endguest

    {{-- for history --}}
        @auth
            <div class="history" id="history">
                <div class="row" style="background: yellow">
                    <div class="col-2">
                        <button class="btn history-btn">
                            <img src="{{asset('./assets/image/icons/left-arrow.png')}}" width="20" height="20" alt="">
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn history-h-t">
                            History
                        </button>
                    </div>
                </div>
                @foreach($history as $item)
                    @if(auth()->user()->id == $item->receiver_user_id)
                        <div class="list-group">
                            <div class="list-group-item">
                                <div>{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</div>
                                <div class="row">
                                    <div class="col-1 m-auto text-center">
                                        <img class="history-icon-1" src="{{asset('./assets/image/icons/income.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <strong>Receive Money</strong>
                                        <div>
                                            From- {{$item->sender->phone}}
                                        </div>
                                        <p>Transaction ID - {{$item->transaction_id}}</p>
                                        <small>{{$item->created_at->diffForHumans()}}</small>
                                    </div>
                                    <div class="col-3">
                                        <p>+<span class="text-success">{{$item->amount}}</span> Kyat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(auth()->user()->id == $item->transfer_user_id)
                    <div class="list-group">
                        <div class="list-group-item">
                            <div>{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</div>
                            <div class="row">
                                <div class="col-1 m-auto text-center">
                                    <img class="history-icon" src="{{asset('./assets/image/icons/coin.png')}}" alt="">
                                </div>
                                <div class="col">
                                    <strong>Send Money</strong>
                                    <div>To- {{$item->receiver->phone}}</div>
                                    <p>Transaction ID - {{$item->transaction_id}}</p>
                                    <small>{{$item->created_at->diffForHumans()}}</small>

                                </div>
                                <div class="col-3">
                                    <p> <span class="text-danger">-{{$item->amount}}</span>  Kyat</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    @endif
                @endforeach
            </div>
        @endauth
        @guest
            <div class="pls-login-bg">
            </div>
            <div class="pls-login">
                <button class="send-money btn"><strong>X</strong></button>
                <div class="text-center mt-5">
                    <h3>Mingalarbar</h3>
                    <p>I guess you may need to <strong>Register</strong></p>
                    <p>or</p>
                    <p><strong>Login</strong> with this device.</p>
                </div>
                <a href="{{route('login')}}" class="btn btn-primary pls-login-btn mt-4">Login</a>
                <a href="{{route('register')}}" class="btn btn-white pls-register-btn mt-2">Register</a>
            </div>
        @endguest
    {{-- for profile --}}
        @auth
            <div class="history" id="profile">
                <div class="row" style="background: yellow">
                    <div class="col-1">
                        <button class="btn profile-btn">
                            <img src="{{asset('./assets/image/icons/left-arrow.png')}}" width="20" height="20" alt="">
                        </button>
                    </div>
                    <div class="col text-center">
                        <button class="btn ">
                            <img src="{{asset('./assets/image/logo/logo.png')}}" width="30" alt="">
                            <strong class="pay-head">BCM Pay</strong>
                        </button>
                    </div>
                </div>
            </div>
        @endauth
    {{-- for my qr --}}
        @auth
            <div class="my-qr">
                <div class="row" style="background: yellow">
                    <div class="col-2">
                        <button class="btn my-qr-btn">
                            <img src="{{asset('./assets/image/icons/left-arrow.png')}}" width="20" height="20" alt="">
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn history-h-t">
                            Receive
                        </button>
                    </div>
                </div>
                <div class="container">
                    <div class="qr-body bg-dark mx-5 mt-5 p-5"> 
                        <p class="text-muted">{{auth()->user()->name}}({{auth()->user()->phone}})</p>
                        <p class="text-white text-center"><strong>Scan to pay me</strong></p>
                        <div class="qr">
                            {!! QrCode::size(300)->backgroundColor(255,255,255)->margin(1)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}
                        </div>
                    </div>
                    <div>
                        <div class="pay-logo">
                            <img src="{{asset('./assets/image/logo/logo.png')}}" width="10%" alt="">
                            <strong class="qr-logo my-auto">BCM PAY</strong> 
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    {{-- footer --}}
        <div class="footer">
            <div class="row footer-menu">
                <div class="col footer-menu-btn">
                    <a href="" class="btn">
                        <div>
                            <img class="footer-menu-icon" src="{{asset('./assets/image/icons/logo-home-png-7412.png')}}" alt="">
                            <p class="footer-menu-content">Home</p>
                        </div>
                    </a>
                </div>
                @auth
                    <div class="col footer-menu-btn">
                        <button class="btn my-qr-btn">
                            <div>
                                <img class="footer-menu-icon" src="{{asset('./assets/image/icons/qr-code-21362.png')}}" alt="">
                                <p class="footer-menu-content">My QR</p>
                            </div>
                        </button>
                    </div>
                @endauth
                <div class="col footer-menu-btn">
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="footer-menu-icon" src="{{asset('./assets/image/icons/qr-code-21360.png')}}" alt="">
                            <p class="footer-menu-content">QR Pay</p>
                        </div>
                    </a>
                </div>
                <div class="col footer-menu-btn">
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="footer-menu-icon" src="{{asset('./assets/image/icons/—Pngtree—shopping on mobile_5354478.png')}}" alt="">
                            <p class="footer-menu-content">Stores</p>
                        </div>
                    </a>
                </div>
                <div class="col footer-menu-btn">
                    <a href="" class="btn btn-white">
                        <div>
                            <img class="footer-menu-icon" src="{{asset('./assets/image/icons/—Pngtree—email vector icon_3876244.png')}}" alt="">
                            <p class="footer-menu-content">Inbox</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @if(session('message'))
        <div class="information alert alert-danger row">
            <div class="col-1">        
                <img class="info-img-1" src="{{asset('./assets/image/icons/exclimation.png')}}" alt="">
            </div>
            <div class="col">        
                <div class="info-message mt-1">
                    {{session('message')}}
                </div>
            </div>
            <div class="col-1">        
                <img class="info-img-2" src="{{asset('./assets/image/icons/cross.png')}}" alt="">
            </div>
        </div>
    @endif
    @if(session('info'))
        <div class="information alert alert-success row">
            <div class="col-1">        
                <img class="info-img-1" src="{{asset('./assets/image/icons/greenmark.png')}}" alt="">
            </div>
            <div class="col">        
                <div class="info-message mt-1">
                    {{session('info')}}
                </div>
            </div>
            <div class="col-1">        
                <img class="info-img-2" src="{{asset('./assets/image/icons/cross.png')}}" alt="">
            </div>
        </div>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript">

            $('#search-receiver').keyup(function() {
                var searchText = $(this).val();
                $.ajax({
                    url : '{{URL::to('search')}}',
                    method: 'get',
                    data: { searchText: searchText },
                    success: function(response) {
                        var buttons = '';
                        $.each(response.data, function(index, item) {
                            // buttons += '<button class="myButton" data-id="' + item.id + '">' + item.name + '</button>';
                            if(item.position == "agent"){
                                buttons += '<div id="result-contact" class="btn result-contact d-flex p-3 mx-5 mb-2" data-id = "'+ item.id + '" >'+
                                                '<div class="profile-icon-bg my-auto">'+
                                                    '<i class="fa fa-user">'+'</i>'+
                                                '</div>'+
                                                '<div class="phone-num ms-3 my-auto">'+
                                                    '<small class="my-auto">'+ item.phone +'</small>'+
                                                    '<small class="badge bg-success rounded-pill ms-2" style="font-size: 10px">Agent</small>'+
                                                    '<p class="my-auto">'+'<strong>'+ item.name +'</strong>'+'</p>'+
                                                '</div>'+
                                            '</div>';   
                            }else{
                                buttons += '<div id="result-contact" class="btn result-contact d-flex p-3 mx-5 mb-2" data-id = "'+ item.id + '" >'+
                                                '<div class="profile-icon-bg my-auto">'+
                                                    '<i class="fa fa-user">'+'</i>'+
                                                '</div>'+
                                                '<div class="phone-num ms-3 my-auto">'+
                                                    '<small class="my-auto">'+ item.phone +'</small>'+
                                                    '<small class="badge bg-primary rounded-pill ms-2" style="font-size: 10px">User</small>'+
                                                    '<p class="my-auto">'+'<strong>'+ item.name +'</strong>'+'</p>'+
                                                '</div>'+
                                            '</div>';   

                            }
                        });
                        $('#buttonContainer').html(buttons);
                    },
                });
            });

            $('#buttonContainer').on('click', '.result-contact', function() {
                // var buttonId = $(this).data('id');
                var id = $(this).attr("data-id")
                $.ajax({
                    url: '{{URL::to('process')}}/' +id,
                    method: 'get',
                    data: { $id: id },
                    success: function (response) {
                        var result = '';
                        var result1 = '';
                        var result2 = '';
                        // alert(response.data);
                        $('.receiver').hide();
                        $('.transaction-amount').show();
                        result = '<div>'+
                                    '<strong for="" >'+response.data.name + '</strong>' +
                                    '<p class="text-muted">' + response.data.phone + '</p>' +
                                    '<input type="hidden" class="hidden-form-one" name="phone" wire:model="phoneNub">'+
                                    '</div>';
                        result1 =  '<div class="semi-final-amount" data-id="'+ response.data.id + '">'+
                                        '<strong for="" >Amount</strong>'+
                                        '<p class="text-muted">Enter Amount</p>'+
                                    '</div>';

                        $('#final-result-contact').html(result);
                        $('#final-amount').html(result1);
                        $('.hidden-form-one').val(response.data.phone);
                    },
                });
            });


            $('#final-amount').on('click','.semi-final-amount',function(){
                var id = $(this).attr("data-id");
                $.ajax({
                    url: '{{URL::to('process')}}/' +id,
                    method: 'get',
                    data: { $id: id },
                    success: function (response) {
                        var rsl = '';
                    }
                });
            });
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

        </script>

</div>
