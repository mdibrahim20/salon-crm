self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('saloncrm-v1').then(function(cache) {
      return cache.addAll([
        '/saloon-crm/public/',
        '/saloon-crm/public/offline.html',
        '/saloon-crm/public/images/icons/icon-192x192.png',
        '/saloon-crm/public/images/icons/icon-512x512.png'
      ]);
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request).catch(function() {
      return caches.match(event.request).then(function(response) {
        return response || caches.match('/saloon-crm/public/offline.html');
      });
    })
  );
});
