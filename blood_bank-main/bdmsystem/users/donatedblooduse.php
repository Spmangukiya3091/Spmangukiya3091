<?php 
    $page = 'blood';
    include "header.php";
    include "conn.php";
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Donote Blood Use</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="w3l-contact-main">
  <div class="container py-md-5">
    <h1>How Donated Blood Is Used</h1>
    <div class="container py-md-5">
      <h6 class="sub-title">Technology at Rotary Blood Bank</h6>
      <p>No compromise is made when it comes to technology. The Rotary Blood Bank has invested in the most sophisticated Blood Banking equipment and have highly qualified staff to run the Blood Bank.</p>
      <div id="demo" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="../assets/images/b1.jpg">
          </div>
          <div class="carousel-item">
              <img src="../assets/images/cryofuge-6000.jpg">
          </div>
          <div class="carousel-item">
              <img src="../assets/images/MCS+.jpg">
          </div>
          <div class="carousel-item">
              <img src="../assets/images/ortho-autovue.jpg">
          </div>
          <div class="carousel-item">
              <img src="../assets/images/platelet-agitator.jpg">
          </div>
          <div class="carousel-item">
              <img src="../assets/images/VITROS-3600.jpg">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a>
        <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
      </div>
      <p>Your single donation of 450 ml blood is separated into different components, benefiting as many as three patients.</p>

      <p>Blood is made up of different components and, invariably, a patient needs a transfusion of just a particular component. Utilizing whole blood is wasteful, and sometimes even undesirable. It is now the standard practice of all modern blood banks to separate blood into components and ensure the optimum utilization of this precious resource.</p>

      <p>Whole blood has cellular components comprising red blood corpuscles, white blood corpuscles, platelets suspended in plasma solution (liquid plasma consisting of water, electrolytes, albumin, globulin, coagulation factors and other proteins). It is needed when both red cells mass and total volume must be restored, as in massive hemorrhage.</p>

      <h6 class="sub-title">Red Cells</h6>
      <p>The majority of donated blood goes to people with cancer, as well as people who have suffered traumatic accidents, burns or who undergo surgery.</p>

      <h6 class="sub-title">Plasma</h6>
      <p>Plasma contains very important proteins, nutrients and clotting factors which help to prevent and stop bleeding. It is required in bleeding patients with coagulation deficiency problems secondary to liver disease, disseminated intravascular coagulopathy, Factor V or Factor IX deficiency.</p>

      <h6 class="sub-title">Platelets</h6>
      <p>Platelets are used to help clot the blood and seal wounds in surgical and cancer patients. Leukaemia and chemotherapy treatments can reduce a patient’s platelet count. They are needed in cases of bleeding due to severe thrombocytopenia and prophylactic therapy.</p>

      <h6 class="sub-title">Blood has a Short Shelf Life</h6>
      <p>All blood components have a short shelf life, creating the need for a constant blood supply.</p>
      <p>platelets – up to 5 days<br>
          red cells – 42 days<br>
          plasma – up to one year
      </p>
    </div>
  </div>
</div>
<?php include "footer.php";?>