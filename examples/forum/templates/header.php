<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="../style.css" rel="stylesheet">
     <style>
          #ques {
               min-height: 433px;
          }
     </style>
     <title>Forum</title>
</head>

<body>
     <?php
     include 'signin.php';
     include 'signup.php';
     ?>

     <header>
          <div class="collapse bg-dark" id="navbarHeader">
               <div class="container">
                    <div class="row">
                         <div class="col-sm-8 col-md-6 py-4">
                              <h4 class="text-white">About</h4>
                              <p class="text-muted">M-Forum is the most significant global network of Volunteering for Developer community. M-Forum exists to share information, develop good practice and enhance cooperation across the volunteering for developers and open source community. It promotes the value of volunteering through policy engagement, mutual learning and by sharing innovative and good practices. M-Forum is a ‘virtual’ network, with a global membership that includes a range of organisations involved in international development.</p>
                         </div>
                         <div class="col-sm-2 offset-md-1 py-2">
                              <h4 class="text-white">Category</h4>
                              <ul class="list-unstyled">
                                   <li><a href="#" class="text-white">Programming</a></li>
                                   <li><a href="#" class="text-white">Database</a></li>
                                   <li><a href="#" class="text-white">Tutorials</a></li>
                              </ul>
                         </div>
                         <div class="col-sm-2 py-2">
                              <h4 class="text-white">Contact</h4>
                              <ul class="list-unstyled">
                                   <li><a href="#" class="text-white">Follow on Twitter</a></li>
                                   <li><a href="#" class="text-white">Like on Facebook</a></li>
                                   <li><a href="#" class="text-white">Email us</a></li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
               <div class="container">
                    <a href="../" class="navbar-brand d-flex align-items-center">
                         <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                              <path d="M17.659,3.681H8.468c-0.211,0-0.383,0.172-0.383,0.383v2.681H2.341c-0.21,0-0.383,0.172-0.383,0.383v6.126c0,0.211,0.172,0.383,0.383,0.383h1.532v2.298c0,0.566,0.554,0.368,0.653,0.27l2.569-2.567h4.437c0.21,0,0.383-0.172,0.383-0.383v-2.681h1.013l2.546,2.567c0.242,0.249,0.652,0.065,0.652-0.27v-2.298h1.533c0.211,0,0.383-0.172,0.383-0.382V4.063C18.042,3.853,17.87,3.681,17.659,3.681 M11.148,12.87H6.937c-0.102,0-0.199,0.04-0.27,0.113l-2.028,2.025v-1.756c0-0.211-0.172-0.383-0.383-0.383H2.724V7.51h5.361v2.68c0,0.21,0.172,0.382,0.383,0.382h2.68V12.87z M17.276,9.807h-1.533c-0.211,0-0.383,0.172-0.383,0.383v1.755L13.356,9.92c-0.07-0.073-0.169-0.113-0.27-0.113H8.851v-5.36h8.425V9.807z" />
                              <circle cx="12" cy="13" r="4" />
                         </svg>
                         <strong class="fst-italic">M-FoRuM</strong>
                    </a>
                    <div>
                         <a href="#" class="sign btn btn-outline-primary my-2" data-bs-toggle="modal" data-bs-target="#signinModal">Signin</a>
                         <a href="#" class="sign btn btn-outline-primary my-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a>
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                         </button>
                    </div>
               </div>
          </div>
     </header>