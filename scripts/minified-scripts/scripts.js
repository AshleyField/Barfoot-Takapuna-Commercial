$(function(){var o="closed";$(".bars").on("click",function(e){var n=$(".mobile-nav").data("nav");e.stopPropagation(),"close"==n?($(".mobile-nav").addClass("nav-open").data("nav","open"),$(".bars>i").first().removeClass("fas fa-bars").addClass("fas fa-times")):($(".mobile-nav").removeClass("nav-open").data("nav","close"),$(".bars>i").removeClass("fas fa-times").addClass("fas fa-bars"),$(".mobile-nav").removeClass("nav-sub-menu-open"),$(".mobile-nav .dropdown-content").removeClass("dropdown-content-open"),$(".mobile-nav .dropdown-content").addClass("dropdown-content-closed"),o="closed")}),$(".mobile-nav .dropbtn").on("click",function(){"closed"==o?($(".dropdown-content").addClass("dropdown-content-open"),$(".dropdown-content").removeClass("dropdown-content-closed"),$(".mobile-nav").addClass("nav-sub-menu-open"),o="open"):($(".dropdown-content").removeClass("dropdown-content-open"),$(".dropdown-content").addClass("dropdown-content-closed"),$(".mobile-nav").removeClass("nav-sub-menu-open"),o="closed")});var e="closed";$(".desktop-nav .dropbtn").on("click",function(){"closed"==e?($(".dropdown-content").addClass("desktop-sub-nav-open"),$(".dropdown-content").removeClass("desktop-sub-nav-closed"),e="open"):($(".dropdown-content").removeClass("desktop-sub-nav-open"),$(".dropdown-content").addClass("desktop-sub-nav-closed"),$(".mobile-nav").removeClass("nav-sub-menu-open"),e="closed")});new Swiper(".swiper-container",{loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",dynamicBullets:!0},autoplay:{delay:3e3,disableOnInteraction:!0},speed:1800});var n={lat:$(".property-map").data("lat"),lng:$(".property-map").data("lng")},a=L.map("property-map",{scrollWheelZoom:!1}).setView(n,17);L.tileLayer("https://api.mapbox.com/styles/v1/mapbox/light-v9/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiYXNoZXlmaWVsZCIsImEiOiJjamtrZXlvNnMwZTg3M3FwYzAxbGNqYTA4In0.AyMC7APOvh72_Q2evO5VTQ").addTo(a),L.marker(n).addTo(a).bindPopup("<p>"+$(".property-map").data("address")+"</p>").addTo(a),a.on("click",function(){a.scrollWheelZoom.enabled()?a.scrollWheelZoom.disable():a.scrollWheelZoom.enable()})});
//# sourceMappingURL=scripts.js.map