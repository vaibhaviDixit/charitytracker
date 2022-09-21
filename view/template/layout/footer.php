
  <!-- js -->
    <script src="<?php echo SITE_PATH;?>view/static/js/jquery.min.js"></script>
    <script src="<?php echo SITE_PATH;?>view/static/js/main.js"></script>
    <script src="<?php echo SITE_PATH;?>view/static/js/bootstrap.min.js"></script>
   <script src="<?php echo SITE_PATH; ?>view/static/js/datatables.js"></script>

   <script type="text/javascript">
     
    $(document).ready( function () {
      $('#datatable').DataTable();
    });


    $(".payDropDown").click(function(){
            
            $(".makePayment").toggle();
        });  

        $(document).on('click', '.payDropDown', function(e) {
              
              $(".makePayment").hide();
              let id=$(this).attr("data-id");
              $("#payment_"+id).show();

        });

        $(document).on('click', '.closeDrop', function(e) {
              $(".makePayment").hide();

        });

      // 
       $(".descDropDown").click(function(){
            
            $(".paymentDescription").toggle();
        });  

        $(document).on('click', '.descDropDown', function(e) {
              
              $(".paymentDescription").hide();
              let id=$(this).attr("data-id");
              $("#paymentDescription_"+id).show();

        });

        $(document).on('click', '.closeDrop', function(e) {
              $(".paymentDescription").hide();

        });


   </script>

</body>
</html>