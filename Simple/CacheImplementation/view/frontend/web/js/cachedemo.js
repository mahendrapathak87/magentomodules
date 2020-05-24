define(['jquery'],function($){
    'use strict';
    
    return function(config,element){
        /*$.get('/cacheimplementation/index/index', function(result){
            element.innerHTML =result["randomString"];

        });*/
       $.get({
           url: "/cacheimplementation/index/index",
           cache: true,
           success: function(result){
                element.innerHTML =result["randomString"];
           }
       })
    }
    
})