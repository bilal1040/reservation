
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <h1 id="titreArtiste"> Panier </h1>
  <br />

  <div class="container">

    
    <div class="row">
      
      <div class="col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col"> Titre </th>
              <th scope="col"> Nombre de place </th>
              <th scope="col">Prix</th>
              
            </tr>
          </thead>
          <?php
            $conn = mysqli_connect("localhost","root","","reservations");
            // Check connection
            if (mysqli_connect_errno()){
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $total =0;
            $nomPlace =1;
            $tpc = 0;
            //Button when I clikc on submit
            if (isset($_GET['submit'])){
              foreach ($_GET['id'] as $id){
                //Select all From users
                $sq1=mysqli_query($conn,"select * from `users`");
                $srow1=mysqli_fetch_array($sq1);
                //Select shows when Id select equal to id 
                $sq=mysqli_query($conn,"select * from `shows` where id='$id'");
                $srow=mysqli_fetch_array($sq);
                //Variable define
                $idUsers = $srow1['id'];
                
                $title = $srow['title'];
                $prix = $srow['price'];
                $idShows = $srow['id'];
                $tpc = $total *100;
                
          ?>
          <tbody>
            <tr>            
              <td style="width:130vh;"> <?php echo $title; ?> </td>
              <td>
                
                <input type="number" id="qt" value="1" style="width:50px;" />
                

              </td>
              <td id="prix"><?php echo $prix; ?></td>
              
            </tr>
          </tbody>
         
          <?php
            
            }            
            }
          ?>
        </table>      
      </div>
     </div>
    <div style="text-align: right; width:80%; margin-top:2%;">
      <p><b> <?php echo $total; ?> </b></p>
    </div>
    <!-- this form render to orderController for show the modal payment -->
    <div id="payment">
      <form action="paiementconfirm" method="GET">
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_jLKK1NFImPeoJm9q6y85K7Wp"
          data-amount="<?php echo $tpc; ?>"
          data-name="Projet Reservation"
          data-description="Facture"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-locale="auto"
          data-currency="eur">
        </script>
       <?php
        
        $conn = mysqli_connect("localhost","root","","reservations");
        // Check connection
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql = "INSERT INTO `reservation`(`quantite`, `users_id`, `shows_id`) VALUES ('".$nomPlace."','".$idUsers."','".$idShows."')";
        if (isset($_GET['submit'])){
          if(mysqli_query($conn,$sql)){
            echo "Records inserted successfully.";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
        }
      ?>

      </form>

    </div>

    
    <div class="col">
    </div>
    </div>
  
    

