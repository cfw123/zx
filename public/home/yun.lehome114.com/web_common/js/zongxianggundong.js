//文字纵向滚动
function zongxianggundong(id) {
	var $this = $("#"+id); 
    var scrollTimer;
    
    $this.hover(function() { 
        clearInterval(scrollTimer); 
        }, function() { 
        scrollTimer = setInterval(function() { 
        scrollNews($this); 
        },3000); 
    }).trigger("mouseleave"); 
}
   
function scrollNews(obj) { 
    var $self = obj.find("ul"); 
    var lineHeight = $self.find("li:first").height(); 
    $self.animate({ 
    "marginTop": -lineHeight + "px" 
    },500, function() { 
    $self.css({ 
    marginTop: 0 
    }).find("li:first").appendTo($self); 
    }) 
} 

