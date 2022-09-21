
<section>
  
  <div class="container-fluid  p-3">


        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h5 class="">Donations</h5>
        </div>
        <hr>


    <div class="container table-responsive">


          <table id="datatable" class="table table-striped   table-hover  table-sm pt-3">
          <thead class="table-primary">
            <tr>
            <th scope="col">Sr. No</th>
            <th scope="col">Receipt. No</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Total</th>
            <th scope="col">Dated on</th>
            <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>

            <?php  


              if(count($donations) > 0){
                $i=1;
                foreach($donations as $row){

            ?>
                  <?php 

                          $amttrack=$Homemodel->getPartialPayment($row['id']);
                          $paid=$amttrack[0]['paid'];
                          $remain=$row['totalamt']-$amttrack[0]['paid'];

                  ?>

                <div class="card makePayment" style="display: none;" id="payment_<?php echo $row['id']; ?>">
              
                      <a href="#" class="closeDrop">&times;</a>
                      <div class="card-header text-info bg-dark">

                        <b>Make Payment for <?php  echo $row['name']; ?></b>

                      </div>
                      <div class="card-body">

                       <b> Total Donation: <?php  echo $row['totalamt']; ?><br>
                        
                        Paid:   <?php echo $paid; ?><br>
                        Remain: <span class="text-danger"><?php echo $remain; ?></span><br> </b>

                        <form method="post" class="mb-3">

                          <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
                          <input type="number" class="form-control mb-2" name="amount" placeholder="Amount" required max="<?php echo $remain; ?>">
                          <textarea placeholder="Remarks" class="form-control mb-2" name="remarks"></textarea>
                          <button type="submit" name="pay" class="btn btn-sm btn-dark">Pay</button>

                        </form>


              
                        </div>
                </div>


                <div class="card paymentDescription" style="display: none;" id="paymentDescription_<?php echo $row['id']; ?>">
              
                      <a href="#" class="closeDrop">&times;</a>
                      <div class="card-header text-info bg-dark">
                        <b>Payment Details Of <?php  echo $row['name']; ?></b>
                      </div>
                      <div class="card-body">

                       <b> Total Donation: <?php  echo $row['totalamt']; ?><br>

                        Paid:   <?php echo $paid; ?><br>
                        Remain: <span class="text-danger"><?php echo $remain; ?></span><br> </b>
                        <div class="border border-1 border-bottom mb-3"></div>
                        <?php if(!empty($amttrack[0]['id'])){  ?>
                          <div>
                          
                        <?php 
                            foreach($amttrack as $paymentsRow){
                              ?>
                              
                                  <span class="border-end border-dark border-2 px-2"><?php echo date("d/m/Y",strtotime($paymentsRow['date'])); ?></span>
                                  <span class="border-end border-dark border-2 px-2"> &#8377; <?php echo $paymentsRow['amount']; ?></span>
                                  <span><?php echo $paymentsRow['remarks']; ?></span>

                                  <div class="border border-1 border-bottom"></div>
                                

                              <?php
                            }
                          ?>
                          </div>
                  
                      <?php } ?>

                        </div>
                </div>

            <tr>
            <td scope="col"> <?php  echo $i; ?></td>
            <td scope="col"> <?php  echo $row['receiptnum']; ?></td>
            <td scope="col"> <?php  echo $row['name']; ?></td>
            <td scope="col"> <?php  echo $row['phone']; ?></td>
            <td scope="col"> <?php  echo $row['address']; ?></td>
            <td scope="col"> <?php  echo $row['totalamt']; ?></td>
            <td scope="col"> <?php  echo date("d/m/Y", strtotime($row['createdon'])); ?></td>

            <td scope="col" class="actions">

              <a href="?page=donation&id=<?php echo $row['id']; ?>" class="text-decoration-none"> <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square"></i></button> </a>

              <a href="#" class="text-decoration-none descDropDown" data-id="<?php echo $row['id']; ?>"> <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button> </a>

              <a href="#" class="text-decoration-none payDropDown" data-id="<?php echo $row['id']; ?>" > <button class="btn btn-primary btn-sm"><i class="fa fa-money"></i></button> </a>


              

            </td>

            </tr>


            <?php
                $i++;

                }
              }
              else{
              ?>
              <td colspan="11">Data not found</td>

              <?php

              }

            ?>
            

            
            
          </tbody>

          </table>


        </div>

    



  </div>



</section>

