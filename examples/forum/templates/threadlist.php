

<?php //foreach ($threads as $thread) :
?>
<div class="container py-4 ">
     <div class="p-4 mb-4 bg-light rounded-2">
          <div class="container-fluid py-3">
               <h2 class="display-6 fw-bold">Welcome to <?= $category->getName() ?></h2>
               <p class="col-md-12 fs-5"><?= $category->getDescription() ?></p>
               <hr class="my-5">
               <p>No Spam / Advertising / Self-promote in the forums. Do not post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post questions. Do not PM users asking for help.
                    Remain respectful of other members at all times.</p>
               <button class="btn btn-primary btn-lg" type="button">Learn More</button>
               <?php //endif; 
               ?>
          </div>
     </div>
</div>



<div class="container">

     <!-- Submit a form to ask a question -->
     <div class="container-fluid p-4 my-5 bg-light rounded-2">
          <h2 class="display-7 fw-bold text-center">Post Your Question to The Community</h2>
          <div class="form-center ">
               <form class="form-size" action="/new-thread/<?= $category->getId();?>" method="POST">
                    <div class="mb-3">
                         <label for="title" class="form-label">Title</label>
                         <input type="text" class="form-control" id="thread-title" name="thread-title">
                         <div id="emailHelp" class="form-text">Keep your question as short as possible</div>
                    </div>
                    <div class="mb-3">
                         <label for="textarea" class="form-label">Detail your question</label>
                         <textarea class="form-control" id="textarea" name="content" rows="3"></textarea>
                         <input type="hidden" name="user-token" value="a557476b7360e49711b465e441f13062">
                    </div>
                    <button type="submit" class="btn btn-primary">Post Question</button>
               </form>
          </div>
     </div>


     <div class="fw-bold my-3">
          <h2>Browse Topics</h2>
     </div>
     <?php
     $result = false;
     foreach ($category->getThread() as $threads) :
          $result = true;
     ?>
          <?php if (!$result) : ?>
               <!-- If threadlist is empty, display this message -->
               <div class="p-4 mb-4 ">
                    <div class="p-4 mb-4 bg-light rounded-3">
                         <div class="container-fluid py-3">
                              <h3 class="display-6 fw-bold">Ooops... Nothing to read here...</h3>
                              <p class="col-md-8 fs-4">Be the first to ask a question</p>
                         </div>
                    </div>
               </div>

          <?php endif; ?>

          <!-- Question List posted -->
          <div class="d-flex align-items-center">
               <div class="flex-shrink-0">
                    <img src="../images/user.png" width="54" alt="...">
               </div>
               <div class="thread-content flex-grow-1 ms-3">
                    <h5 class="mt-2"><a class="text-dark" href="/post/<?= $threads->getId(); ?>"><?= $threads->getThreadTitle(); ?></a></h5>
                    <?= $threads->getThreadContent(); ?>
               </div>
               <div class="font-weight-bold mx-2">Posted by Toto on <?= $threads->getThreadDate()->format('M-d, Y');?></div>
          </div>
     <?php endforeach;
     ?>
</div>


<?php
// include 'footer.php';
?>