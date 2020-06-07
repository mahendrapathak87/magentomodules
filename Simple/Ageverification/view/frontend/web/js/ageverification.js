define(
			[
                'uiComponent',
				'jquery',
				'Magento_Ui/js/modal/modal'
			],
		function( Component, $, modal ) {
            'use strict';
            
            return Component.extend({
                /*
                * Initialization function for ageverification popup
                */
                initialize: function(config){
                    var isAgeVerificationCookie = this.readAgeverificationCookie();
                    console.log(isAgeVerificationCookie);
                    if(!isAgeVerificationCookie){
                        this.renderAgeverificationPopup(config);
                    }
                },
                /*
                * Opens age verification popup
                */
                renderAgeverificationPopup: function(config){
                    console.log(config);
                    if ($('#ageverification-popup').length) {
						var options = {
							type: 'popup',
							modalClass: 'custom-ageverification-popup',
							responsive: true,
							innerScroll: true,
                            clickableOverlay: false,
							title: config.ageverificationtitle,
							buttons: [
                                {
                                    text: $.mage.__('Confirm'),
                                    class: 'confirm-ageverification',
                                    click: function () {
                                        createAgeconfirmationCookie(config.cookieInterval);
                                        this.closeModal();
                                    }
                                }
                            ]
						};

						var mgsPopup = modal(options, $('#ageverification-popup'));
						$('#ageverification-popup').trigger('openModal');
					}
                },
                
                /*
                * Read age verification cookie
                */
                readAgeverificationCookie: function(){
                    var name = "ageverification" + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var ca = decodedCookie.split(';');
                    for(var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }
            });
            
            /*
            * Create ageverification cookie
             */
            function createAgeconfirmationCookie(cookieInterval){
                var now = new Date();
                var time = now.getTime();
                cookieInterval = parseInt(cookieInterval);
                time += cookieInterval * 3600 * 1000;
                now.setTime(time);
                var cname = "ageverification";
                var cvalue = "1";
                var expires = "expires=" + now.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            };
            
		});

