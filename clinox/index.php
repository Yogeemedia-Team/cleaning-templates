<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="description" content="clinox - Cleaning Services HTML template">
    <meta name="keywords" content="	cleaner, cleaning, cleaning agency, cleaning business, cleaning company, cleaning service, floor cleaning, house cleaning, housekeeping, janitor, maid service, maintenance, washing, window cleaning">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'components/global/headercss.php' ?>
</head>

<body>

    <div class="body_wrap">
        <!-- preloder -->
        <?php require_once 'components/global/preloder.php'; ?>

        <!-- back to top button -->
        <?php require_once 'components/global/back_to_top.php'; ?>

        <!-- header start -->
        <header class="header">
            <!-- header_top -->
            <?php require_once 'components/global/header_top.php'; ?>
            <!-- navbar -->
            <?php require_once 'components/global/navbar.php'; ?>
        </header>
        <!-- header end -->
        <!-- sidebar -->
        <?php require_once 'components/global/sidebar.php'; ?>
        <main>
            <!-- hero section -->
            <?php require_once 'components/body/hero.php'; ?>

            <!-- feature section -->
            <?php require_once 'components/body/feature.php'; ?>

            <!-- brand section -->
            <?php require_once 'components/body/brand.php'; ?>

            <!-- about_main section -->
            <?php require_once 'components/body/about_main.php'; ?>

            <!-- tab_service section -->
            <?php require_once 'components/body/tab_service.php'; ?>

            <!-- project section -->
            <?php require_once 'components/body/project.php'; ?>

            <div class="clemfox__bg">
                <!-- services section -->
                <?php require_once 'components/body/services.php'; ?>

                <!-- marquee section -->
                <?php require_once 'components/body/marquee.php'; ?>

                <!-- process section -->
                <?php require_once 'components/body/process.php'; ?>

                <!-- about_inner section -->
                <?php require_once 'components/body/about_inner.php'; ?>
            </div>

            <!-- counter section -->
            <?php require_once 'components/body/counter.php'; ?>

            <!-- testimonial section -->
            <?php require_once 'components/body/testimonial.php'; ?>

            <!-- faq section -->
            <?php require_once 'components/body/faq.php'; ?>

            <!-- blog section -->
            <?php require_once 'components/body/blog.php'; ?>
        </main>

        <!-- footer section -->
        <?php require_once 'components/global/footer.php'; ?>

    </div>
    <!-- footer js -->
    <?php include 'components/global/footerjs.php' ?>
</body>

</html>