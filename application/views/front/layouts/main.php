<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootsrap -->
   <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome-free/css/all.min.css">
   <!--Custom Css -->
   <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">

   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f4f4f4;
         color: #333;
         margin: 0;
         padding: 20px;
      }

      .content {
         max-width: 800px;
         margin: 0 auto;
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
         text-align: center;
         color: #2c3e50;
      }

      p {
         line-height: 1.6;
         text-align: justify;
      }

      .image-gallery {
         display: flex;
         flex-wrap: wrap;
         gap: 20px;
         justify-content: center;
         margin: 20px 0;
      }

      .image-gallery img {
         width: 45%;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
   </style>

   <!-- Icon -->
   <link rel="icon" href="" type="image/png">
   <title><?= $title ?> - SMK Negri 2 Nabire</title>
</head>

<body>

   <!-- Navbar -->
   <?php $this->load->view('front/layouts/_navbar'); ?>
   <!-- End of Navbar -->

   <!-- Content -->
   <?php $this->load->view('front/pages/' . $page); ?>
   <!-- End of Content -->

   <!-- Footer -->
   <?php $this->load->view('front/layouts/_footer'); ?>
   <!-- End of Footer -->


   <!-- Jquery -->
   <script src="<?= base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>