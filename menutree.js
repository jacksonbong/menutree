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
		   var alignleftmenu = false;
			/** loop menu to append css**/
		   function loopmenu(length, menu,alignleftmenu){
			  for (var z = 0; z < length;z++){
					var menu_ = menu.children[1].children[z];
					
					if (menu_.children.length > 1 ) {
						if (alignleftmenu) { 
							menu_.children[1].className ="menu2 margin-left";
						} else {
							menu_.children[1].className ="menu2";
						}
						
						var menu__len = menu_.children[1].children.length;
						if (menu_.children[1].children) {
							loopmenu(menu__len,menu_, alignleftmenu);
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
							
							htmlul += loopdata(data[y]);
						}
				  }
				  
				  htmlul += "</li></ul>"
				
				return htmlul;
		   }
		   /** init function**/ 
		   var init = function(obj) {
				  var that = obj;
				  console.log(that);
				  that.find('ul').attr("hidden","hidden");
				  
				  if (settings.layer== true) {
					 
					  that.bind('layercss',function(){  
					
						console.log($(this));
						if (settings.align =="vertical") {
						   that.closest('.container').css({"display":"inline-flex"});
						   that[0].className = "verticalmenulist";
						} else {
						    that[0].className = "menulist";
						}
						 
						// prepend element to front of ul
						that.parent().prepend("<label for='show-menu' class='show-menu'>Show Menu</label><input type='checkbox' id='show-menu' role='button'>");
						
						 for (var i = 0; i < that[0].children.length;i ++){
							var menu1 = that[0].children[i];
							if (menu1.children.length > 1 ) {
								if (settings.align =="vertical") {
									if (navigator.appVersion.indexOf("Chrome/") != -1) {
										menu1.children[1].className = "verticalmenu margin-top";
									} else {
										menu1.children[1].className = "verticalmenu";
									}
								} else {
									console.log(i);
									if (i > 3) {
										alignleftmenu = true;
									}
									menu1.children[1].className ="menu1";
								}
								
								menu2len = menu1.children[1].children.length;
								
								loopmenu(menu2len,menu1,alignleftmenu);
								
							} 
						}
					});
					
					that.trigger('layercss');
				  } 
				
				  that.find('li').on('click',function(event){//mouseenter
					var menu1 = $(this)[0].children[1];
					if (menu1) {
						var menu2len = menu1.children.length;
						
						if (($(this)[0].className).indexOf('selected')>-1){
							$(this)[0].className = "";
							menu1.hidden = true;
							
						} else {
							$(this)[0].className = "selected";
							menu1.hidden = false;
						}
						
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
					return false;
				}).on('mouseenter',function(){
					var menu1 = $(this)[0].children[1];
					if (menu1) {
						var menu2len = menu1.children.length;
						menu1.hidden = false;
						for (var x = 0; x < menu2len; x ++) {
							var menu2sublen = menu1.children[x].children.length;
							if (menu2sublen > 1) {
								var menu2 = menu1.children[x];
								if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 								// some code..
								} else {
								     menu2.className = "selected";
								}
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
			  
			  init($(this));
		  }
		}
	}( jQuery ));
