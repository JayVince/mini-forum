<?php
include 'templates/header.php';

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Category;
use App\Model\Thread;

$category = Category::findAll();
$threads = Thread::findAll();

// $catId = $_GET['catid'];
// dd($threads);

try {

     $formSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';

     if (!$formSubmitted) {
          throw new Exception('This script must be accessed via a POST HTTP request.', 0);
     }

     if (
          !isset($_POST['title']) ||
          !isset($_POST['content'])
     ) {
          throw new Exception('Form field missing in request.', 1);
     }

     // Teste si l'un des champs est vide
     if (
          empty($_POST['title']) ||
          empty($_POST['content'])
     ) {
          throw new Exception('Form should not have empty fields.', 2);
     }

     // Récupère l'ID passé dans les données de formulaire le cas échéant
     $id = null;
     if (isset($_POST['id'])) {
          $id = intval($_POST['id']);
     }

     // Crée un nouvel objet représentant un post/thread à partir des informations du formulaire
     $post = new Thread(
          $id,
          $_POST['title'],
          $_POST['content'],
          null,
          null
     );
     // dd($post);

} catch (\Exception $e) {
}

?>

<?php //foreach ($threads as $thread) :
?>
<div class="container py-4 ">
     <div class="p-4 mb-4 bg-light rounded-2">
          <div class="container-fluid py-3">

               <h2 class="display-6 fw-bold">Welcome to PHP for Dummies</h2>
               <p class="col-md-12 fs-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. </p>
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
     <div class="container-fluid my-5">
          <h2 class="display-7 fw-bold text-center">Post Your Question to The Community</h2>
          <div class="form-center ">
               <form class="form-size" action="threadlist.php" method="POST">
                    <div class="mb-3">
                         <label for="exampleFormLabel" class="form-label">Title</label>
                         <input type="text" class="form-control" id="title" name="title">
                         <div id="emailHelp" class="form-text">Keep your question as short as possible</div>
                    </div>
                    <div class="mb-3">
                         <label for="textarea" class="form-label">Detail your question</label>
                         <textarea class="form-control" id="textarea" name="content" rows="3"></textarea>
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
     foreach ($threads as $thread) :
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
                    <img src="images/user.png" width="54" alt="...">
               </div>
               <div class="thread-content flex-grow-1 ms-3">
                    <h5 class="mt-2"><a class="text-dark" href="templates/post.php"><?= $thread->getThreadTitle(); ?></a></h5>
                    <?= $thread->getThreadContent(); ?>
               </div>
               <div class="font-weight-bold my-0">Posted by: Toto on Feb. 20th 2021</div>
          </div>
     <?php endforeach;
     ?>
</div>


<?php
include 'templates/footer.php';
?>