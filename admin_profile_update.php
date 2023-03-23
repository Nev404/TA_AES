<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
}
;

if (isset($_POST['update'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $update_profile = $conn->prepare("UPDATE `users` SET name = ?, email = ? WHERE id = ?");
   $update_profile->execute([$name, $email, $admin_id]);

   $old_image = $_POST['old_image'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/' . $image;

   if (!empty($image)) {

      if ($image_size > 2000000) {
         $message[] = 'image size is too large';
      } else {
         $update_image = $conn->prepare("UPDATE `users` SET image = ? WHERE id = ?");
         $update_image->execute([$image, $admin_id]);

         if ($update_image) {
            move_uploaded_file($image_tmp_name, $image_folder);
            unlink('uploaded_img/' . $old_image);
            $message[] = 'image has been updated!';
         }
      }

   }

   $old_pass = $_POST['old_pass'];
   $previous_pass = md5($_POST['previous_pass']);
   $previous_pass = filter_var($previous_pass, FILTER_SANITIZE_STRING);
   $new_pass = md5($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = md5($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if (!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)) {
      if ($previous_pass != $old_pass) {
         $message[] = 'old password not matched!';
      } elseif ($new_pass != $confirm_pass) {
         $message[] = 'confirm password not matched!';
      } else {
         $update_password = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
         $update_password->execute([$confirm_pass, $admin_id]);
         $message[] = 'password has been updated!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>admin profile update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
   <link rel="stylesheet" href="css/style2.css" />

</head>

<body>

   <!-- top navigation bar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
         </button>
         <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="admin_page.php">AES 128</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
            aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="topNavBar">
            <form class="d-flex ms-auto my-3 my-lg-0">
            </form>
            <ul class="navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <i class="bi bi-person-fill"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- top navigation bar -->
   <!-- offcanvas -->
   <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
         <nav class="navbar-dark">
            <ul class="navbar-nav">
               <li>
                  <div class="text-muted small fw-bold text-uppercase px-3">
                     HOME
                  </div>
               </li>
               <li>
                  <a href="admin_page.php" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                     <span>Dashboard</span>
                     <a href="admin_profile_update.php" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-gear"></i></span>
                        <span>Update Profile</span>
                     </a>
                     <a href="register.php" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                        <span>Add User</span>
                     </a>
                  </a>
               </li>

               <li class="my-4">
                  <hr class="dropdown-divider bg-light" />
               </li>
               <li>
                  <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                     Kriptografi
                  </div>
               </li>
               <li>
                  <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                     <span class="me-2"><i class="bi bi-folder-fill"></i></span>
                     <span>File</span>
                     <span class="ms-auto">
                        <span class="right-icon">
                           <i class="bi bi-chevron-down"></i>
                        </span>
                     </span>
                  </a>
                  <div class="collapse" id="layouts">
                     <ul class="navbar-nav ps-3">
                        <li>
                           <a href="#" class="nav-link px-3">
                              <span class="me-2"><i class="bi bi-file-earmark-lock2-fill"></i></span>
                              <span>Enkripsi</span>
                           </a>
                           <a href="#" class="nav-link px-3">
                              <span class="me-2"><i class="bi bi-unlock-fill"></i></span>
                              <span>Dekripsi</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </li>
               <a href="#" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-clock-history"></i></span>
                  <span>All File</span>
               </a>
               <li class="my-4">
                  <hr class="dropdown-divider bg-light" />
               </li>
               <li>
                  <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                     HELP
                  </div>
                  <a href="help.php" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-question-circle-fill"></i></span>
                     <span>Panduan</span>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </div>
   <!-- offcanvas -->
   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

   <main class="mt-5 pt-3">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <h4>Update Profile</h4>
            </div>
         </div>

         <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$admin_id]);
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <section class="update-profile-container">
            <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="card">
                     <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                           <div class="mb-4">
                              <img src="uploaded_img/<?= $fetch_profile['image']; ?>" class="rounded mx-auto d-block"
                                 alt="">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text bi bi-person-fill" id="inputGroup-sizing-default"></span>
                              <input type="text" name="name" required class="form-control" placeholder="enter your name"
                                 value="<?= $fetch_profile['name']; ?>">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text space bi bi-envelope-fill"
                                 id="inputGroup-sizing-default"></span>
                              <input type="email" name="email" required class="form-control"
                                 placeholder="enter your email" value="<?= $fetch_profile['email']; ?>">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text space bi bi-image-fill"
                                 id="inputGroup-sizing-default"></span>
                              <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
                              <input type="file" name="image" class="form-control"
                                 accept="image/jpg, image/jpeg, image/png">
                           </div>
                           <div class="input-group mb-3">
                              <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
                              <span class="input-group-text space bi bi-file-lock2-fill"
                                 id="inputGroup-sizing-default"></span>
                              <input type="password" class="form-control" name="previous_pass"
                                 placeholder="enter old password">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text bi bi-key-fill" id="inputGroup-sizing-default"></span>
                              <input type="password" class="form-control" name="new_pass"
                                 placeholder="enter new password">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text bi bi-key" id="inputGroup-sizing-default"></span>
                              <input type="password" class="form-control" name="confirm_pass"
                                 placeholder="confirm new password">
                           </div>
                     </div>
                     <div class="d-grid col-1 mx-auto">
                        <input type="submit" value="Update Profile" name="update" class="btn btn-primary">
                     </div>
                     </form>
                  </div>
               </div>
            </div>
      </div>
      </section>
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
      <script src="./js/jquery-3.5.1.js"></script>
      <script src="./js/jquery.dataTables.min.js"></script>
      <script src="./js/dataTables.bootstrap5.min.js"></script>
      <script src="./js/script.js"></script>

</body>

</html>