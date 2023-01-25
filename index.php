<?php 
$pageTitle="Storyvalley | Home";
include('includes/header.php');
?>

    <!--hero-->
    <section id="hero" class="bg-blob">
        <div class="container hero-home">
            <div class="row gx-5">
                <div class="col-md-5 ">
                    <h1 class="mt-5">Where the stories come to life</h1>
                    <div data-aos="fade-right">
                        <p class="mt-4 bg-text-home">
                        Story Valley uses visual, audio, and digital materials to help reinterpret student stories by combining oral history and innovative, creative literacy techniques. <br>Students come together from different backgrounds and cultures and work together to practice their English, their national language and to learn about each other's culture. <br>We aim to inspire students to read, write and speak in different languages, and to use their creativity to translate their stories to new media and platforms. This way, students will be able to strengthen their key competences in literacy and language in an engaging and creative way.<br>In the approach of using oral history as a driving force, we use an interdisciplinary way of learning to contribute to several European key priorities:
                            <ul class="bg-text-home">
                                <li>Raising awareness of the social and educational value of European Cultural Heritage</li>
                                <li>Strengthening key competences in Vocational Education & Training</li>
                                <li>Social inclusion: supporting the integration of people with migrant backgrounds</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-md-5 marginvideo video-container">
                    <div class="player video-container video-container video-container ">
                        <iframe width="520" height="300" src="https://www.youtube.com/embed/urvYtrv3VsU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------Card slider------->
    <section id="cards" class="bg-blob">
        <div class="container swiper">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="./assets/images/card1.jpg" alt="">
                        </div>
                        <div class="name-story">
                            <div class="name-owner">
                                <h3 class="name">The Clue of The Claw</h3>
                                <p class="owner">by Claire Legrand</p>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="./assets/images/card2.jpg" alt="">
                        </div>
                        <div class="name-story">
                            <div class="name-owner">
                                <h3 class="name">The Bridges of Graffiti</h3>
                                <p class="owner">by Emlyn Gough</p>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="./assets/images/card3.jpg" alt="">
                        </div>
                        <div class="name-story">
                            <div class="name-owner">
                                <h3 class="name">The Counts of Celje</h3>
                                <p class="owner">by Nikolaj Kovač</p>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="./assets/images/card4.jpg" alt="">
                        </div>
                        <div class="name-story">
                            <div class="name-owner">
                                <h3 class="name">A Journey Like No Other</h3>
                                <p class="owner">by Viktor Ivanov</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <!------End Card Slider------>
    <script>
document.getElementById("body").className += " background-home";
</script>
<?php include('includes/footer.php'); ?>
