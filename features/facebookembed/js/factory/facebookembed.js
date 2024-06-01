/**
 * facebookembed factory
 */
angular
    .module('starter')
    .factory('Facebookembed', function ($pwaRequest) {
        var factory = {
            value_id: null
        };

        factory.setValueId = function (valueId) {
            factory.value_id = valueId;
            return factory;
        };

        factory.getValueId = function () {
            return factory.value_id;
        }; 

        factory.findAll = function () {
            return $pwaRequest.post('facebookembed/mobile_view/findAll', {
                urlParams: {
                    value_id:  this.value_id              
                },              
                cache: false,
                refresh: true
            });
        };

        return factory;
    });
