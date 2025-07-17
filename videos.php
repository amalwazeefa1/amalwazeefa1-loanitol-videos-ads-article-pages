<style>
.move-search {
    transition: right 0.3s ease;
    right: 0px !important;
}

.search-field {
    transition: right 0.3s ease;
}

#search-icon {
    position: relative;
    z-index: 10;
}

.show-bttn.active {
    color: #fff;
    border-radius: 6px;
}

.show-bttn.red {
    color: #D81F37 !important;
    font-weight: bold;
}

/* Animation for hidden columns */
.video-container.animated-hide,
.video-container.animated-show {
    transition: opacity 0.4s cubic-bezier(0.4,0,0.2,1), transform 0.4s cubic-bezier(0.4,0,0.2,1);
}
.video-container.animated-hide {
    opacity: 0;
    transform: translateY(30px);
    pointer-events: none;
}
.video-container.animated-show {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}
</style>



<?php include("includes/meta.php"); ?>
<title>Videos Page | Loanitol</title>
</head>

<body>
    <?php include("includes/nav.php"); ?>

    <div class="hero-small--section-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <h6 class="h6-size col-sm-10 mb-0">
                        <span>Videos | Vlogs | Shorts | Reels</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container video-container py-2 position-relative mt-5 mb-5">
        <div class="h4-size title d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center mb-2">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <span class="fw-semibold">Videos and Vlogs</span>
            </div>
            <span id="search-icon-container" style="position:relative;">
                <img src="assets/videos/icons/search.svg" width="30px" alt="" id="search-icon1" style="cursor:pointer;">
                <input class="px-2 search-field border border-2 rounded" type="text" id="search-input1"
                    placeholder="Search Reels..."
                    style="display:none; position:absolute; right:40px; top:0; width:200px; height: 30px" />
            </span>
        </div>
        <div class="row g-4 my-3 gx-2 gy-2 d-flex align-items-center justify-content-center" id="video-row">
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode_008_Reel__004_New.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-1">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video height="600px" width="450px" src="assets/videos/Episode.mp4" controls
                                    loop></video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-2">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-3">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video width="450" height="600" controls loop>
                                    <source src="assets/videos/Episode.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-4">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <img class="cards-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mx-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-dialog modal-dialog-centered">
                                <video height="600px" width="450px" src="assets/videos/Episode.mp4" controls
                                    loop></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-5">
            <a href="#" class="show-bttn text-center" id="showmore-btn">Showmore</a>
            <a href="#" class="show-bttn text-center ms-2" id="showless-btn" style="display:none;">Show less</a>
        </div>
    </div>
    <div class="container reels-container py-2 mt-5 mb-5">
        <div class="h4-size title d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <span class="fw-semibold">Shorts and Reels</span>
            </div>
            <span id="search-icon-container" style="position:relative;">
                <img src="assets/videos/icons/search.svg" width="30px" alt="" id="search-icon2" style="cursor:pointer;">
                <input class="px-2 search-field border border-2 rounded" type="text" id="search-input2"
                    placeholder="Search Reels..."
                    style="display:none; position:absolute; right:40px; top:0; width:200px; height:30px" />
            </span>
        </div>
        <div class="row g-4 mt-1 mb-3 gx-2 gy-2 d-flex align-items-center justify-content-center">
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                <img class="reel-img img-fluid" src="assets/videos/44-Appukalil-Ninnu.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                <img class="reel-img img-fluid" src="assets/videos/aleena-about-business.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                <img src="assets/videos/play.svg" class="position-relative" alt="">
                <img class="reel-img img-fluid" src="assets/videos/90percent-loan-for-machineries.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                <img src="assets/videos/play.svg" class="position-relative" alt="">
                <img class="reel-img img-fluid" src="assets/videos/app-loan-edukkunnavar.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                id="reels-hide-1">
                <img class="reel-img img-fluid" src="assets/videos/44-Appukalil-Ninnu.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                id="reels-hide-2">
                <img class="reel-img img-fluid" src="assets/videos/aleena-about-business.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                id="reels-hide-3">
                <img src="assets/videos/play.svg" class="position-relative" alt="">
                <img class="reel-img img-fluid" src="assets/videos/90percent-loan-for-machineries.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
            <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                id="reels-hide-4">
                <img src="assets/videos/play.svg" class="position-relative" alt="">
                <img class="reel-img img-fluid" src="assets/videos/app-loan-edukkunnavar.jpg" alt="">
                <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                    viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path
                            d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                            fill="#D81F37" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="show-bttn text-center" id="showmore-reels-btn">Showmore</a>
            <a href="#" class="show-bttn text-center ms-2" id="showless-reels-btn" style="display:none;">Show less</a>
        </div>

    </div>


    <?php include("includes/calculation-bottom.php"); ?>
    <?php include("includes/footer.php"); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search input toggle for search-icon1
        var searchIcon1 = document.getElementById('search-icon1');
        var searchInput1 = document.getElementById('search-input1');
        if (searchIcon1 && searchInput1) {
            // Ensure both have transitions
            searchIcon1.style.transition = 'width 0.3s ease, height 0.3s ease';
            searchInput1.style.transition = 'width 0.3s ease, opacity 0.3s ease';

            searchIcon1.addEventListener('click', function(e) {
                e.stopPropagation();
                const isVisible = searchInput1.style.display === 'block';
                if (!isVisible) {
                    // Show input and animate icon larger
                    searchInput1.style.display = 'block';
                    searchInput1.style.opacity = '0';
                    searchInput1.style.width = '0px';
                    setTimeout(function() {
                        searchInput1.style.opacity = '1';
                        searchInput1.style.width = '200px';
                    }, 10);
                    searchIcon1.style.width = '40px';
                    searchIcon1.style.height = '40px';
                    searchInput1.focus();
                } else {
                    // Animate input hiding and icon smaller
                    searchInput1.style.opacity = '0';
                    searchInput1.style.width = '0px';
                    searchIcon1.style.width = '30px';
                    searchIcon1.style.height = '30px';
                    setTimeout(function() {
                        searchInput1.style.display = 'none';
                    }, 300);
                }
            });
            document.addEventListener('click', function(e) {
                if (!searchIcon1.contains(e.target) && !searchInput1.contains(e.target)) {
                    searchInput1.style.opacity = '0';
                    searchInput1.style.width = '0px';
                    searchIcon1.style.width = '30px';
                    searchIcon1.style.height = '30px';
                    setTimeout(function() {
                        searchInput1.style.display = 'none';
                    }, 300);
                }
            });
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        // Search input toggle for reels
        var searchIcon2 = document.getElementById('search-icon2');
        var searchInput2 = document.getElementById('search-input2');
        if (searchIcon2 && searchInput2) {
            searchIcon2.style.transition = 'width 0.3s ease, height 0.3s ease';
            searchInput2.style.transition = 'width 0.3s ease, opacity 0.3s ease';

            searchIcon2.addEventListener('click', function(e) {
                e.stopPropagation();
                const isVisible = searchInput2.style.display === 'block';
                if (!isVisible) {
                    searchInput2.style.display = 'block';
                    searchInput2.style.opacity = '0';
                    searchInput2.style.width = '0px';
                    setTimeout(function() {
                        searchInput2.style.opacity = '1';
                        searchInput2.style.width = '200px';
                    }, 10);
                    searchIcon2.style.width = '40px';
                    searchIcon2.style.height = '40px';
                    searchInput2.focus();
                } else {
                    searchInput2.style.opacity = '0';
                    searchInput2.style.width = '0px';
                    searchIcon2.style.width = '30px';
                    searchIcon2.style.height = '30px';
                    setTimeout(function() {
                        searchInput2.style.display = 'none';
                    }, 300);
                }
            });
            document.addEventListener('click', function(e) {
                if (!searchIcon2.contains(e.target) && !searchInput2.contains(e.target)) {
                    searchInput2.style.opacity = '0';
                    searchInput2.style.width = '0px';
                    searchIcon2.style.width = '30px';
                    searchIcon2.style.height = '30px';
                    setTimeout(function() {
                        searchInput2.style.display = 'none';
                    }, 300);
                }
            });
        }

        var searchInput1 = document.getElementById('search-input1');
        if (searchInput1) {
            // Animate on focus
            searchInput1.addEventListener('focus', function() {
                this.style.transition = 'width 0.3s ease'; // Smooth animation
                this.style.width = '200px';
            });

            // Animate on blur (when input loses focus)
            searchInput1.addEventListener('blur', function() {
                if (this.value === '') {
                    this.style.width = '0';
                }
            });
            // Animate on mouse release (useful if click triggers other behaviors)
            searchInput1.addEventListener('mouseup', function() {
                this.style.transition = 'width 0.3s ease';
                this.style.width = '200px';
            });
        }




        // Show More/Less for Videos
        var showMoreBtn = document.getElementById('showmore-btn');
        var showLessBtn = document.getElementById('showless-btn');
        var videoHideIds = ['video-hide-1', 'video-hide-2', 'video-hide-3', 'video-hide-4'];

        if (showMoreBtn && showLessBtn) {
            showMoreBtn.addEventListener('click', function(e) {
                e.preventDefault();
                videoHideIds.forEach(function(id) {
                    var el = document.getElementById(id);
                    if (el) {
                        el.classList.remove('d-none');
                        el.classList.add('animated-hide');
                        // Force reflow for transition
                        void el.offsetWidth;
                        el.classList.remove('animated-hide');
                        el.classList.add('animated-show');
                    }
                });
                showMoreBtn.style.display = 'none';
                showLessBtn.style.display = 'inline-block';
                showMoreBtn.classList.remove('active');
                showLessBtn.classList.remove('active');
                showLessBtn.classList.add('red'); // Make Show less font color active red
            });
            showLessBtn.addEventListener('click', function(e) {
                e.preventDefault();
                videoHideIds.forEach(function(id) {
                    var el = document.getElementById(id);
                    if (el) {
                        el.classList.remove('animated-show');
                        el.classList.add('animated-hide');
                        setTimeout(function() {
                            el.classList.add('d-none');
                        }, 400); // Match transition duration
                    }
                });
                showLessBtn.style.display = 'none';
                showMoreBtn.style.display = 'inline-block';
                showLessBtn.classList.remove('active');
                showLessBtn.classList.remove('red'); // Remove red color from Show less
                showMoreBtn.classList.remove('active');
            });
            // Set initial active state
            showMoreBtn.classList.add('active');
        }


        // Show More/Less for Reels
        var showMoreReelsBtn = document.getElementById('showmore-reels-btn');
        var showLessReelsBtn = document.getElementById('showless-reels-btn');
        var reelsHideIds = ['reels-hide-1', 'reels-hide-2', 'reels-hide-3', 'reels-hide-4'];

        if (showMoreReelsBtn && showLessReelsBtn) {
            showMoreReelsBtn.addEventListener('click', function(e) {
                e.preventDefault();
                reelsHideIds.forEach(function(id) {
                    var el = document.getElementById(id);
                    if (el) {
                        el.classList.remove('d-none');
                        el.classList.add('animated-hide');
                        void el.offsetWidth;
                        el.classList.remove('animated-hide');
                        el.classList.add('animated-show');
                    }
                });
                showMoreReelsBtn.style.display = 'none';
                showLessReelsBtn.style.display = 'inline-block';
                showLessReelsBtn.classList.add('red'); // Make Show less font color active red for reels
            });
            showLessReelsBtn.addEventListener('click', function(e) {
                e.preventDefault();
                reelsHideIds.forEach(function(id) {
                    var el = document.getElementById(id);
                    if (el) {
                        el.classList.remove('animated-show');
                        el.classList.add('animated-hide');
                        setTimeout(function() {
                            el.classList.add('d-none');
                        }, 400);
                    }
                });
                showLessReelsBtn.style.display = 'none';
                showMoreReelsBtn.style.display = 'inline-block';
                showLessReelsBtn.classList.remove('red'); // Remove red color from Show less for reels
            });
        }
    });
    </script>

</body>

</html>