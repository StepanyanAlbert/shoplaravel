Stripe.setPublishableKey('pk_test_c040vg8yaYsl8NxxzlxjMxXn');
var forme=$('#checkout-form');
forme.submit(function (event) {
    $('#charge-error').addClass('hidden');
    forme.find('button').prop('disabled',true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name:$('#card-name').val()
    }, stripeResponseHandler);
    return false;
})
function stripeResponseHandler(status,response) {
    if(response.error)
    {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        forme.find('button').prop('disabled',false)
    }else{
        var token=response.id;
        forme.append($('<input type="hidden" name="stripeToken" />').val(token));
        forme.get(0).submit()
    }
}