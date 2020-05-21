define([
    'uiComponent',
    'jquery',
    'Magento_Checkout/js/model/resource-url-manager',
    'Magento_Customer/js/model/customer',
    'Magento_Checkout/js/model/quote',
    'mageUtils',
    'Magento_Checkout/js/model/shipping-rate-registry',
    'Magento_Checkout/js/model/shipping-service',
    'mage/storage'
], function(Component, $, resourceUrlManager, customer, quote, utils, rateRegistry, shippingService, storage){
    'use strict';
    
    return Component.extend({
      
        initialize: function(){
             var serviceUrlTotalEstimates,
                 serviceUrlEstimates,
                 payload,
                 cache,
                 address;
            
            address = quote.shippingAddress();
            //cache = rateRegistry.get(address.getCacheKey());
            //console.log(cache);
            payload = JSON.stringify({
                    address: {
                        'postcode': 12345,
                        'country_id': 'en_US'
                    }
                }
            );
           
            $('.estimate-shipping').click(function(){
                shippingService.isLoading(true);
               serviceUrlTotalEstimates = resourceUrlManager.getUrlForTotalsEstimationForNewAddress(quote);
                serviceUrlEstimates = resourceUrlManager.getUrlForEstimationShippingMethodsForNewAddress(quote);
                 //console.log(serviceUrlTotalEstimates);
                 //console.log(serviceUrlEstimates);
                 storage.post(
                    serviceUrlEstimates, payload, false
                ).done(function (result) {
                    //rateRegistry.set(address.getCacheKey(), result);
                    shippingService.setShippingRates(result);
                }).fail(function (response) {
                    shippingService.setShippingRates([]);
                    errorProcessor.process(response);
                }).always(function () {
                    shippingService.isLoading(false);
                });
            })
        }
    });
});