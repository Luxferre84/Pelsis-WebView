<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="style/stylesorotan.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
        <div class="navbar-sejarah">
            <a href="beranda.php" class="icon-link">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
            </a>
            <span class="nav-item" style="margin-left: 20px; text-align: center;">
                Sorotan
            </span>
        </div>
   

<div class="eventsmain">
    <div class="events">
        <a href="#" class="event-box" id="play-button-2" data-video-id="f-5eGpDg05g">
                <div class="photosvg" id="image-container-2">
                    <img src="" alt="Event Photo" class="event-photo hide-on-play">
                </div>
                <div class="pagewrap hide-on-play"> 
                    <div class="title">Kumenang</div>
                </div>
                <div class="pagewrap hide-on-play"> 
                    <div class="subtitle">5 May 2023</div>
                </div>
                <div class="pagewrap hide-on-play"> 
                    <div class="subtitle2">Symphony Worship</div>
                </div>                
        </a>
        <a href="#" class="event-box" id="play-button-2" data-video-id="sTcQGzpN3PA">
            <div class="photosvg" id="image-container-2">
                <img src="" alt="Event Photo" class="event-photo hide-on-play">
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="title">Trust in God</div>
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="subtitle">5 May 2023</div>
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="subtitle2">Elevation Worship</div>
            </div>                
        </a>

        <a href="#" class="event-box" id="play-button-2" data-video-id="PrVLUvVdU4k">
            <div class="photosvg" id="image-container-2">
                <img src="" alt="Event Photo" class="event-photo hide-on-play">
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="title">TRIBL</div>
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="subtitle">5 May 2023</div>
            </div>
            <div class="pagewrap hide-on-play"> 
                <div class="subtitle2">Maverick City Worship</div>
            </div>                
        </a>
    </div>
</div>






    

</body>

<script>
    document.querySelectorAll('.event-box').forEach(function(box) {
        var videoId = box.getAttribute('data-video-id');
        var thumbnailUrl = 'https://img.youtube.com/vi/' + videoId + '/maxresdefault.jpg';
        box.querySelector('img').src = thumbnailUrl;

        box.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah perilaku default dari anchor

            var videoUrl = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';

            // Ganti konten container gambar dengan iframe YouTube
            var containerId = box.querySelector('.photosvg').id;
            var container = document.getElementById(containerId);
            container.innerHTML = '<iframe width="560" height="315" src="' + videoUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            // Sembunyikan elemen dengan kelas 'hide-on-play' di dalam kotak ini
            var elementsToHide = box.querySelectorAll('.hide-on-play');
            elementsToHide.forEach(function(element) {
                element.classList.add('hidden');
            });
        });
    });
</script>



</html>
