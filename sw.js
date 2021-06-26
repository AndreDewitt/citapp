const CACHE_NAME = 'cache_citapp_v4',
urlsToCache = [
    './',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap',
    'https://fonts.googleapis.com/icon?family=Material+Icons',
    './logo-citapp_1024.png',
    './logo-citapp_512.png',
    './logo-citapp_128.png',
    './logo-citapp_64.png',
    './logo-citapp_32.png',
    './logo-citapp_16.png',
    './public/css/modal.css',
    './public/css/header.css',
    './public/css/consumidor-filtrar.css',
    './public/css/consumidor-informacion.css',
    './public/css/horario.css',
    './public/css/menu.css',
    './public/css/cita.css',
    './public/css/login.css',
    './public/css/scrollbar.css',
    './public/css/framework-2.0.css',
    './bienvenida.php'
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