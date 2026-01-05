const CACHE_NAME = 'naga-law-v2';
const urlsToCache = [
  '/',
  '/index.html',
  '/tools.html',
  '/rental.html',
  '/opinion.html',
  '/notice.html',
  '/bail.html',
  '/cost.html',
  '/case.html',
  '/court.html',
  '/startup.html',
  '/legal.html',
  '/favicon.png'
];

self.addEventListener('install', e => {
  e.waitUntil(caches.open(CACHE_NAME).then(cache => cache.addAll(urlsToCache)));
  self.skipWaiting();
});

self.addEventListener('activate', e => {
  e.waitUntil(caches.keys().then(keys =>
    Promise.all(keys.map(k => k !== CACHE_NAME && caches.delete(k)))
  ));
  self.clients.claim();
});

self.addEventListener('fetch', e => {
  e.respondWith(
    caches.match(e.request).then(res => res || fetch(e.request))
  );
});
