<?php $__env->startSection('title',' Inicio' ); ?>

<?php $__env->startPush('css_or_js'); ?>
    <meta property="og:image" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']->value); ?>"/>
    <meta property="og:title" content="Welcome To <?php echo e($web_config['name']->value); ?> Home"/>
    <meta property="og:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="og:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">

    <meta property="twitter:card" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']->value); ?>"/>
    <meta property="twitter:title" content="Welcome To <?php echo e($web_config['name']->value); ?> Home"/>
    <meta property="twitter:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="twitter:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">
    <script src="<?php echo e(asset('public/assets/front-end')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/front-end')); ?>/css/home.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
    <style>
        .cz-countdown-days {
            color: white !important;
            background-color: <?php echo e($web_config['primary_color']); ?>;
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .cz-countdown-hours {
            color: white !important;
            background-color: <?php echo e($web_config['secondary_color']); ?>;
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .discount-top-f {
            text-align: end;
            /* margin-top: 5px; */
            margin-bottom: 5px;
        }

        .cz-countdown-minutes {
            color: white !important;
            background-color: <?php echo e($web_config['primary_color']); ?>;
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .cz-countdown-seconds {
            color: <?php echo e($web_config['primary_color']); ?>;
            border: 1px solid<?php echo e($web_config['primary_color']); ?>;
            padding: 0px 6px;
            border-radius: 3px !important;
        }

        .flash_deal_product_details .flash-product-price {
            font-weight: 700;
            font-size: 18px;
            color: <?php echo e($web_config['primary_color']); ?>;
        }

        .for-discoutn-value {
            background: <?php echo e($web_config['primary_color']); ?>;

        }

        .featured_deal_left {
            height: 130px;
            background: <?php echo e($web_config['primary_color']); ?> 0% 0% no-repeat padding-box;
            padding: 10px 100px;
            text-align: center;
        }

        .featured_deal {
            min-height: 130px;

        }

        .category_div:hover {
            color: <?php echo e($web_config['secondary_color']); ?>;
        }

        .deal_of_the_day {
            /* filter: grayscale(0.5); */
            opacity: .8;
            background: <?php echo e($web_config['secondary_color']); ?>;
            border-radius: 3px;
        }

        .deal-title {
            font-size: 12px;

        }

        .for-flash-deal-img img {
            max-width: none;
        }

        @media (max-width: 375px) {
            .cz-countdown {
                display: flex !important;

            }

            .cz-countdown .cz-countdown-seconds {

                margin-top: -5px !important;
            }

            .for-feature-title {
                font-size: 20px !important;
            }
        }

        @media (max-width: 600px) {
            .flash_deal_title {
                font-weight: 600;
                font-size: 18px;
                text-transform: uppercase;
            }

            .cz-countdown .cz-countdown-value {
                font-family: "Roboto", sans-serif;
                font-size: 11px !important;
                font-weight: 700 !important;
            }

            .featured_deal {
                opacity: 1 !important;
            }

            .cz-countdown {
                display: inline-block;
                flex-wrap: wrap;
                font-weight: normal;
                margin-top: 4px;
                font-size: smaller;
            }

            .view-btn-div-f {

                margin-top: 6px;
                float: right;
            }

            .view-btn-div {
                float: right;
            }

            .viw-btn-a {
                font-size: 10px;
                font-weight: 600;
            }


            .for-mobile {
                display: none;
            }

            .featured_for_mobile {
                max-width: 95%;
                margin-top: 20px;
            }
        }

        @media (max-width: 360px) {
            .featured_for_mobile {
                max-width: 96%;
                margin-top: 11px;
            }

            .featured_deal {
                opacity: 1 !important;
            }
        }

        @media (max-width: 375px) {
            .featured_for_mobile {
                max-width: 96%;
                margin-top: 11px;
            }

            .featured_deal {
                opacity: 1 !important;
            }

            .for-iphone-mobile {
                margin-left: 2%;
            }
        }

        @media (min-width: 768px) {
            .displayTab {
                display: block !important;
            }
        }

        @media (max-width: 800px) {
            .for-tab-view-img {
                width: 40%;
            }

            .for-tab-view-img {
                width: 105px;
            }

            .widget-title {
                font-size: 19px !important;
            }
        }

        .featured_deal_carosel .carousel-inner {
            width: 100% !important;
        }
    </style>


<style>
body, html {
  height: 100%;
  margin: 0;

}

.bgimg-1, .bgimg-2, .bgimg-3 {
    position: relative;
    background-color: #fff;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.bgimg-1 {
  background-image: url("<?php echo e(asset('public/assets/front-end/img/bacground-home-1.jpg')); ?>");
  min-height: 100%;
}
.bgimg-2 {
  background-image: url("<?php echo e(asset('public/assets/front-end/img/lacteos.jpg')); ?>");
  min-height: 700px;
}

.bgimg-3 {
  background-image: url("<?php echo e(asset('public/assets/front-end/img/panel3.jpg')); ?>");
  min-height: 700px;
}


.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #fff;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;

  color: #111;
}

.titulo-inicio {
  font-family: "Courgette", Sans-serif;
  font-size: 48px;
  font-weight: 500;
  line-height: 1.125em;
  letter-spacing: -1.5px;

}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;

  }
}

.elementor-shape[data-negative="false"].elementor-shape-bottom {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.elementor-shape[data-negative="false"].elementor-shape-bottom {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.elementor-shape-bottom {
  bottom: -1px;
}
.elementor-shape {
  overflow: hidden;
  position: absolute;
  left: 0;
  width: 100%;
  line-height: 0;
  direction: ltr;
}
.elementor-shape .elementor-shape-fill {
  fill: #fff;
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
  transform-origin: center;
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="bgimg-1">

    <div class="caption">
        <h1 class="titulo-inicio fst-italic text-white"> Productos Lácteos La Victoria</h1>
        <h4 class="text-white fst-italic">La excelencia en productos lácteos.</h4>
    </div>

    <div class="elementor-shape elementor-shape-bottom " data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill " opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
    </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;" class="text-center">

        <h1 class="titulo-inicio fst-italic" style="color: #b8860b;"> Consume productos de calidad</h1>
        <h4 class=" fst-italic ">Somos productores</h4>
        <div class="row">
            <hr class="col-1 mx-auto" style="background-color: #B8860B; height: 5px; opacity:1;">
        </div>
        <img src="<?php echo e(asset('public/assets/front-end/img/img1.jpg')); ?>" class="img-fluid ">

        <div class="row mt-5">
            <hr class="col-1 mx-auto" style="background-color: #B8860B; height: 5px; opacity:1;">
        </div>

</div>

<div class="bgimg-2">
    <div class="elementor-shape elementor-shape-top" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
    </div>

    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
    </div>
</div>

<div style="position:relative;">
  <div style="text-align:center;padding:50px 80px;text-align: justify;">
    <div class="row mt-5">
        <hr class="col-1 mx-auto" style="background-color: #B8860B; height: 5px; opacity:1;">
    </div>
    <div class="container">
        <div class="row p-5">
            <div class="col-4 p-5">
                <img src="<?php echo e(asset('public/assets/front-end/img/galeria1.jpg')); ?>" class="img-fluid ">
            </div>
            <div class="col-4 p-5">
                <img src="<?php echo e(asset('public/assets/front-end/img/galeria2.jpg')); ?>" class="img-fluid ">
            </div>
            <div class="col-4 p-5">
                <img src="<?php echo e(asset('public/assets/front-end/img/galeria3.jpg')); ?>" class="img-fluid ">
            </div>
        </div>
    </div>
  </div>
</div>



<div class="bgimg-3">
    <div class="elementor-shape elementor-shape-top" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
    </div>

    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
    </div>
  <div class="caption">
    <div  class="text-center">
            <h1 class="titulo-inicio fst-italic" style="color: #fff;"> Productos Lácteos La Victoria</h1>
            <h4 class="text-white fst-italic">Ven y comprueba nuestra calidad</h4>
    </div>
  </div>
</div>

<div style="position:relative;">

</div>
</br>
</br>



<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width:90%; margin-left:5%">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"  style="height: 500px; width: 100%; " >
        <img src="<?php echo e(asset('public/assets/front-end/img/panel3.jpg')); ?>" class="d-block w-100" alt="..." style="margin-top:1%; position: relative;">
      </div>
      <div class="carousel-item" style="height: 500px; width: 100%; ">
        <img src="<?php echo e(asset('public/assets/front-end/img/panel1.png')); ?>" class="d-block w-100" alt="..."  style="margin-top:1%">
      </div>
      <div class="carousel-item" style="height: 500px; width: 100%; ">
        <img src="<?php echo e(asset('public/assets/front-end/img/panel2.jpg')); ?>" class="d-block w-100" alt="..." style="margin-top:1%">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



    </br>
  <CENTER> <h1>COMO LLEGAR LÁCTEOS LA VICTORIA GUAYTACAMA</h1></CENTER>
<div class="contact-form">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.420363196008!2d-78.64376498572749!3d-0.8092502355188957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4599ad3e87b29%3A0x8a68e9cb17330b16!2sLacteos%20%22La%20Victoria%22!5e0!3m2!1ses-419!2sec!4v1645675525789!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>

             -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavictoria\resources\views/web-views/about-us2.blade.php ENDPATH**/ ?>
