<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.paiementpro.net/webservice/onlinepayment/js/paiementpro.v1.0.1.js"></script>

    <title>Document</title>

</head>

<body>

    <button onclick="Paiement_Pro()">Proceder au paiement </button>


    <script>

        let paiementPro = new PaiementPro('PP-F986');
        paiementPro.amount = 5000;
        paiementPro.channel = 'OMCIV2';
        paiementPro.referenceNumber = 'CARD';
        paiementPro.customerEmail = '{{Auth::user()->email}}';
        paiementPro.customerFirstName = 'Kahouo';
        paiementPro.customerLastname = '{{Auth::user()->name}}';
        paiementPro.customerPhoneNumber = '0768365866';
        paiementPro.countryCurrencyCode = 'USD';
        paiementPro.description = 'API JS';

        const Paiement_Pro = async() => {

            await paiementPro.getUrlPayment();
            if (paiementPro.success) {
            // console.log(paiementPro.success); /* true si l'initialisation c'est bien passer */
            // console.log(paiementPro.url); /* URL de paiement */
            // window.location = paiementPro.url; /*Rédirection vers la passerelle de paiement */
              console.log('success');
            } else {
            console.log(paiementPro.success);
              console.log('error');
            }
        };

        Paiement_Pro();

    </script>



</body>
</html>
