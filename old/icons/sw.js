var cacheName = 'mysite-v4';
var appShellFiles = [
  '/ru/index.php',
'/style.css',
'/geometos.ttf',
'/days.ttf',
'/bebasc.ttf',
'/mylogo.png',
'/favicon.ico',
'/app.js',
'/app.css',
'/animate.css',
'/ru/',
'/apple-touch-icon.png',
'/ru/manifest.json',
'/icons/icon-512x512.png',
'/ru/portfolio/',
'/ru/portfolio/index.php',
'/ru/portfolio/style.css'
];
var contentToCache = appShellFiles;

// Installing Service Worker
self.addEventListener('install', function(e) {
  console.log('[Service Worker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[Service Worker] Caching all: app shell and content');
      return cache.addAll(contentToCache);
    })
  );
});
// Fetching content using Service Worker
self.addEventListener("activate", function(e) {
    console.log("Alloy service worker activation");
    e.waitUntil(
        caches.keys().then(function(keyList) {
            return Promise.all(
                keyList.map(function(key) {
                    if (key !== cacheName) {
                        console.log("Alloy old cache removed", key);
                        return caches.delete(key);
                    }
                })
            );
        })
    );
    return self.clients.claim();
});
self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(cacheName) {
          // Return true if you want to remove this cache,
          // but remember that caches are shared across
          // the whole origin
        }).map(function(cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});