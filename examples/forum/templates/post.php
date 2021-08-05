
<?php //foreach ($threads as $thread): 
?>
<div class="container py-4">
     <div class="p-4 mb-4 bg-light rounded-2">
          <div class="container-fluid my-3">
               <h2 class="display-6 "><?= $thread->getThreadTitle();?></h2>
               <p class="col-md-12 fs-5 "><?= $thread->getThreadContent();?></p>
               <hr class="my-3">
               <p class="fw-bold my-0">Posted by Toto on <?= $thread->getThreadDate()->format('M-d, Y');?></p>
          </div>
     </div>
</div>


<!-- Submit a comment  -->
<div class="container">
     <div class="container-fluid my-5">
          <h2 class="text-center">Give Your Answer</h2>
          <div class="form-center ">
               <form class="form-size" action="" method="POST">
                    <div class="mb-3">
                         <label for="textarea" class="form-label">Write a comment</label>
                         <textarea class="form-control" id="textarea" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
               </form>
          </div>
     </div>


     <div class="fw-bold my-3">
          <h2>Discussions</h2>
     </div>
     <!-- Comment List posted -->
     <div class="d-flex align-items-center">
          <div class="flex-shrink-0 my-2">
               <img src="../images/user.png" width="54" alt="...">
          </div>
          <div class="thread-content flex-grow-1 ms-3">
               <h5 class="mt-2">sdkjfh djhfs djh fweiw jdf test test</h5>
          </div>
          <div class="font-weight-bold my-0">Posted by: Ed on Feb. 22nd 2021</div>
     </div>
     <!-- 2nd Comment -->
     <div class="d-flex align-items-center">
          <div class="flex-shrink-0 my-2">
               <img src="../images/user.png" width="54" alt="...">
          </div>
          <div class="thread-content flex-grow-1 ms-3">
               <h5 class="mt-2">sdkjfh djhfs djh fweiw jdf test test</h5>
          </div>
          <div class="font-weight-bold my-0">Posted by: WHAAALE on Feb. 25th 2021</div>
     </div>
     <?php //endforeach; 
     ?>
</div>
