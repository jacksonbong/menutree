/*
 * JQuery menutreeJs 
 *
 * email: bongze9@gmail.com
 * Date: 2019-8-5
 */
(function( $ ){
  
	$.fn.menutree = function( options ){
	
		  var settings = $.extend({
			align: 'horizontal',
			layer : false,
			arrowright:"",
			data: false,
			target: false,
		  }, options );
		  
		   var  html = "";
			/** loop menu to append css**/
		   function loopmenu(length, menu){
			  for (var z = 0; z < length;z++){
					var menu_ = menu.children[1].children[z];
					console.log('menu2',menu_);
					if (menu_.children.length > 1 ) {
						menu_.children[1].className ="menu2";
						console.log('menu2',menu_.children[1]);
						var menu__len = menu_.children[1].children.length;
						if (menu_.children[1].children) {
							loopmenu(menu__len,menu_);
						}
					} 
				}
			  
			}
			 /** loop data to append html**/ 
		   function loopdata (data){
				var htmlul="";
			
				  htmlul += "<ul>"
				  for (var y in data) {
					  htmlul +="<li><a href='javascript:void(0)'>" + (jQuery.type(settings.data[y]) == 'object' ? y : data[y])+"</a>";
						if (jQuery.type(data[y]) == 'object' || $.isArray(data[y])) {
							console.log('ulloop',loopdata(data[y]));
							htmlul += loopdata(data[y]);
						}
				  }
				  
				  htmlul += "</li></ul>"
				  console.log('ul',htmlul);
				return htmlul;
		   }
		   /** init function**/ 
		   var init = function(obj) {
				  var that = obj;
				  console.log(that);
				  that.find('ul').attr("hidden","hidden");
				  
				  if (settings.layer== true) {
					  console.log(that,"that obj");
					  that.bind('layercss',function(){  
					
						console.log($(this));
						if (settings.align =="vertical") {
						   that[0].className = "verticalmenulist";
						} else {
						 that[0].className = "menulist";
						}
						
						 for (var i = 0; i < that[0].children.length;i ++){
							var menu1 = that[0].children[i];
							if (menu1.children.length > 1 ) {
								if (settings.align =="vertical") {
									menu1.children[1].className = "verticalmenu";
								} else {
									menu1.children[1].className ="menu1";
								}
								
								menu2len = menu1.children[1].children.length;
								console.log(menu2len);
								loopmenu(menu2len,menu1);
								
							} 
						}
					});
					
					that.trigger('layercss');
				  } 
				  console.log('obj',that);
				 that.find('li').on('mouseenter',function(event){
					var menu1 = $(this)[0].children[1];
					
					if (menu1) {
						var menu2len = menu1.children.length;
						menu1.hidden = false;
						for (var x = 0; x < menu2len; x ++) {
							var menu2sublen = menu1.children[x].children.length;
							if (menu2sublen > 1) {
								var menu2 = menu1.children[x];
								if ((menu2.children[0].outerHTML).indexOf ('</span>') > -1) {
									
								} else {
									splitouterhtml = (menu2.children[0].outerHTML).split("</a>");
									menu2.children[0].outerHTML = splitouterhtml[0] + settings.arrowright;
									
								}
							}
						}
					}
				}).on('mouseleave',function(){
					var menu1 = $(this)[0].children[1];
					if (menu1) {
						menu1.hidden = true;
					}
				});

		  }
		  
		   /** chcek id data and target is not false**/ 
		  if (settings.data != false && settings.target != false) {
			
			  
			  for (var i in settings.data) {
				  html +="<li><a href='javascript:void(0)'>" + i +"</a>";
				  if (jQuery.type(settings.data[i]) == 'object' || $.isArray(settings.data[i])) {
					  html += loopdata(settings.data[i]);
				  }
				  
			  }
			  html+= "</li>";
			(settings.target).append(html);
			
			init(settings.target);
		
		  } else {
			  console.log('hi');
			  init($(this));
		  }
		}
	}( jQuery ));