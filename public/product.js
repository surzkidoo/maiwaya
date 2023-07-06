const buyBtn = document.querySelector('.buy-now-btn');
const orderForm = document.querySelector('.proceed-order-container')
const overview = document.querySelector('.overlay');
const closeForm = document.querySelector('.close-form')
const btnProccedForm = document.querySelector('.btn-proceed');
const orderSummary = document.querySelector('.proceed-confirmation');
const summaryCancel = document.querySelector('.summary-cancel');
const paymentCancel = document.querySelector('.payment-cancel');
const paymentModeContainer = document.querySelector('.payment-mode-container');
const paymentModeOnline=false;

buyBtn.addEventListener('click',()=>{
    overview.style.display = "block";
    orderForm.style.display = "flex";

    closeForm.addEventListener("click",()=>{
        orderForm.style.display = "none";
        overview.style.display = "none";
    })




btnProccedForm.addEventListener('click',()=>{
    let fullname = document.querySelector('#fullname');
    let address = document.querySelector('#address')
    let number = document.querySelector('#number');
    let email = document.querySelector('#email');
    let id = document.querySelector('#id');
    let loader = document.querySelector('.loader-container')

    if(fullname.value=='' || address.value=='' || number.value == ''){
        alert('please fill deatail to contineu');
        return;
    }
    alert('rea')
    jQuery.ajax({
        url: "http://maiwaya.ng/make-order",
        method: 'post',
        data: {
  
            fullname:fullname.value,
            number:number.value,
            address:address.value,
            id:id.value
      
        },
        beforeSend: function() {
            loader.style.display ='flex';
        },
        success: function(data){
            loader.style.display ='none';
            orderForm.style.display = 'none';
            paymentModeContainer.style.display = 'flex';
            paymentCancel.addEventListener('click',()=>{
                paymentModeContainer.style.display = 'none';
                overview.style.display = 'none'
            })
           let pod = document.querySelector('.pay-on-delivering-btn');
           pod.addEventListener('click',()=>{
            paymentModeContainer.style.display = 'none';
           $('#order-id').text(data.id)
                $('#thank-you').text(data.name);
                $('.order-message').text('Your has been placed, you wil receive sms containing your order summary. Our Agent will call you to confirm the order. Expect to make payment on delivering.')
                orderSummary.style.display = 'flex';
                summaryCancel.addEventListener("click",()=>{
                    orderSummary.style.display = "none";
                    overview.style.display = "none";
                })
           })

           let paynow = document.querySelector('.pay-now-btn');
           paynow.addEventListener('click',()=>{
            paymentModeContainer.style.display = 'none';
            
                    var handler = PaystackPop.setup({
                        key: 'pk_test_d31a3ad9815642087a323749cd60597aad8f7a73',
                        email: email.value,
                        amount: data.product.price * 100,
                        metadata: {
                            custom_fields: [{
                                display_name: "orderId",
                                variable_name: "orderId",
                                value: data.id
                            },
                            {
                                display_name: "FullName",
                                variable_name: "FullName",
                                value:data.name
                            },
                        ]
                        },
                        callback: function(response) {
                            $('#order-id').text(data.id)
                            $('#thank-you').text(data.name);
                            $('.order-message').text('Your order has been placed, and we have receive your payment successfully, check your mail for the payment receipt, Expect your product 2 hour from now (Sokoto Base Only).')
                            orderSummary.style.display = "flex";
                            summaryCancel.addEventListener("click",()=>{
                                orderSummary.style.display = "none";
                                overview.style.display = "none";
                            })
                        
                        },
                        onClose: function() {
                            alert('window closed');
                            overview.style.display = 'none'
                        }
                        
                    });
                    handler.openIframe();
           })
           
        },
        error: function(e){
            console.log(e)
        }});
})
})