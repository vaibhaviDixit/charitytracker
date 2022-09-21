
<section>
  
  <div class="container-fluid p-0 pt-3">
    <div class="container table-responsive">



        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h5 class="">Add Donations</h5>
        </div>
        <hr>

        <div>

          <form method="post">
            
            <div class="row">

              <div class="col-sm-3 mb-3">
                      <label class="form-label">Receipt id<span class="text-danger">*</span></label>
                      <input type="text" class="form-control"  id="rid" required name="rid"  value="<?php echo $rid; ?>" readonly>
                          
              </div>


               <div class="col-sm-6 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control"  id="name" required name="name"  value="<?php echo $name; ?>">
                          
              </div>

               <div class="col-sm-3 mb-3">
                      <label class="form-label">Phone<span class="text-danger">*</span></label>
                      <input type="text" class="form-control"  id="phone" required name="phone"  value="<?php echo $phone; ?>" maxlength="12" minlength="10">
                          
              </div>
               <div class="col-sm-12 mb-3">
                      <label class="form-label">Address<span class="text-danger">*</span></label>
                      <textarea type="text" class="form-control"  id="addr" required name="addr"> <?php echo $addr; ?> </textarea>
                          
              </div>

              <div class="col-sm-3 mb-3">
                      <label class="form-label">Total Donation<span class="text-danger">*</span></label>
                      <input type="number" class="form-control"  id="donation" required name="donation" value="<?php echo $totalamt; ?>">
                          
              </div>




          </div>
          <div class="row">
              <div class="col-sm-4 mb-3">
                      <button type="submit" class="btn btn-primary" name="donate">Donate</button>
                          
              </div>

            </div>


          </form>


          

        </div>



    </div>
  </div>
</section>

