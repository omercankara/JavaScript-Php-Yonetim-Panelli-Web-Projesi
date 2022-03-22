$().ready(function () {
        $("#sliderButton").click(function(e){
                e.preventDefault()
               $('#sliderEkleContaineri').fadeIn();
                $('#kategoriEkleContaineri').fadeOut();
                 $('#tanitimEkleContaineri').fadeOut();
                  $('#referansEkleContaineri').fadeOut(); 
        })

        $("#kategoriButton").click(function(e){
                 e.preventDefault()
                 $('#kategoriEkleContaineri').fadeIn();
                $('#sliderEkleContaineri').fadeOut();   
                 $('#tanitimEkleContaineri').fadeOut();
                  $('#referansEkleContaineri').fadeOut(); 
        })

        $("#tanitimEkleButton").click(function(e){
                 
                 e.preventDefault()
                $('#sliderEkleContaineri').fadeOut();
                $('#kategoriEkleContaineri').fadeOut();
                $('#tanitimEkleContaineri').fadeIn();
                 $('#referansEkleContaineri').fadeOut();  
        })

         $("#referansEkleButton").click(function(e){
                e.preventDefault()
                $('#sliderEkleContaineri').fadeOut();
                $('#kategoriEkleContaineri').fadeOut();
                $('#tanitimEkleContaineri').fadeOut();
               $('#referansEkleContaineri').fadeIn();  
        })

        $('body').on("click",".veri",function(e){
         e.preventDefault()
                 const mybilgi = $(this).attr("id"); //attr ile istenilen özelligi al   
                        $.ajax({
                                type: 'POST',
                                url:'yonetim/veriler.php',
                                data:{'mybilgi':mybilgi}, // id bilgisini gönder
                                success:function(myresp){
                                        $('#newDataTest').html(myresp) //dönen veriyi bas
                                      
                                }
                        })                                
        })

        $("#sliderEkleForm").on("submit",function(e){
                e.preventDefault()
    $('#sliderListCont').load("sliderList.php");
        const form_data = new FormData(this) //Formu Al
        $.ajax({    //Ajaxı Başlat
                type:"post",
                url:"../database.php", //form verilerini databaseye yolla 
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#basariliAlan").fadeIn(100).text(response.output).fadeOut(3000);
                        $('#sliderListCont').load("sliderList.php");
                }
        })
        })


        $('body').on("click",".sil",function(e){
               
                const idBilgi = $(this).attr("id")
                e.preventDefault()
                $('#sliderListCont').load("sliderList.php");
                console.log(idBilgi)
                $.ajax({
                        type:"POST", //my idid yolla databaseye post olarak
                        url:"../database.php",
                        data:{'idBilgi':idBilgi},
                        succes:function(response){
                             
                        }
                })
         })


               $('body').on("click",".kategoriSil",function(e){
                e.preventDefault()
                const kateno = $(this).attr("id")
                console.log(kateno)
                $.ajax({
                        type:"POST", //my idid yolla databaseye post olarak
                        url:"../database.php",
                        data:{'kateno':kateno},
                        succes:function(response){
                                
                        }
                })
         })


        $("#tanitimEklemeForm").on("submit",function(e){
        e.preventDefault();
        $('#tanitimEkleContaineri').load("tanitimEkle.php")
      
        const form_data = new FormData(this) //Formu Al
        $.ajax({    //Ajaxı Başlat
                type:"post",
                url:"../database.php", //form verilerini databaseye yolla 
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#basariliAlan").fadeIn(100).text(response.output).fadeOut(3000);
                         $('#tanitimEkleContaineri').load("tanitimEkle.php")
                        
                }
        })
})

$('body').on("click",".promotionDelete",function(e){
        e.preventDefault()
          $('#tanitimEkleContaineri').load("tanitimEkle.php")
        const promotionİd = $(this).attr("id")
        console.log(promotionİd)
        $.ajax({
                type:"POST",
                url:"../database.php",
                data:{'promotionİd':promotionİd},
                succes:function(response){
                        $('#tanitimEkleContaineri').load("tanitimEkle.php")
                }
        })
})


        $("#kategoriEkleForm").on("submit",function(e){
        e.preventDefault();
        const form_data = new FormData(this) //Formu Al
        $.ajax({    //Ajaxı Başlat
                type:"post",
                url:"../database.php", //form verilerini databaseye yolla 
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#basariliAlan").fadeIn(100).text(response.output).fadeOut(3000);
                        $('#kategoriEkleContaineri').load("kategoriEkle.php")
                }
        })
})


$("#icerikEkleForm").on("submit",function(e){
  e.preventDefault();

        const form_data = new FormData(this) //Formu Al
        $.ajax({    //Ajaxı Başlat
                type:"post",
                url:"../database.php", //form verilerini databaseye yolla 
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                        
                        
                }
        })
})


        $("#referansEklemeForm").on("submit",function(e){
        e.preventDefault();
        const form_data = new FormData(this) //Formu Al
        $.ajax({    //Ajaxı Başlat
                type:"post",
                url:"../database.php", //form verilerini databaseye yolla 
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#basariliAlan2").fadeIn(100).text(response.output).fadeOut(3000);
                }
        })
})




})