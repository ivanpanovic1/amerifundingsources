$(document).ready(function () {    
    $('dl.accordion dd > div.active').prev('a').addClass('open');
    
    $('dl.accordion dd > a').on('click', function () {
        $('dl.accordion dd > a').not(this).removeClass('open');
        $(this).toggleClass('open');        
    });

    $('.toProcess').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: $('#process-container').offset().top }, 1000);
    });


    $('input:radio[name="PurchaseRefi"]').on('click', function () {
        console.log($(this).val());
        if ($(this).attr('value') == 'purchase-trans-wrap') {
            $('.refinance-trans-wrap').hide();
            $('.purchase-trans-wrap').slideToggle();
        }
        else if ($(this).attr('value') == 'refinance-trans-wrap') {
            $('.purchase-trans-wrap').hide();
            $('.refinance-trans-wrap').slideToggle();
        }
    });

    // bind form using 'ajaxForm' 
    
    $('#stay-in-touch').ajaxForm({
        target: '#form-output',
        success: function () {
            $('#form-output').addClass('success').text('Thank you for the message. We will contact you as soon as possible.');
        },
        error: function () {
            $('#form-output').addClass('fail').text('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        }
    });

    $('#funding-request-form').ajaxForm({
        target: '#funding-request-form-output',
        success: function () {
            $('#funding-request-form-output').addClass('success').text('Thank you for the message. We will contact you as soon as possible.');
            setTimeout(function () {
                    if ($('#real-estate').is(':checked'))
                        window.location = 'our-loan-terms.html';
                    else 
                        window.location = 'lenderNetwork.html';
                    
                }, 1000)
        },
        error: function () {
            $('#funding-request-form-output').addClass('fail').text('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        }
    });
    $('#quotesForm').ajaxForm({
        target: '#quotes-form-output',
        success: function () {
            $('#quotes-form-output').addClass('success').text('Thank you for the message. We will contact you as soon as possible.');
        },
        error: function () {
            $('#quotes-form-output').addClass('fail').text('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        }
    });

    $('#loanform').ajaxForm({
        target: '#loan-form-output',
        success: function () {
            $('#loan-form-output').addClass('success').text('Thank you for the message. We will contact you as soon as possible.');
        },
        error: function () {
            $('#loan-form-output').addClass('fail').text('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        }
    });

    $('#borrowers-info-form').ajaxForm({
        target: '#borr-form-output',
        success: function () {
            $('#borr-form-output').addClass('success').text('Thank you for the message. We will contact you as soon as possible.');
        },
        error: function () {
            $('#borr-form-output').addClass('fail').text('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        }
    });
    
});

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide"
    });
});

