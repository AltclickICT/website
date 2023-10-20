const amount = document.getElementById('amount');
const studentName = document.getElementById('studentName');
const email = document.getElementById('email');
const studentId = document.getElementById('studentId');
const phoneNumber = document.getElementById('phoneNumber');


// payment with paystack
var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', PayFees, false);

function payWithPaystack() {
    var handler = PaystackPop.setup({
        key: 'YOUR_PUBLIC_KEY', // Replace with your public key
        email: "ikpeugbe@gmail.com",
        amount: 500, // the amount value is multiplied by 100 to convert to the lowest currency unit
        currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
        ref: 'YOUR_REFERENCE', // Replace with a reference you generated
        callback: function(response) {
            //this happens after the payment is completed successfully
            var reference = response.reference;
            alert('Payment complete! Reference: ' + reference);
            // Make an AJAX call to your server with the reference to verify the transaction
        },
        onClose: function() {
            alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
}

// Payment with flutterwave
function PayFees() {
    FlutterwaveCheckout({
        // "FLWPUBK-ea911ad04be9e1019db650231994ec1c-X"
        public_key: "FLWPUBK-ea911ad04be9e1019db650231994ec1c-X",
        tx_ref: "altclick-", //+ studentId,
        amount: 500, //amount,
        currency: "NGN",
        payment_options: "card, mobilemoneyghana, ussd",
        redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
        meta: {
            consumer_id: 1111, //studentId,
            consumer_mac: "92a3-912ba-1192a",
        },
        customer: {
            email: "ugbegodwinikpe7963Gmail.com", // email,
            phone_number: "09081346554", //phoneNumber,
            name: "Godwin Ikpe Ugbe", //studentName,
        },
        customizations: {
            title: "Altclick ICT World",
            description: "Fees Payment",
            logo: "../img/favicon.png",
        },
    });
}