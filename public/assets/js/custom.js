(function($){
    $(document).ready(function () {
    // Code belew this     
      
        
    //Add new student Modal show
    
    $('a#student_add_btn').click(function(e) {
        e.preventDefault();
        $('#student_add_modal').modal('show');
    });

     //Add new student Modal show
    
     $('a#student_show_btn').click(function(e) {
        e.preventDefault();
        $('#student_view_modal').modal('show');
    });

    //Add new student Modal show
    
    $('a#student_edit_btn').click(function(e) {
        e.preventDefault();
        $('#student_edit_modal').modal('show');
    });
    
    
    // student store
    
    $(document).on('submit', 'form#add_student_form', function (e) {
        e.preventDefault();
        let name = $('form#add_student_form input[name ="name"]').val();
        let email = $('form#add_student_form input[name ="email"]').val();
        let cell = $('form#add_student_form input[name ="cell"]').val();
        let uname = $('form#add_student_form input[name ="uname"]').val();
    
        let checkMail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    
        if (name ==''|| email ==''|| cell ==''|| uname =='') {
          $('.msg').html('all fields are required');
        } else if(checkMail.test(email)==false) {
            $('.msg').html('Invalid Email Address');  
        }else{
    
            $.ajax({
                url : 'student/store',
                method : "POST",
                data : new FormData(this),
                contentType : false,
                processData : false,
                success : function(data){              
                   $('.msg').html('Success');
                }
    
    
            });
        }
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Code above this 
    });
    })(jQuery)