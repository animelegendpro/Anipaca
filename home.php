<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/_config.php');


error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_API_URL', $api);
$endpoint = '/api/v2/hianime/home';
$apiUrl = BASE_API_URL . $endpoint;

$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if (!$data || !$data['success']) {
    echo "<script>window.location.reload();</script>";
    exit;
}

$data = $data['data'];




?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title><?= $websiteTitle ?> #1 Watch High Quality Anime Online Without Ads</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title"
        content="<?= $websiteTitle ?> #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description"
        content="<?= $websiteTitle ?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords"
        content="<?= $websiteTitle ?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title"
        content="<?= $websiteTitle ?> #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description"
        content="<?= $websiteTitle ?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $websiteTitle ?>">
    <meta property="og:url" content="<?= $websiteUrl ?>/home">
    <meta itemprop="image" content="<?= $banner ?>">
    <meta property="og:image" content="<?= $banner ?>">
    <meta property="og:image:secure_url" content="<?= $banner ?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/styles.min.css?v=<?= $version ?>">
    <link rel="apple-touch-icon" href="<?= $websiteUrl ?>/public/logo/favicon.png?v=<?= $version ?>" />
    <link rel="shortcut icon" href="<?= $websiteUrl ?>/public/logo/favicon.png?v=<?= $version ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $websiteUrl ?>/public/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $websiteUrl ?>/public/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $websiteUrl ?>/public/logo/favicon-16x16.png">
    <link rel="mask-icon" href="<?= $websiteUrl ?>/public/logo/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="icon" sizes="192x192" href="<?= $websiteUrl ?>/public/logo/touch-icon-192x192.png?v=<?= $version ?>">
    <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/new.css?v=<?= $version ?>">
     
    <script>
    setTimeout(function() {
    const cssFiles = [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'
    ];
    const firstLink = document.getElementsByTagName('link')[0];
    cssFiles.forEach(file => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = `${file}?v=<?=$version?>`;
        link.type = 'text/css';
        firstLink.parentNode.insertBefore(link, firstLink);
                });

        // Initialize lazy loading
        if ('loading' in HTMLImageElement.prototype) {
            // Browser supports native lazy loading
            document.querySelectorAll('img').forEach(img => {
                img.loading = 'lazy';
            });
        } else {
            // Fallback for browsers that don't support native lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js';
            script.onload = function() {
                const observer = lozad();
                observer.observe();
            };
            document.body.appendChild(script);
        }
    }, 500);

    document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('loaded');
                            observer.unobserve(entry.target);
                        }
                    });
                });

                const lazyComponents = document.querySelectorAll('.lazy-component');
                lazyComponents.forEach(component => observer.observe(component));
            });
    </script>

    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=67521dcc10699f0019237fbb&product=inline-share-buttons&source=platform" async="async"></script>

    <link rel="stylesheet" href="<?=$websiteUrl?>/src/assets/css/search.css">
    <script src="<?=$websiteUrl?>/src/assets/js/search.js"></script>





</head>

<body data-page="page_home">

<div id="sidebar_menu_bg" class=""></div>
        <?php include('./src/component/header.php'); ?>
        <div class="clearfix"></div>
        
        <?php include('./src/component/slidebar.php'); ?>
     
        <?php include('./src/component/trending.php') ?>

        <div class="share-buttons share-buttons-home">
            <div class="container">
                <div class="share-buttons-block">
                    <div class="share-icon"></div>
                    <div class="sbb-title mr-3">
                        <span>Share <?=$websiteTitle?></span>
                        <p class="mb-0">to your friends</p>
                    </div>
                   <div class="sharethis-inline-share-buttons"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="lazy-component mt-3" data-component="apfc">
            <?php include('./src/component/apfc.php'); ?>
        </div>
        
                                        
        <div id="anime-featured">
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content" class="lazy-component" data-component="main-content">
                    <?php if (isset($_COOKIE['userID'])) {
                        $user_id = $_COOKIE['userID'];
                        $sql = "SELECT * FROM watch_history WHERE user_id = ? ORDER BY id DESC LIMIT 4";
                        $stmt = mysqli_prepare($conn, $sql);
                        mysqli_stmt_bind_param($stmt, "i", $user_id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        if ($result->num_rows > 0) { ?>
                            <section class="block_area block_area_home">
                                <div class="block_area-header">
                                    <div class="float-left bah-heading mr-4">
                                        <h2 class="cat-heading"><i class="fas fa-history mr-2"></i>Continue Watching</h2>
                                    </div>
                                    <div class="float-right viewmore">
                                        <a class="btn" href="/continue-watching">View more<i class="fas fa-angle-right ml-2"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="block_area-content block_area-list film_list film_list-grid">
                                        <div class="film_list-wrap">
                                            <?php while($anime = $result->fetch_assoc()) { ?>
                                                <div class="flw-item">
                                                    <div class="film-poster">
                                                        <div class="tick ltr">
                                                            <?php if (!empty($anime['sub_count'])): ?>
                                                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i><?php echo htmlspecialchars($anime['sub_count']); ?></div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($anime['dub_count'])): ?>
                                                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i><?php echo htmlspecialchars($anime['dub_count']); ?></div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="tick rtl">
                                                            <div class="tick-item tick-eps">Episode <?php echo htmlspecialchars($anime['episode_number']); ?></div>
                                                        </div>
                                                        <img class="film-poster-img lazyload" 
                                                             loading="lazy"
                                                             data-src="<?php echo htmlspecialchars($anime['poster']); ?>"
                                                             src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                                             alt="<?php echo htmlspecialchars($anime['anime_name']); ?>">
                                                        <a class="film-poster-ahref" 
                                                           href="/play/<?php echo htmlspecialchars($anime['anime_id']); ?>?ep=<?php echo htmlspecialchars($anime['episode_number']); ?>"
                                                           title="<?php echo htmlspecialchars($anime['anime_name']); ?>">
                                                           <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                    <div class="film-detail">
                                                        <h3 class="film-name">
                                                            <a href="/play/<?php echo htmlspecialchars($anime['anime_id']); ?>?ep=<?php echo htmlspecialchars($anime['episode_number']); ?>"
                                                               title="<?php echo htmlspecialchars($anime['anime_name']); ?>">
                                                                <?php echo htmlspecialchars($anime['anime_name']); ?>
                                                            </a>
                                                        </h3>
                                                        <div class="fd-infor">
                                                            <span class="fdi-item"><i class="fas fa-play-circle"></i> EP <?= $anime['episode_number'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </section>
                        <?php }
                       
                    } 
                    ?>


        <section class="block_area block_area_category lazy-component" data-component="category">
                  <div class="block_area-header">
                       <div class="float-left bah-heading mr-4">
                           <h2 class="cat-heading">
                                 Latest Episode </h2>
                                              </div>
                          <div class="float-right viewmore">
                           <a class="btn" href="/anime/recently-updated">View more<i class="fas fa-angle-right ml-2"></i></a>
                       </div>
                  <div class="clearfix"></div>
                 </div>

                                  <div class="tab-content">
                <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                <div class="film_list-wrap">
                <?php 
                $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $itemsPerPage = 12;
                $offset = ($currentPage - 1) * $itemsPerPage;

                $json = json_decode(file_get_contents("$api/category/recently-updated"), true);
                if (isset($json['data']['animes']) && is_array($json['data']['animes'])) {
                    $animesToDisplay = array_slice($json['data']['animes'], $offset, $itemsPerPage);
                    foreach ($animesToDisplay as $anime) { ?>
                        <div class="flw-item">
                            <div class="film-poster">
                                <?php if ($anime['rating']) { ?>
                                    <div class="tick ltr" style="position: absolute; top: 10px; left: 10px;">
                                        <div class="tick-item tick-age amp-algn">18+</div>
                                    </div>
                                <?php } ?>
                                <div class="tick ltr" style="position: absolute; bottom: 10px; left: 10px;">
                                    <?php if (!empty($anime['episodes']['sub'])) { ?>
                                        <div class="tick-item tick-sub amp-algn" style="text-align: left;">
                                            <i class="fas fa-closed-captioning"></i> &nbsp;<?=$anime['episodes']['sub']?>
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($anime['episodes']['dub'])) { ?>
                                        <div class="tick-item tick-dub amp-algn" style="text-align: left;">
                                            <i class="fas fa-microphone"></i> &nbsp;<?=$anime['episodes']['dub']?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <img class="film-poster-img lazyload" data-src="<?=$anime['poster']?>" src="<?=$anime['poster']?>" alt="<?=$anime['name']?>">
                                <a class="film-poster-ahref" href="/details/<?=$anime['id']?>" title="<?=$anime['name']?>"></a>
                            </div>
                            <div class="film-detail">
                                <h3 class="film-name"><a href="/details/<?=$anime['id']?>" title="<?=$anime['name']?>"><?=$anime['name']?></a></h3>
                                <div class="fd-infor">
                                    <span class="fdi-item"><?=$anime['type']?></span>
                                    <span class="dot"></span>
                                    <span class="fdi-item"><?=$anime['duration']?></span>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo "<p>No anime data available or invalid structure.</p>";
                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
     </div>
    </section>


                    <section class="block_area block_area_category lazy-component" data-component="category">
                        <div class="block_area-header">

                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">New on <?= $websiteTitle ?></h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/anime/recently-added">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature ">
                                <div class="film_list-wrap">
                                    
                                    <?php
                                    // Fetch JSON data
                                    $json = file_get_contents("$zpi/recently-added");
                                    $json = json_decode($json, true);

                                    // Check if 'results' and 'data' exist
                                    if (isset($json['results']['data']) && is_array($json['results']['data'])) {
                                        $animeList = array_slice($json['results']['data'], 0, 12);
                                        foreach ($animeList as $anime) { ?>
                                            <div class="flw-item">
                                                <div class="film-poster">
                                                    <!-- Age Indicator -->
                                                    <?php if ($anime['adultContent']) { ?>
                                                        <div class="tick ltr" style="position: absolute; top: 10px; left: 10px;">
                                                            <div class="tick-item tick-age amp-algn">18+</div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- Sub and Dub Counts -->
                                                    <div class="tick ltr" style="position: absolute; bottom: 10px; left: 10px;">
                                                        <div class="tick-item tick-sub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-closed-captioning"></i> <?= $anime['tvInfo']['sub'] ?>
                                                        </div>
                                                        <?php if(!empty($anime['tvInfo']['dub'])): ?>
                                                        <div class="tick-item tick-dub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-microphone"></i> <?= $anime['tvInfo']['dub'] ?>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!-- Anime Poster -->
                                                    <img class="film-poster-img lazyload"
                                                        data-src="<?= $anime['poster'] ?>"
                                                        src="<?= $anime['poster']?>"
                                                        alt="<?= $anime['title'] ?>">
                                                    <a class="film-poster-ahref"
                                                        href="/details/<?= $anime['id'] ?>"
                                                        title="<?= $anime['title'] ?>"
                                                        data-jname="<?= $anime['title'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="film-detail">
                                                    <h3 class="film-name">
                                                        <a href="/details/<?= $anime['id'] ?>"
                                                            title="<?= $anime['title'] ?>"
                                                            data-jname="<?= $anime['title'] ?>"><?= $anime['title'] ?></a>
                                                    </h3>
                                                    <div class="fd-infor">
                                                       
                                                        <span class="fdi-item"><?= $anime['tvInfo']['showType'] ?></span>
                                                        <span class="dot"></span>
                                                        <span class="fdi-item"><?= $anime['tvInfo']['duration'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                    <?php }
                                    } else {
                                        echo "<p>No anime data available or invalid structure.</p>";
                                    } ?>

                                </div>
                                <div class="clearfix"></div>
        
                            </div>
                        </div>
                    </section>
                    
                    <section class="block_area block_area_category lazy-component" data-component="category">
                        <div class="block_area-header">

                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Top Upcoming</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/anime/top-upcoming">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature ">
                                <div class="film_list-wrap">
                                    
                                    <?php
                                    // Fetch JSON data
                                    $json = file_get_contents("$zpi/top-upcoming");
                                    $json = json_decode($json, true);

                                    // Check if 'results' and 'data' exist
                                    if (isset($json['results']['data']) && is_array($json['results']['data'])) {
                                        $animeList = array_slice($json['results']['data'], 0, 12);
                                        foreach ($animeList as $anime) { ?>
                                            <div class="flw-item">
                                                <div class="film-poster">
                                                    <!-- Age Indicator -->
                                                    <?php if ($anime['adultContent']) { ?>
                                                        <div class="tick ltr" style="position: absolute; top: 10px; left: 10px;">
                                                            <div class="tick-item tick-age amp-algn">18+</div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- Sub and Dub Counts -->
                                                    <div class="tick ltr" style="position: absolute; bottom: 10px; left: 10px;">
                                                        <?php if(!empty($anime['tvInfo']['sub'])): ?>
                                                        <div class="tick-item tick-sub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-closed-captioning"></i> <?= $anime['tvInfo']['sub'] ?>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php if(!empty($anime['tvInfo']['dub'])): ?>
                                                        <div class="tick-item tick-dub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-microphone"></i> <?= $anime['tvInfo']['dub'] ?>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!-- Anime Poster -->
                                                    <img class="film-poster-img lazyload"
                                                        data-src="<?= $anime['poster'] ?>"
                                                        src="<?= $anime['poster']?>"
                                                        alt="<?= $anime['title'] ?>">
                                                    <a class="film-poster-ahref"
                                                        href="/details/<?= $anime['id'] ?>"
                                                        title="<?= $anime['title'] ?>"
                                                        data-jname="<?= $anime['title'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="film-detail">
                                                    <h3 class="film-name">
                                                        <a href="/details/<?= $anime['id'] ?>"
                                                            title="<?= $anime['title'] ?>"
                                                            data-jname="<?= $anime['title'] ?>"><?= $anime['title'] ?></a>
                                                    </h3>
                                                    <div class="fd-infor">
                                                       
                                                        <span class="fdi-item"><?= $anime['tvInfo']['showType'] ?></span>
                                                        <span class="dot"></span>
                                                        <span class="fdi-item"><?= $anime['tvInfo']['duration'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                    <?php }
                                    } else {
                                        echo "<p>No anime data available or invalid structure.</p>";
                                    } ?>

                                </div>
                                <div class="clearfix"></div>
        
                            </div>
                        </div>
                    </section>
  

<!-- Schedule -->



<?php include('./src/component/schedule.php'); ?>


                
                <div class="lazy-component" data-component="sidenav">
                    <?php include('./src/component/sidenav.php'); ?>
                </div>
                <div class="clearfix"></div>
                                </div>
            </div>
        </div>
        <?php include('./src/component/footer.php'); ?>
        <div id="mask-overlay"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?= $websiteUrl ?>/src/assets/js/app.js"></script>
        <script type="text/javascript" src="<?= $websiteUrl ?>/src/assets/js/comman.js"></script>
        <script type="text/javascript" src="<?= $websiteUrl ?>/src/assets/js/movie.js"></script>
        <link rel="stylesheet" href="<?= $websiteUrl ?>/src/assets/css/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?= $websiteUrl ?>/src/assets/js/function.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="<?= htmlspecialchars($websiteUrl) ?>/src/assets/js/pre-qtip.js"></script>
    </div>
</body>

</html>
