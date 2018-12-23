$(function(){
  $("#first_tag").on("change", function(){


    if($(this).val() == '파트작업'){
      typeChoice($(this).val());
      //$("#second_tag").removeAttr("disabled");

    } 
    else if($(this).val() == '서버작업'){
      typeChoice1($(this).val());
      //$("#second_tag").removeAttr("disabled");
    } 
    else if($(this).val() == '일반업무'){
      typeChoice2($(this).val());
      //$("#second_tag").removeAttr("disabled");
    }
    else if($(this).val() == '장애업무'){
      typeChoice3($(this).val());
     //$("#second_tag").removeAttr("disabled");
    }
     else{
      $("#second_tag").empty();

      
    } 
      
  });
    
    
  
  function typeChoice(){
      var part = ["파트 제거","파트 증설","파트 용도 변경"];
        
        $("#second_tag").empty();
        for(var i=0; i< part.length; i++){
        $("#second_tag").append('<option value="'+part[i]+'">'+part[i]+'</option>');
      }
  }
   function typeChoice1(){
      var server = ["서버 용도 변경","서버 회수","서버 투입"];
        
        $("#second_tag").empty();
        for(var i=0; i< server.length; i++){
        $("#second_tag").append('<option value="'+server[i]+'">'+server[i]+'</option>');
      }
  }
   function typeChoice2(){
      var normal = ["일반 업무"];
        
        $("#second_tag").empty();
        for(var i=0; i< normal.length; i++){
        $("#second_tag").append('<option value="'+normal[i]+'">'+normal[i]+'</option>');
      }
  }
  function typeChoice3(){
      var errors = ["파트 교체(장애)"];
        
        $("#second_tag").empty();
        for(var i=0; i< errors.length; i++){
        $("#second_tag").append('<option value="'+errors[i]+'">'+errors[i]+'</option>');
      }
  }


});




