<footer>
    <div class="container">
    <h1>Start your free trial today.</h1>

    <div class="form">
        <form id="submit-form" class="form-inline" action=""  method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <input type="name" class="form-control" id="companyname" placeholder="company name">
        </div>
        <button type="submit" class="btn btn-default" id="btn-3">Get Started Free</button>
    </form>
    </div>

<p>No credit card. No commitment.</p>
</div>
</footer>


<?php wp_footer(); ?>
</div>
</body>
</html>

<script>

 jQuery('#submit-form').submit(function(e){

      e.preventDefault();
     var email =  jQuery('#email').val();
     var companyname =  jQuery('#companyname').val();
          jQuery.ajax({
           url: '<?php echo admin_url('admin-ajax.php'); ?>',
           type: "POST",
           cache: false,
           data:{
              action: 'send_email',
              email: email,
              companyname: companyname,
                },
           success:function(res){
               alert("Email Sent.");
               }
                      });
});

</script>
