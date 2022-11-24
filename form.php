<?php

?>
<form class="p-4 mb-4" action="loginControl.php" method="post">
  <div class="row">
    <div class="col"></div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    <div class="col"></div>
  </div>
</form>