

        $(document).ready(function() {
            
            pageSetUp();

            var $registerForm = $("#smart-form-register").validate({
    
                // Rules for form validation
                rules : {
                    username : {
                        required : true
                    },
                    email : {
                        required : true,
                        email : true
                    },
                    password : {
                        required : true,
                        minlength : 3,
                        maxlength : 20
                    },
                    passwordConfirm : {
                        required : true,
                        minlength : 3,
                        maxlength : 20,
                        equalTo : '#password'
                    },
                    adi : {
                        required : true
                    },
                    soyadi : {
                        required : true
                    },
                    cinsiyet : {
                        required : true
                    },
                    sehir : {
                        required : true
                    },
                    dd : {
                        required : true
                    },
                    sonis : {
                        required : true
                    },
                    uni : {
                        required : true
                    },
                    terms : {
                        required : true
                    }
                },
    
                // Messages for form validation
                messages : {
                    login : {
                        required : 'Please enter your login'
                    },
                    email : {
                        required : 'Please enter your email address',
                        email : 'Please enter a VALID email address'
                    },
                    password : {
                        required : 'Please enter your password'
                    },
                    passwordConfirm : {
                        required : 'Please enter your password one more time',
                        equalTo : 'Please enter the same password as above'
                    },
                    adi : {
                        required : 'Please select your first name'
                    },
                    soyadi : {
                        required : 'Please select your last name'
                    },
                    cinsiyet : {
                        required : 'Please select your gender'
                    },
                    sehir : {
                        required : 'Please select your city'
                    },
                    dd : {
                        required : 'Please select your birthday'
                    },
                    sonis : {
                        required : 'Please write your recent work experience'
                    },
                    uni : {
                        required : 'Please write your University name!'
                    },
                    terms : {
                        required : 'You must agree with Terms and Conditions'
                    }
                },
    
                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });
    

        
        })

