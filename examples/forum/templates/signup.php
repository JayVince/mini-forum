<!-- Go to VIEW directory -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup</h5>
               </div>
               <form action="" method="POST">
                    <div class="modal-body">
                         <div class="form-group">
                              <label for="username">Username</label>
                              <input type="name" class="form-control" id="username" name="username">
                         </div>
                         <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                              <!-- <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"> -->
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                   else.</small>
                         </div>
                         <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                         </div>
                         <div class="form-group">
                              <label for="cPassword">Confirm Password</label>
                              <input type="password" class="form-control" id="cPassword" name="cPassword">
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-primary" data-dismiss="modal">Signup</button>
                    </div>
               </form>
          </div>
     </div>
</div>