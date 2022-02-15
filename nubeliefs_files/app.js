var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "nubeliefs_pages/main.php"
    })
    
    .when("/contact_us", {
        templateUrl : "nubeliefs_pages/contact_us.php"
    })
    
    .when("/random_thoughts", {
        templateUrl : "nubeliefs_pages/random_thoughts.php"
    })
    .when("/dreams_story", {
        templateUrl : "nubeliefs_pages/dreams_story.php"
    })
    
    .when("/youtube_journey", {
        templateUrl : "nubeliefs_pages/youtube_journey.php"
    })

    .when("/news", {
        templateUrl : "nubeliefs_pages/news.php"
    })

    .when("/personal_blog", {
        templateUrl : "nubeliefs_pages/personal_blog.php"
    })

    .when("/technology_blog", {
        templateUrl : "nubeliefs_pages/technology_blog.php"
    })

    ;
});

//Microsoft Clarity - Google Analytics
(function (c, l, a, r, i, t, y) {
    c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
    t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
})(window, document, "clarity", "script", "adpinvtq7u");

//Global site tag (gtag.js) - Google Analytics
window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-F96R1MZMEQ');

