// init
$(document).bind("mobileinit", function(){
  $.mobile.ajaxEnabled = false;
  $.mobile.pushStateEnabled = false;
  $.mobile.loadingMessage = '页面载入中';
  $.mobile.pageLoadErrorMessage = '页面载入失败';
});	


$("div[data-role='page']").live('pageshow',function(event,ui){ 
													
    $.ajaxSetup({ cache: false });
	////////////////////////////////////
	
});//$("div[data-role='page']")




function nextnews() {
               $.post('/news/ajax_getnews.php',{pagenum:$('#pagenum').text(),ndir:$('#ndir').text()},function(data){
                            var myjson = '';eval('myjson=' + data + ';');
							if(myjson.info!=''){
								 $(".type-newslist").append(myjson.info);
								 $("#pagenum").text(myjson.pagenum);
								 $('ul').listview('refresh'); 
								}else{
					              return false;
								}
							
							});
}


function ennextnews() {
               $.post('/en/news/ajax_getnews.php',{pagenum:$('#pagenum').text(),ndir:$('#ndir').text()},function(data){
                            var myjson = '';eval('myjson=' + data + ';');
							if(myjson.info!=''){
								 $(".type-newslist").append(myjson.info);
								 $("#pagenum").text(myjson.pagenum);
								 $('ul').listview('refresh'); 
								}else{
					              return false;
								}
							
							});
}



function nextproducts() {
               $.post('/product/ajax_getproducts.php',{pagenum:$('#pagenum').text(),pdir2:$('#pdir2').text(),pdir1:$('#pdir1').text()},function(data){
                            var myjson = '';eval('myjson=' + data + ';');
							if(myjson.info!=''){
								 $("#product-list").append(myjson.info);
								 $("#pagenum").text(myjson.pagenum);
								 $('ul').listview('refresh'); 
								}else{
					              return false;
								}
							
							});
}

function ennextproducts() {
               $.post('/en/product/ajax_getproducts.php',{pagenum:$('#pagenum').text(),pdir2:$('#pdir2').text(),pdir1:$('#pdir1').text()},function(data){
                            var myjson = '';eval('myjson=' + data + ';');
							if(myjson.info!=''){
								 $("#product-list").append(myjson.info);
								 $("#pagenum").text(myjson.pagenum);
								 $('ul').listview('refresh'); 
								}else{
					              return false;
								}
							
							});
}



