jQuery(document).ready(function(){

    jQuery(document).on("click",".save",function(){
    let name=jQuery(".name").val();
    let phone=jQuery(".phone").val();
    let email=jQuery(".email").val();
    let status=jQuery(".status").val();
    if(name ===  ""){
        jQuery('.name').addClass('is-invalid');
    }
    else{
        jQuery('.name').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('.phone').addClass('is-invalid');
    }
    else{
        jQuery('.phone').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('.email').addClass('is-invalid');
    }
    else{
        jQuery('.email').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('.status').addClass('is-invalid');
    }
    else{
        jQuery('.status').addClass('is-valid');
    }

    jQuery.ajax({

    url:"proccess.php",
    type:"post",
    data:{
        'name':name,
        'phone':phone,
        'email':email,
        'status':status,
        'call':"insert",
    },
    success:function(res){
        show();
        jQuery(".msg").html(res);
        jQuery('.name').val('');
        jQuery('.phone').val('');
        jQuery('.email').val('');
        jQuery('.status').val('');
        //jQuery(".msg").fadeOut(1000);
    }

    });

jQuery(document).on("click","#save",function(){
    let name=jQuery("#name").val();
    let phone=jQuery("#phone").val();
    let email=jQuery("#email").val();
    let status=jQuery("#status").val();
    if(name ===  ""){
        jQuery('#name').addClass('is-invalid');
    }
    else{
        jQuery('#name').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('#phone').addClass('is-invalid');
    }
    else{
        jQuery('#phone').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('#email').addClass('is-invalid');
    }
    else{
        jQuery('#email').addClass('is-valid');
    }
    if(name ===  ""){
        jQuery('#status').addClass('is-invalid');
    }
    else{
        jQuery('#status').addClass('is-valid');
    }

    jQuery.ajax({

    url:"proccess.php",
    type:"post",
    data:{
        'name':name,
        'phone':phone,
        'email':email,
        'status':status,
        'call':"insert",
    },
    success:function(res){
        show();
        jQuery(".msg").html(res);
        jQuery('#name').val('');
        jQuery('#phone').val('');
        jQuery('#email').val('');
        jQuery('#status').val('');
        //jQuery(".msg").fadeOut(1000);
        jQuery("#insertModal").modal('hide');
    }

});
});

function show(){
    jQuery.ajax({
        url:"proccess.php",
        type:"POST",
        data:{
            'call':"show"
        },
        success:function(res){
            jQuery(".tableData").html(res);
        }
    });
}
jQuery(document).on("click",".inactive",function(){
    let id= jQuery(this).val();
    jQuery.ajax({
        url:"proccess.php",
        type:"POST",
        data:{
            'call':"active",
            'id':id
        },
        success:function(res){
            alert("Inactive success");
            show();
        }
    });
})

jQuery(document).on("click",".active",function(){
    let id= jQuery(this).val();
    jQuery.ajax({
        url:"proccess.php",
        type:"POST",
        data:{
            'call':"inactive",
            'id':id
        },
        success:function(res){
            alert("Active success");
            show();
        }
    });
});


jQuery(document).on("click",".delete",function(){
    let id= jQuery(this).val();
    jQuery("#mdelete").val(id);
})
jQuery(document).on("click","#mdelete",function(){
    let id= jQuery(this).val();
 jQuery.ajax({
        url:"proccess.php",
        type:"POST",
        data:{
            'call':"delete",
            'id':id
        },
        success:function(res){
            alert("Delete success");
            show();
            jQuery("#deleteModal").modal("hide");
        }
    });
});
});
jQuery(document).on("click",".update",function(){
    let id= jQuery(this).val();


    jQuery.ajax({
        url:"proccess.php",
        type:"POST",
        dataType:"JSON",
        data:{
            'call':"find",
            'id':id
        },
        success:function(res){
        jQuery('.save').hide(); 
        jQuery('.updateinfo').show();
        jQuery('.updateinfo').val(res.student_id);
        jQuery('.name').val(res.name);
        jQuery('.phone').val(res.phone);
        jQuery('.email').val(res.email);
        jQuery('.status').val(res.status);
            
    }
});
})

jQuery(document).on("click",".updateinfo",function(){  
    let id = jquery(this).val();
    let name=jQuery(".name").val();
    let phone=jQuery(".phone").val();
    let email=jQuery(".email").val();
    let status=jQuery(".status").val();

$.ajax({
    url:"proccess.php",
    type:"POST",
    
    data:{
        'id':id,
        'name':name,
        'phone':phone,
        'email':email,
        'status':status,
        'call':'update'
    },
    success:function(res){
        show();
        jQuery('.msg').html(res);
        jQuery('.name').val('');
        jQuery('.phone').val('');
        jQuery('.email').val('');
        jQuery('.status').val('');
        jQuery('.save').show(); 
        jQuery('.updateinfo').hide();
            
    }
});
});
jQuery(document).on("click",".updatem",function(){
let id = jQuery(this).val();
jQuery("#insertModal").modal('show');

jQuery('#updateinfo').show();
jQuery('#save').hide(); 
jQuery.ajax({
    url:"proccess.php",
    type:"POST",
    dataType:"JSON",
    data:{
        'call':"find",
        'id':id
    },
  
    success:function(res){
    
        jQuery('#updateinfo').val(res.student_id);
        jQuery('#name').val(res.name);
        jQuery('#phone').val(res.phone);
        jQuery('#email').val(res.email);
        jQuery('#status').val(res.status);
    }      
});
});
jQuery(document).on("click","#updateinfo",function(){  
    let id = jquery(this).val();
    let name=jQuery("#name").val();
    let phone=jQuery("#phone").val();
    let email=jQuery("#email").val();
    let status=jQuery("#status").val();
    $.ajax({
        url:"proccess.php",
        type:"POST",
        
        data:{
            'id':id,
            'name':name,
            'phone':phone,
            'email':email,
            'status':status,
            'call':'update'
        },
        success:function(res){
            show();
            jQuery('.msg').html(res);
            jQuery('#name').val('');
            jQuery('#phone').val('');
            jQuery('#email').val('');
            jQuery('#status').val('');
            jQuery('#save').show(); 
            jQuery('#updateinfo').hide();
            jQuery("#insertModal").modal('hide');
                
        }
    });
    });
});
