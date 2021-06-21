const CACHE_NAME = 'cache_citapp_v1',
urlsToCache = [
    './',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap',
    'https://fonts.googleapis.com/icon?family=Material+Icons',
    './Logo-Pixki_1024.png',
    './Logo-Pixki_512.png',
    './Logo-Pixki_128.png',
    './Logo-Pixki_64.png',
    './Logo-Pixki_32.png',
    './Logo-Pixki_16.png'
]

self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache => {
            return cache.addAll(urlsToCache)
            .then(() => self.skipWaiting())
        })
        .catch(err => console.log('Fallo el registro en cache', err))
    )
})

self.addEventListener('activate', e => {
    const cacheWhiteList = [CACHE_NAME]
    
    e.waitUntil(
        caches.keys()
        .then(cacheNames => {
            cacheNames.map(cacheName => {
                if(cacheWhiteList.indexOf(cacheName) === -1) {
                    return caches.delete(cacheName)
                }                
            })
        })
        .then(() => self.clients.claim())
    )
})

self.addEventListener('fetch', e => {
    e.respondWith(
        caches.match(e.request)
        .then(res => {
            if(res) {
                return res
            }
            return fetch(e.request)
        })
    )
})