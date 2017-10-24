window.onload = function() {
	/*返回顶部*/
	var owjh = document.getElementById('wjh');
	var time = null;
	var num=0;
	owjh.onclick = function() {
		time = setInterval(function() {
			var xin = document.body.scrollTop || document.documentElement.scrollTop;
			if(xin == 0) {
				clearInterval(time)
			} else {
				window.scrollBy(0, -80)
			}
		}, 10)
	}
}


$(function(){
	
	/*菜单导航下拉*/
         $(".header_bottom_right_ul>li ul").hide()
         $('.header_bottom_right_ul>li').each(function(){
         	$(this).hover(function(){
         		$(this).find('ul').show()
         	},function(){
         		$(this).find('ul').hide()
         	})
         })
      /*换图片*/
		$('.e-bd').each(function() {
			$(this).find('ul li').hover(function() {
				$(this).find('.replace-module').show().siblings('.Initial-Module').hide()
			}, function() {
				$(this).find('.replace-module').hide().siblings('.Initial-Module').show()
			})
		})
		
		/*地区  价格*/
		$('.more').each(function(){
			$(this).click(function(){
			if($(this).siblings('ul').hasClass('click')){
				$(this).html('更多》》')
				$(this).siblings('.adoption_list_show').removeClass('click')

			}else if(!$(this).siblings('ul').hasClass('click')){
				$(this).html('收起》》')
				$(this).siblings('.adoption_list_show').addClass('click')
				
			}
			
		})
	})
	/*产品分类*/
        $('.type li').hover(function(){
			var index=$(this).index()
			$('.overlay').eq(index).show().parents('li').siblings('li').find('.overlay').hide()
		},function(){
			$('.overlay').hide()
		})
        
     /*产品详情页  单品详情页 上面切换*/
				var img_list=$('.pro_content_s ul li')
				var num=0;
				img_list.hover(function(){
					$(this).addClass('hover').siblings().removeClass('hover')
					var index=$(this).index()
					num=index
			    	$('#pro_content img').attr('src',img_list.eq(num).find('img').attr('src'))
				},function(){
					
				})
				
		
		/*产品详情页   单品详情页 下面切换*/
	 var tabh = $('.main_left_ul ul li')
		var tabhtml=tabh.eq(0).html()
		tabh.click(function() {
			var index = $(this).index()
			$('.Main_tab').eq(index).show().siblings('.Main_tab').hide()
			$(this).addClass('C_active').siblings().removeClass('C_active')
		})
       /*切换规格*/
       var W_tabh = $('.W_Specifications ul li')
          W_tabh.click(function() {
			var index = $(this).index()
			$(this).addClass('sp_hover').siblings().removeClass('sp_hover')
		})
      /*收藏*/
		$(function(){
			collect();
		})
			
		function collect(){
			$('.start_sc').click(function(){
				if(!$('.star_m').hasClass('on')){
					$('.star_m').addClass('on')
					$('.star_m').siblings('a').css('color','green')
				}else{
					$('.star_m').removeClass('on')
					$('.star_m').siblings('a').css('color','#333')
				}
			})
		}
		
		
				
})
