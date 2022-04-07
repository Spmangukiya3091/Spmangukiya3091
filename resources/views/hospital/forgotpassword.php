<link rel="stylesheet" type="text/css" href="../assets/css/model.css">
<!-- The Modal -->
<div id="myfor" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <h3 class="reg">Manage Password
    <span class="close-model">&times;</span></h3>
    <form id="forgot_form" method="post" class="registration">
      <div class="form-row">
        <div class="form-group  col-md-12">
            <label for="">Email Address *</label>
            <input type="email" class="form-control" name="email" required="">
        </div>
        <div class="form-group  col-md-12">
            <input type="submit" name="btnsubmit" id= "forgot_submit" class="btn btn-primary" value="Submit">
        </div>
            <input type="hidden" name="type" value="forgot" />
           <span class="success_error" id="form_forgot_msg"></span>
      </div>
    </form>
  </div>
</div>
<script src="../assets/js/forgot_form.js"></script>