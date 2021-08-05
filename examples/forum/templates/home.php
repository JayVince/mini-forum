

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

     <div class="carousel-inner">
          <div class="carousel-item active">
               <img src="https://source.unsplash.com/1600x500/?programming,coding" class="d-block w-100" alt="...">
          </div>
     </div>
</div>


<!-- Category container  -->

<main class="container">
     <h2 class="text-center my-4">Welcome to M-Forum</h2>
     <h3 class="text-center my-4">Browse Categories</h3>
     <div class="row mb-2 mt-4">
          <?php foreach ($categories as $cat) : ?>
               <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static">
                              <!-- <strong class="d-inline-block mb-2 text-primary">PHP</strong> -->
                              <h3 class="mb-0"><?= $cat->getName(); ?></h3>
                              <div class="mb-1 text-muted">Posted on <?= $cat->getCreateDate()->format('Y-m-d'); ?></div>
                              <p class="card-text mb-auto"><?= $cat->getDescription(); ?></p>
                              <a href="/thread/<?= $cat->getId(); ?>" class="stretched-link">View Threads</a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                              <img src="<?= $cat->getCatImage(); ?>" class="bd-placeholder-img" width="280" height="250" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                         </div>
                    </div>
               </div>
          <?php endforeach; ?>
     </div>
</main>

