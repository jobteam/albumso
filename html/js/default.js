defaulJS = {
    init: function () {
        var hei = window.innerHeight;
        $('.bg-over-login').height(hei);
        
        defaulJS.eventListener();
    },
    eventListener: function () {
        
        $(document).on('click', '.btn-login', this.clickLogin);
        $(document).on('click', '.btn-register', this.showFormRegister);
        $(document).on('click', '.btn-back-register', this.hideFormRegister);
    },    
    showFormRegister: function(){
        $('.bg-main-login').hide();
        $('.div-over-register').show();
    },
    hideFormRegister: function(){
        $('.div-over-register').hide();
        $('.bg-main-login').show();        
    },
    clickLogin: function(){
        $('#email-login').addClass('red-error');
        
    }
    
};

$(document).ready(function () {
    defaulJS.init();
});
