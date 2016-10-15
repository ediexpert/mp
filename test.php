<form id="addpic" name="addpic" method="post" enctype="multipart/form-data">
    <input type="file" name="mfoni" id="upper1" style="height:30px; width:50%; cursor:hand;" />
    <input type="hidden" name="user" value="<?php echo $id; ?>" id="user" />
</form>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/less.js"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<script defer src="assets/js/jquery.flexslider.js"></script>
<!-- Google Map -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/js/custom-mapscript-logistic.js"></script>
<!-- Google Map -->
<script src="assets/js/validation.js"></script>
<script src="assets/js/site.js"></script>
<script type="text/javascript">
$("input#upper1").on('change', function(){
  alert("gone");
  $("form#addpic").ajaxSubmit({
      type: "post",
      success: function() {
          alert("Processed");
      },
      complete: function() {
          alert("File upload is completed");
      }
  });
});
</script>
