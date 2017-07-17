<div class="footer-login-form">
  <h2>Employee Login</h2>
    <form name="loginform" id="loginform" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <input type="text" id="user_login" name="log" class="input form-control" value="" />
          <label for="user_login" class="control-label">USER ID</label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <input type="password" id="user_pass" name="pwd" class="input form-control" value="" />
          <label for="user_pass" class="control-label">PASSWORD</label>
        </div>
      </div>
    </div>
    <input type="submit" name="wp-submit" id="wp-submit" class="btn-main btn-inverse" value="SIGN IN" />
    <input type="hidden" name="redirect_to" value="<?php echo home_url('employee-links'); ?>" />
  </form>
  <a href="<?php echo home_url('wp-login.php?action=lostpassword'); ?>" class="control-label">FORGOT USER ID OR PASSWORD?</a>
</div>