let cacheName = 'notas';

let fileToCache = [
    './',
    'assets/css/bootstrap.min.css',
    'assets/css/style.css',
    'assets/js/array.observe.polyfill.js',
    'assets/js/object.observe.polyfill.js',
    'assets/js/script.js'
];

self.addEventListener('install', function (e) {
    console.log('[ServiceWorker] Installing');
    e.waitUntil(
        caches.open(cacheName)
            .then(function (cache) {
                console.log('[ServiceWorker] Caching app core');
                return cache.addAll(fileToCache);
            })
    );
});

self.addEventListener('activate', function (e) {
    console.log('[ServiceWorker] Activating');
    e.waitUntil(
        caches.keys().then(function (keyList) {
            return Promise.all(keyList.map(function (key) {
                if (key !== cacheName) {
                    console.log('[ServiceWorker] Removing old cache');
                    return caches.delete(key);
                }
            }));
        })
    );
});

self.addEventListener('fetch', function (e) {
    console.log('[ServiceWorker] Fetching', e.request.url);
    e.respondWith(
        caches.match(e.request).then(function (response) {
            return response || fetch(e.request);
        })
    );
});

//This is a event that can be fired from your page to tell the SW to update the offline page
self.addEventListener('refreshOffline', function(response) {
    return caches.open(cacheName).then(function(cache) {
        console.log('[PWA Builder] Offline page updated from refreshOffline event: '+ response.url);
        return cache.put(fileToCache, response);
    });
});