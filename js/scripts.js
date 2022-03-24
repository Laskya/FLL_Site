  $(document).ready(function() {
	jQuery('a.continue').click(function() {
		jQuery('.content').css('display','none');
		jQuery('.rwd').fadeIn(1000);
		jQuery('body').css('background-color','#000');
	}).css('display','block');
	
  }); 
  
  $(document).ready(function() {
	jQuery('a.back').click(function() {
		jQuery('.rwd').css('display','none');
		jQuery('.content').fadeIn(1000);
	}).css('display','block');
	
  });
 