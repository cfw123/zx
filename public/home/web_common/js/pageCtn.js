<!--
var ss=13;
function fs(s)
{
if (s==0){ss=13}
ss=ss+s;
document.all.newsContent.style.fontSize=ss+'px'
}
function DrawImage(ImgD,wid,hei){
   var image=new Image();
   image.src=ImgD.src;
   if(image.width>0 && image.height>0){
    flag=true;
    if(image.width/image.height>= wid/hei){
     if(image.width>wid){  
     ImgD.width=wid;
     ImgD.height=(image.height*wid)/image.width;
     }else{
     ImgD.width=image.width;  
     ImgD.height=image.height;
     }

     }
    else{
     if(image.height>hei){  
     ImgD.height=hei;
     ImgD.width=(image.width*hei)/image.height;     
     }else{
     ImgD.width=image.width;  
     ImgD.height=image.height;
     }

     }
    }
   }
function copyToClipBoard(){
var clipBoardContent="";
clipBoardContent+=this.location.href;
window.clipboardData.setData("Text",clipBoardContent);
alert("复制成功，请粘贴到您的QQ/MSN上推荐给您的好友");
}