<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

        
<div class="Module-6">
    <div class="container">
        <div class="col-md-4">
            <div class="row ">
                <div class="anhcafe">
                    <img src="anh/anh1.jpg" alt="anh1">
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row">
                <div class="M6-grid-1-2">
                    <p><span class="icon"></span></p>
                    <h2>Buddha:<br>
                        How to drink tea?</h2>
                    <p> The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.                   </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="M7">
                <div class='row'>

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">        
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide"><img src="anh/anh6.jpg"></div>
                                              <div class="swiper-slide"><img src="anh/anh7.jpg"></div>
                                              <div class="swiper-slide"><img src="anh/anh8.jpg"></div>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                          </div>
                                    <!-- Swiper JS -->  
                                        <script>
                                        var swiper = new Swiper('.swiper-container', {
                                          navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                          },
                                        });
                                    </script>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            
                            <!-- Quote 3 -->
                            
                        </div>        
                        <!-- Carousel Buttons Next/Prev -->
    
                    </div>                          

                </div>

            </div>
        </div>
    </div>

    <div class="anhdau">
        <div class="container">
            <div class="row">
                <p>
                    <img src="anh/anh3.jpg" alt="anh3">
                </p>
            </div>
        </div>
    </div>
</div>

