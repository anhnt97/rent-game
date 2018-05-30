(function () {

    var app = angular.module('Store', []);

    app.controller('PanelController', function () {
        this.tab = 'description';

        this.setTab = function (tab) {
            this.tab = tab;
        };

        this.isSelected = function (tab) {
            return this.tab === tab;
        }
    });

})();