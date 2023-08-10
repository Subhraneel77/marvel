<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content here... -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <link rel="stylesheet" href="icon-font.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/png" href="marvel_cinematic_universe_wallpaper_by_thekingblader995_defibp5-pre.jpg" />

    <title>Marval : The Cinematic Emperor</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission here...
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $selectedOption = $_POST['size'];
        
           
            echo "Thank you for submitting the form!";
        }
        
    }
    ?>

    <div class="navigation">
        <!-- Navigation content here... -->
        <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item">
                    <a href="https://www.marvel.com" class="navigation__link"><span>01</span>About Marval</a>
                </li>
                <li class="navigation__item">
                    <a href="https://en.wikipedia.org/wiki/Marvel_Comics" class="navigation__link"><span>02</span>Our Superhero's List</a>
                </li>
                <li class="navigation__item">
                    <a href="https://www.bewakoof.com/avengers-t-shirts?gclid=CjwKCAiAnO2MBhApEiwA8q0HYc2MGYaQsfMTP7AZ_6rT9k3rSsM4TLsoqRAvfmx8OiTCpo8epdZZMhoCpeYQAvD_BwE" class="navigation__link"><span>03</span>Popular Accessories</a>
                </li>
                <li class="navigation__item">
                    <a href="https://www1.soap2day.video/" class="navigation__link"><span>04</span> Movies & Comics</a>
                </li>
                <li class="navigation__item">
                    <a href="https://www.marvel.com" class="navigation__link"><span>05</span>Book Now</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>

    <header class="header">
        <!-- Header content here... -->
        <div class="header__logo-box">
            <img src="Subhro Logo Transparent.png" alt="Logo" class="header__logo" />
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">MARVEL</span>
                <span class="heading-primary--sub">an entire universe. once and for all</span>
            </h1>

            <a href="https://www.linkedin.com/in/subhraneel-778/" class="btn btn--white btn--animated">!! Discover !! </a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <!-- Section content here... -->
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting features about Marvel Universe
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Deadpool : It's really interesting Fact guys !!
                    </h3>
                    <p class="paragraph">
                        Deadpool, one of Marvel’s most popular characters, was supposed to be a spoof of Deathstroke. The name Wade Wilson was a hilarious reference to his origins and how the character was inspired by DC Comic’s Deathstroke.He Has An Unhealthy Love Of Chimichangas.
                        Itty bitty foodie Deadpool!
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Do You Know It !!
                    </h3>
                    <p class="paragraph">
                        In 1994, Marvel bought the rights for The Men in Black (originally owned by Malibu Comics). This simply means that all films, shows, and video games have been produced by Marvel.
                    </p>

                    <a href="https://facts.net/lifestyle/entertainment/marvel-facts/" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="deadpool-comics.jpg" alt="Photo 1" class="composition__photo composition__photo--p1" />
                        <img src="marvel-what-if-1.jpg" alt="Photo 2" class="composition__photo composition__photo--p2" />
                        <img src="Men-in-black.jpg.webp" alt="Photo 3" class="composition__photo composition__photo--p3" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">
            <!-- Section content here... -->
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <a href="https://en.wikipedia.org/wiki/Thor_(Marvel_Cinematic_Universe)">Thor</a>
                        </h3>
                        <p class="feature-box__text">
                            The powerful but arrogant god Thor is cast out of Asgard to live amongst humans in Midgard (Earth), where he soon becomes one of their finest defenders.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <a href="https://en.wikipedia.org/wiki/Tony_Stark_(Marvel_Cinematic_Universe)">Iron Man</a>
                        </h3>
                        <p class="feature-box__text">
                            After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil. He died in Avenger:Endgame.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <a href="https://en.wikipedia.org/wiki/Captain_America)">Captain America</a>
                        </h3>
                        <p class="feature-box__text">
                            Steve Rogers, a rejected military soldier, transforms into Captain America after taking a dose of a "Super-Soldier serum". He is the Leader of the Team.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <a href="https://en.wikipedia.org/wiki/Thanos_(Marvel_Cinematic_Universe)">Thanos</a>
                        </h3>
                        <p class="feature-box__text">
                            Thanos is a Supervillain appearing in American comic books published by Marvel Comics. Superhuman Strength, Speed, Stamina, Durability, and Agility.
                    </div>
                </div>
            </div>
        </section>

        <section class="section-tours" id="section-tours">
            <!-- Section content here... -->
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Most popular movies</h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">&nbsp;</div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">Black Panther (2018)</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>96% TOMATOMETER</li>
                                    <li>Chadwick Boseman</li>
                                    <li>Running time : 134 minutes</li>
                                    <li> Third-highest-grossing Film</li>
                                    <li>Box office: $1.348 billion</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$57</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">&nbsp;</div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">Avergers: Endgame (2019)</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>94% TOMATOMETER</li>
                                    <li>Supervillian Thanos</li>
                                    <li>Running Time : 181 minutes</li>
                                    <li>Highest-grossing Film </li>
                                    <li>Box office : $2.798 billion</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$97</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">&nbsp;</div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">The Iron Man (2008)</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>93% TOMATOMETER</li>
                                    <li>Robert Downey Jr. as Stark</li>
                                    <li>Running time : 126 minutes</li>
                                    <li> 81st Academy Awards Winner</li>
                                    <li>Box office : $585.8 million</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$77</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="https://www.marvel.com/movies" class="btn btn--green">Discover All Movie's</a>
            </div>
        </section>

        <section class="section-stories">
            <!-- Section content here... -->
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="video.mp4" type="video/mp4" />
                    <source src="video.mp4" type="video/mp4" />
                    Your browser doesn't supporrt this!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">We make people genuinely happy</h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="avengers-endgame-best-reviewed-marvel-movies.jpg.webp" alt="ptour" class="story__img" />
                        <figcaption class="story__caption">Avengers</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            It is one of the Best-Marvel Movie
                        </h3>
                        <p>
                            Endgame, which serves as an end piece to the decade-long era of the MCU, provided the kind of satisfying conclusion that viewers and critics hoped for. With a 96 percent Rotten Tomatoes rating, it’s the second-best reviewed of the 22 films. Critics who
                            rated the film commented on its success as both a dramatic final act and a joyful, entertaining three hours of cinema.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="thor-ragnarok-best-reviewed-marvel-movies.jpg" alt="ptour" class="story__img" />
                        <figcaption class="story__caption">Thor: Ragnarok</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            The Thunder-God Of Odin, king of Asgard
                        </h3>
                        <p>
                            In the first two Thor films, as well as his appearances in the first two Avengers movies, Chris Hemsworth’s Thor — all hair and muscle and sternness — took his role as a demigod seriously. But director Taika Waititi rewrote the titular character’s personality
                            in Thor’s third installment to step into a sillier side.The movie is a comedy, often breaking the third wall while Hemsworth’s character isn’t afraid to poke fun of himself and it’s refreshing.
                        </p>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="https://en.wikipedia.org/wiki/List_of_Marvel_Cinematic_Universe_films" class="btn-text">Read all stories &rarr;</a>
            </div>
        </section>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form class="form" method="post" action="#">
                            <!-- Form content here... -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <!-- Footer content here... -->
        <div class="footer__logo-box">
            <img src="logomarvel.jpg" alt="Full logo" class="footer__logo" />
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="https://github.com/Subhraneel77" class="footer__link">Company</a>
                        </li>
                        <li class="footer__item">
                            <a href="https://www.linkedin.com/in/subhraneel-778/" class="footer__link">Contact</a>
                        </li>
                        <li class="footer__item">
                            <a href="https://subhraneel77.github.io/todolist/" class="footer__link">Carrers</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Privacy Policy</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyrighht">
                    Explore the Marvel Universe.<br /> Designed by Subhraneel Haldar.<br /> I have made this Website for Exploring the Marvel Universe and Watching the Popular Movies.
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="popup">
        <!-- Popup content here... -->
        <div class="popup__content">
            <div class="popup__left">
                <img src="_BlackPanther.jpg" alt="four photo" class="popup__img" />
                <img src="endgame.jpg" alt="four photo" class="popup__img" />
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">
                    Start buying movie
                </h2>
                <h3 class="heading-tertiary u-margin-bottom-small">
                    Important &ndash; Please read the terms before buying
                </h3>
                <p class="popup__text">
                    By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow
                    any of your minor dependents to use this site. You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright
                    laws). You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.
                </p>
                <a href="https://www.marvel.com/movies" class="btn btn--green">Book Now</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
