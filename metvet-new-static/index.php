<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include 'includes/head.php'; ?>
        <title>MedVet Pharma Pvt. Ltd</title>
    </head>
    <body class="index-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Starts -->
        <?php include 'includes/header.php'; ?>

        <!-- Header Ends -->

        <!-- Nav Starts -->
        
        <?php include 'includes/nav.php'; ?>
    
        <!-- Nav Ends -->


        <!-- Banner Starts -->
        <div class="banner">
    		<div id="metvet-silder">
    			<div><img src="img/banner-test3.png" alt=""></div>
    			<div><img src="img/banner-test1.png" alt=""></div>
    			<div><img src="img/banner-test2.png" alt=""></div>
    		</div>

        </div>
        <!-- Banner Ends -->


        <!-- Index-about Starts -->
        <!-- Who We Are Starts -->
        <section>
            <div class="what-is">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 clearfix">

                            <h2><span>ABOUT</span>MEDVET</h2>
                        </div>
                        <p class="what-para col-md-9 col-sm-8">
                            Medvet Pharma Pvt. Ltd. is a privately-held Nepal-based Importing & Marketing company located in Tirpureshwor,Kathmandu was established in 2011 by Experienced Professionals who has served more than two decades in Nepalese Vet Medicine and Products Importing and marketing Industry.This company has covered almost all the veterinary stockists around Nepal and is  &nbsp;&nbsp;<a href="about.php">more...</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Who We Are Ends -->
        <!-- Index-about Ends -->


        <!-- Affilaitaion Starts -->
        
        <?php include 'includes/affiliation.php'; ?>

        <!-- Affiliation Ends -->


        <!-- Footer Starts -->

        <?php include 'includes/footer.php'; ?>
        
        <!-- Footer Ends -->

    <?php include 'includes/end-script.php'; ?>
    <script>

    $(document).ready(function($) {
      $("#metvet-silder").owlCarousel({
            singleItem : true,
            pagination : true,
            navigation : true,
            navigationText : ["",""],


      });
    });


    $("body").data("page", "frontpage");

    </script>
</html>
