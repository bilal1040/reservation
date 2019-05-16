  <div>
    <h1 style="text-align: center; margin-top:5%;"> Panier </h1><br />

    <div style="margin-left: 19%;">
      <table style="width: 80%;">
        <tr>
          <th style="width:35%; border:1px solid black"> Titre </th>
          <th style="width:10%; border:1px solid black"> Nombre de place </th>
          <th style="width:10%; border:1px solid black"> Prix</th>

          <tr>
            <td>titre (BD°</td>
            <td>0(js)</td>
            <td>php + innerHTML</td>
          </tr>
          <tr>
            <td>titre (BD°</td>
            <td>0(js)</td>
            <td>php + innerHTML</td>
          </tr>
          <tr>
            <td>titre (BD°</td>
            <td>0(js)</td>
            <td>php + innerHTML</td>
          </tr>
        </tr>
      </table>
    </div>
  </div>

  <div style="text-align: right; width:80%; margin-top:2%;">
    <p><b> Total via JS </b></p>
  </div>

  <!-- this form render to orderController for show the modal payment -->
  <div id="payment">
    <form action="paiementconfirm" method="GET">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_jLKK1NFImPeoJm9q6y85K7Wp"
        data-amount="2250"
        data-name="Projet Reservation"
        data-description="Facture"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="eur">
      </script>
    </form>
    
</div>