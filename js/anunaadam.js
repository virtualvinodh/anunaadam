$(document).ready(function () {

	$(document).tooltip();
	$(document).ready(function() {  $("#txtbox").trigger("keyup");    });


    $("#menu-left").menu();
    $("#menu-right").menu();
    
    $("#slider").slider({
    
    min: 10,
    max: 30,
    value:20,
    change: function() { 
    
    $("#ipa-text").css("font-size",$("#slider").slider("value")); 
    
    }
    

    });
    
    $("#output").buttonset();

    $("#language").buttonset();
    
    $("#method").buttonset();

    $("#change").button();
    
    $("#print").button();
    $("#txt").button();
    
    $("#print").click(function() {
    
    window.print();
    
    });
    
    
    
    $("#font").change(function() {
        
	$("#ipa-text").css("font-family",$("#font").val());
	    
    });
    
    
//     $(document.body).on("mouseenter", "#ipa-text",
//     
//     function(){
//     
//     $(".ipa-word").each(function(index) {
//         
//    	$(this).tooltip();
//     
//     });
//     
//     });
    
    $(document.body).on("mouseenter", ".ipa-word",
    
    function() {
    
    $(this).tooltip();
    
    $(this).css("background-color","#a6c9e2");
    

    });
    
    $(document.body).on("mouseleave", ".ipa-word",
    
    function() {
        
    $(this).css("background-color","");
    

    });
    
    $("#TI, #IT, #IRB, #TRB").change(function() {
    
    $("#txtbox").trigger("keyup");
    
    });
    
    $("#txtbox").keyup(function() {
    
//    alert($("#txtbox").val()+" vinodh");

	if($("#lang-trans").val() == "IPA") {
    
     $.post("api",
            {
              text: $("#txtbox").val(),     
              tooltip: $('input[name=output]:checked').val(),  
              method:  $('input[name=method]:checked').val()       
            },
            
            function(data,status){
            
            $( "#ipa-text" ).empty().append( data ); //.replace(/\u000A/g,"<br/>")
            
            
                 });
    }
    
    else {
    
     $.post("api",
            {
              text: $("#txtbox").val(),     
              target:$("#lang-trans").val(),  
              tooltip: $('input[name=output]:checked').val(),  
            },
            
            function(data,status){
            
            $( "#ipa-text" ).empty().append( data ); //.replace(/\u000A/g,"<br/>")
            
            
                 });
                 
    if($("#lang-trans").val() == "Grantha") {
    
    $("#ipa-text").css("font-family","e-Grantamil");
    
    }
                 
        
    }
                 
     $.post("api",
            {
              text: $("#txtbox").val()           
            },
            
            function(data,status){
                        
            $.post("/session", {
    	        varb: 'text',
        	    vale: data
        	}, function (datas, status) { });            
            
                 });
                 

            });

	$("#lang-trans").change(function() {
	
	//alert($("#lang-trans").val());
	$("#txtbox").trigger("keyup");
	
	});

    $("#narrow,#broad").change(function () {
    
    $("#txtbox").trigger("keyup");
    
    
    });


    $("#english,#tamil").change(function () {
        
    	lan = $(this).val();
    	    	
        $.get("/session", {
            varb: 'lang',
            vale: lan
        }, function (data, status) {}

        );

		$.get("/translation", {
					
					txt: $("#txt").val(),
					lang: lan
					}, function(data,status) { 
					
						$("#txt").val(data);
					
					});     
					
		$.get("/translation", {
					
					txt: $("#print").val(),
					lang: lan
					}, function(data,status) { 
					
						$("#print").val(data);
					
					});   	
		
		$("#lang-trans option").each(function(i) {
		
					var elm = $(this);
					
					$.get("/translation", {
					
					txt: $(this).text(),
					lang: lan
					}, function(data,status) { 
					
						elm.text(data);
					
					});
		 
		});
						   
        
		$(".uiTran").each(function(index) {
		
					var elm = $(this);
					
					$.get("/translation", {
					
					txt: $(this).text(),
					lang: lan
					}, function(data,status) { 
					
						elm.text(data);
					
					});
									    
			    });

	});                 
                 


});