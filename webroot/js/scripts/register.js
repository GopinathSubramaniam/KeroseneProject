'use strict';

var RegisterProtoType = function () {};
var Register = new RegisterProtoType();

Register.doRegister = function (ev) {
    var email = $('#email').val();
    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();

    var data = {
        email: email,
        name: name,
        mobile: mobile
    };
    $.ajax({
        url: '/user.json',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function (res) {
            if (res.statusCode == 'OK') {
                /* sessionStorage.setItem('uid', res.user.id);
                sessionStorage.setItem('name', res.user.name);
                sessionStorage.setItem('email', res.user.email);
                sessionStorage.setItem('mobile', res.user.mobile);
                sessionStorage.setItem('address1', res.user.address1);
                sessionStorage.setItem('address2', res.user.address2);
                sessionStorage.setItem('state', res.user.state);
                sessionStorage.setItem('country', res.user.country); */
                window.location.href = '/';
            }
        },
        fail: function (err) {
            console.log('fail');
        }
    });

};


$('#registerForm').submit(function (ev) {
    ev.preventDefault();
    Register.doRegister();
});