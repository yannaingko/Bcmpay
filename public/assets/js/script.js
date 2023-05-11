// for amount btn
$('.btn-1').on('click',function(){
    $.ajax({
        url: "/get-user-balance",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Check if the user balance is lower than 1000
            if (response.balance < 5000) {
                // Show an alert message to the user
                $('.amount-one').removeClass('text-dark');
                $('.amount-one').addClass('text-danger');
                var one = '';
                one = '<small class="ms-2 text-danger">Insufficient Balance</small>';
                $('.message').html(one);
            } else {
                // Fill the input field with 1000
                var two = '';
                $('.amount-one').removeClass('text-danger');
                $('.amount-one').addClass('text-dark');
                $('.message').html(two);
                 $(".form-one").val(5000);
            }
        }
    });        
})
$('.btn-2').on('click',function(){
    $.ajax({
        url: "/get-user-balance",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Check if the user balance is lower than 1000
            if (response.balance < 10000) {
                // Show an alert message to the user
                $('.amount-one').removeClass('text-dark');
                $('.amount-one').addClass('text-danger');
                var one = '';
                one = '<small class="ms-2 text-danger">Insufficient Balance</small>';
                $('.message').html(one);
            } else {
                // Fill the input field with 1000
                var two = '';
                $('.amount-one').removeClass('text-danger');
                $('.amount-one').addClass('text-dark');
                $('.message').html(two);
                 $(".form-one").val(10000);
            }
        }
    });        
})
$('.btn-3').on('click',function(){
    $.ajax({
        url: "/get-user-balance",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Check if the user balance is lower than 1000
            if (response.balance < 20000) {
                // Show an alert message to the user
                $('.amount-one').removeClass('text-dark');
                $('.amount-one').addClass('text-danger');
                var one = '';
                one = '<small class="ms-2 text-danger">Insufficient Balance</small>';
                $('.message').html(one);
            } else {
                // Fill the input field with 1000
                var two = '';
                $('.amount-one').removeClass('text-danger');
                $('.amount-one').addClass('text-dark');
                $('.message').html(two);
                 $(".form-one").val(20000);
            }
        }
    });        
})
$('.btn-4').on('click',function(){
    $.ajax({
        url: "/get-user-balance",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Check if the user balance is lower than 1000
            if (response.balance < 50000) {
                // Show an alert message to the user
                $('.amount-one').removeClass('text-dark');
                $('.amount-one').addClass('text-danger');
                var one = '';
                one = '<small class="ms-2 text-danger">Insufficient Balance</small>';
                $('.message').html(one);
            } else {
                // Fill the input field with 1000
                var two = '';
                $('.amount-one').removeClass('text-danger');
                $('.amount-one').addClass('text-dark');
                $('.message').html(two);
                 $(".form-one").val(50000);
            }
        }
    });        
})

// for user amount show/hide
$(document).ready(function(){
    $('#toggle-password').click(function(){
      $(this).toggleClass('fa-eye fa-eye-slash');
      var input = $('#password');
      if (input.attr('type') === 'password') {
        input.attr('type', 'text');
      } else {
        input.attr('type', 'password');
      }
    });
  });
  
// amount form 
$(document).ready(function() {
  $('#form-one').submit(function(event) {
    event.preventDefault(); // prevent the form from submitting
    var inputVal = $('.form-one').val(); // get the value of the input field

    var result = '';
    result = ' <strong>Amount</strong>'+
                '<p class="text-muted">'+ inputVal +' kyat </p>'+
                '<input type="hidden" class="hidden-form-two" name="tot_amount" wire:model="amount">';
    $('.transaction-amount').hide();
    $('#final-amount').html(result);
    $('.hidden-form-two').val(inputVal);
  });
});

// for Header menu icon
// document.querySelector('.hamburger').addEventListener('click', (e) => {
//     e.currentTarget.classList.toggle('is-active');
// })


$(document).ready(function(){
    // for header menu icon click slide menu
    $('.slide-my-btn').click(function(){
        $('.menu-container').toggle("slide", {direction: "left"},1000);
        $('.menu').fadeToggle()
    })
    $('.menu').click(function(){
        $('.menu-container').toggle("slide", {direction: "left"},1000);
        $('.menu').fadeToggle();
    })

    // profile
    $(".profile-btn").click(function(){
        $('#profile').toggle("slide", {direction: "right"});
    })

    // for send money btn
    $(".send-money").click(function(){
        $(".for-send-money").slideToggle();
        $('.send-money-bg').fadeToggle();
    });
    $(".send-money").click(function(){
        $(".pls-login").slideToggle();
        $('.pls-login-bg').fadeToggle();
    });
        // receiver btn
        $(".receiver-btn").click(function(){
            $(".receiver").toggle("slide", {direction: 'right'})
        });
        // amount btn
        $(".amount-btn").click(function(){
            $(".transaction-amount").toggle("slide", {direction: 'right'});
        });

    // for history
    $(".history-btn").click(function(){
        $('#history').toggle("slide", {direction: "right"});
    })
    $(".history-btn").click(function(){
        $(".pls-login").slideToggle();
        $('.pls-login-bg').fadeToggle();
    })

    // for my QR
    $(".my-qr-btn").click(function(){
        $('.my-qr').toggle("slide", {direction: "right"});
    })


    // for message box 
    $('.info-img-2').click(function(){
        $('.information').fadeOut("slow");
    })
})


