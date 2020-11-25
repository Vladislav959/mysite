var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/ru/index.php',
'/ru/',
'/favicon.ico',
'/app.js',
'/app.css',
'/animate.css',
'/mylogo.png',
'/ru/sbc/index.php',
'/ru/sbc/',
'/ru/sbc/style.css',
'/ru/portfolio/',
'/ru/portfolio/index.php',
'/ru/portfolio/style.css',
'/ru/sbc/sbc_logo.png',
'/geometos.ttf',
'/days.ttf',
'/bebasc.ttf'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        return cache.addAll(urlsToCache);
      })
  );  
});


//Add the site to cache.

self.addEventListener('activate', (event) => {
  var cacheKeeplist = PRECACHE;

  event.waitUntil(
    caches.keys().then((keyList) => {
      return Promise.all(keyList.map((key) => {
        if (cacheKeeplist.indexOf(key) === -1) {
          return caches.delete(key);
        }
      }));
    })
  );
});

//Show all site offline.
self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request).catch(function() {
      return caches.match(event.request);
    })
  );
});