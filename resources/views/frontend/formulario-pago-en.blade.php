@extends('frontend.layout')

@section('content')

<div class="col-lg-12">

    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

        <div class="card">
            <div class="card-body text-info-page">

                <p><strong>¡ Thanks for your support !</strong></p>

                <p>The following page will redirect you to the Mercado Pago page. Payment can be made with a debit or credit card. For every <strong>$150</strong> fee donated you will receive one work. People can contribute as many times as they want.</p>

                <p>After completing your contribution, you will receive an email confirming your payment (confirmation can take between 24 and 72 hours; the charge will appear in your bank statement addressed to <strong>Mariela Arce,</strong> who is helping us to centralize donations to redirect them to the organizations). If you do not receive the email we ask you to check your spam folder. </p>

                <p>After that confirmation, you will receive a link that will take you to the automated system in a raffle format that randomly selects the work for you. If you are donating from outside of Peru, you will be contacted to coordinate the shipment by certified post (or other means you consider appropriate). The donation amount does not include international shipping costs.</p>


            </div>
        </div>




        <article class="card mt-3">
            <div class="card-body p-5">
                
                <div class="text-center">
                    <img src="{{ url('/') }}/imagenes/version-vertical-small.png" class="img-fluid" alt="Responsive image">
                </div>
                

                <form action="/procesar-pago/checkout.php" method="post" id="pay" name="pay" >

                    <div class="form-group">
                        <label for="username">Name and surname</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                         

                            <input type="text" class="form-control" id="cardholderName" data-checkout="cardholderName" required/>

                        </div> <!-- input-group.// -->
                    </div> <!-- form-group.// -->

                    <div class="form-group">
                        <label for="username">Email</label>
                        <div class="input-group mb-3">
                        
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                              </div>
                              <input type="email" name="email" id="email" class="form-control"  aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Phone</label>
                        <div class="input-group mb-3">
                        
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                              </div>
                              <input type="text" name="telefono" id="telefono" class="form-control"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Country</label>
                        <div class="input-group mb-3">
                        
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
                              </div>
                              <input type="text" name="pais" id="pais" class="form-control"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Address</label>
                        <div class="input-group mb-3">
                        
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                              </div>
                              <input type="text" name="direccion" id="direccion" class="form-control"  required>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                            <select id="docType" data-checkout="docType" class="form-control"></select>
                    
                        </div>
                        <div class="col-lg-8">
                            <input type="text" id="docNumber" data-checkout="docNumber" class="form-control" required>
                    
                        </div>
                            
                        </div>
                        
                    </div>


                    <div class="form-group">
                        <label for="cardNumber">Card number</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text text-muted">
                                    <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
                                    <i class="fab fa-cc-mastercard"></i> 
                                </span>
                            </div>

                            <input type="text" class="form-control" id="cardNumber" data-checkout="cardNumber" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />

                            <!-- <input type="text" class="form-control" name="cardNumber" placeholder=""> -->
                            
                        </div>
                    </div> <!-- form-group.// -->


                    



                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label><span class="hidden-xs">Expiration</span> </label>
                                <div class="input-group">

                                    <input type="number" class="form-control" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
                                    


                                    <input type="number" class="form-control" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                <!-- <input type="number" class="form-control" required=""> -->

                                <input type="number" class="form-control" id="securityCode" data-checkout="securityCode" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                            </div> <!-- form-group.// -->
                        </div>
                    </div> <!-- row.// -->

                    <div class="row" id="alerts">
                        <div class="col">
                            <div class="alert alert-danger" role="alert">
                          
                                <ul id="list"></ul>
                            </div>
                        </div>
                        
                    </div>
                    
                    <input type="hidden" name="payment_method_id" id="payment_method_id"/>
                    <input type="hidden" name="installments" id="installments" value="1">
                    <input type="hidden" name="transaction_amount" id="transaction_amount" value="495"/>
                    <input type="hidden" name="description" id="description" value="Dibujos por la Amazonia">

                    

                    <button class="subscribe btn btn-primary btn-block" type="submit"> Donate  </button>
                </form>
            </div> <!-- card-body.// -->
        </article> <!-- card.// -->
        </div>
    </div>
    
</div>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>


<script>
    window.Mercadopago.setPublishableKey("TEST-bd1922cf-5633-4ebe-882a-c29a4a087a43");

    // window.Mercadopago.setPublishableKey("APP_USR-2b5896ae-305a-4ffd-92ca-e828ee4c0827");

    
    document.getElementById('alerts').style.visibility = "hidden";
    window.Mercadopago.getIdentificationTypes();
    
    document.getElementById('cardNumber').addEventListener('keyup', guessPaymentMethod);
    document.getElementById('cardNumber').addEventListener('change', guessPaymentMethod);
    
    function guessPaymentMethod(event) {
        let cardnumber = document.getElementById("cardNumber").value;

        if (cardnumber.length >= 6) {
            let bin = cardnumber.substring(0,6);
            window.Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethod);
        }
    };
    
    function setPaymentMethod(status, response) {
        if (status == 200) {
            let paymentMethodId = response[0].id;
            let element = document.getElementById('payment_method_id');
            element.value = paymentMethodId;
            getInstallments();
        } else {
            alert(`payment method info error: ${response}`);
        }
    }

    function getInstallments(){
        window.Mercadopago.getInstallments({
            "payment_method_id": document.getElementById('payment_method_id').value,
            "amount": parseFloat(document.getElementById('transaction_amount').value)
            
        }, function (status, response) {
            if (status == 200) {
                document.getElementById('installments').options.length = 0;
                response[0].payer_costs.forEach( installment => {
                    let opt = document.createElement('option');
                    opt.text = installment.recommended_message;
                    opt.value = installment.installments;
                    document.getElementById('installments').appendChild(opt);
                });
            } else {
                alert(`installments method info error: ${response}`);
            }
        });
    }    
    
    doSubmit = false;
    document.querySelector('#pay').addEventListener('submit', doPay);

    function doPay(event){
        event.preventDefault();
        if(!doSubmit){
            var $form = document.querySelector('#pay');

            window.Mercadopago.createToken($form, sdkResponseHandler);

            return false;
        }
    };

    function sdkResponseHandler(status, response) {
        if (status != 200 && status != 201) {
            console.log(response.cause);
            // alert(`Por favor verificar que toda la informacion sea correcta`);
            document.getElementById('alerts').style.visibility = "visible";
            validar(status, response);

        }else{
            var form = document.querySelector('#pay');
            var card = document.createElement('input');
            card.setAttribute('name', 'token');
            card.setAttribute('type', 'hidden');
            card.setAttribute('value', response.id);
            form.appendChild(card);
            doSubmit=true;
            form.submit();
        }
    }; 


    function validar(status, response){

        var ul = document.getElementById("list");
        ul.innerHTML = '';

        var inputAll = document.getElementsByClassName("is-invalid");

        console.log(inputAll);

        if(inputAll.length > 0){
            for(i=0;i<inputAll.length;i++){
                inputAll[i].classList.remove("is-invalid");
            }
        }
        
        
        

        

        response.cause.forEach((el) => {
            
            if(el.code == "205"){

                var li = document.createElement("li");
                li.appendChild(document.createTextNode("The card number must not be empty."));
                ul.appendChild(li);

                var input205 = document.getElementById("cardNumber");
                input205.classList.add("is-invalid");

            }


            if(el.code == "208"){
                var li = document.createElement("li");
                li.appendChild(document.createTextNode("The expiration month should not be empty."));
                ul.appendChild(li);

                var input208 = document.getElementById("cardExpirationMonth");
                input208.classList.add("is-invalid");

            }

            if(el.code == "208"){

                var li = document.createElement("li");
                li.appendChild(document.createTextNode("Invalid data in the month of expiration."));
                ul.appendChild(li);

                var input208 = document.getElementById("cardExpirationMonth");
                input208.classList.add("is-invalid");

            }

            

            if(el.code == "326"){
                var li = document.createElement("li");
                li.appendChild(document.createTextNode("Invalid data in the year of expiration."));
                ul.appendChild(li);

                var input326 = document.getElementById("cardExpirationYear");
                input326.classList.add("is-invalid");

            }

            if(el.code == "324"){
                var li = document.createElement("li");
                li.appendChild(document.createTextNode("Invalid data in the Identification number field."));
                ul.appendChild(li);

                var input324 = document.getElementById("docNumber");
                input324.classList.add("is-invalid");

            }

            if(el.code == "E301"){
                var li = document.createElement("li");
                li.appendChild(document.createTextNode("Invalid data with the card number."));
                ul.appendChild(li);

                var inputE301 = document.getElementById("cardNumber");
                inputE301.classList.add("is-invalid");

            }

            if(el.code == "E302"){
                var li = document.createElement("li");
                li.appendChild(document.createTextNode("Invalid data CVV field."));
                ul.appendChild(li);

                var inputE302 = document.getElementById("securityCode");
                inputE302.classList.add("is-invalid");

            }



        });


    }   
</script>  
@endsection

@section('css')
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

@endsection