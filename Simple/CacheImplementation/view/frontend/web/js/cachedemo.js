define(['jquery'],function($){
    'use strict';
    
    return function(config,element){
        /*$.get('/cacheimplementation/index/index', function(result){
            element.innerHTML =result["randomString"];

        });*/
        
        var key ="simple_cache";
        
        if(window.sessionStorage.getItem(key)){
             element.innerHTML = window.sessionStorage.getItem(key);
        }else{
             $.get({
           url: "/cacheimplementation/index/index",
           success: function(result){
               window.sessionStorage.setItem(key,result["randomString"]);
                element.innerHTML =result["randomString"];
           }
       });
        }
      
    }
    
})