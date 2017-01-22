var activeUrls = location.pathname.split("/");
    if(activeUrls[activeUrls.length - 1].length == 0 ){
      activeUrls.pop();
    }
    navList = $(".side__navigation").find("a");
    isFllag = false;
    navList.each(parse);
function parse(){
  var hrefs = $(this).attr("href").split("/");
  if(hrefs[hrefs.length - 1].length == 0){
    hrefs.pop();
  }
  if( isActive(hrefs,activeUrls) ) {
    $(this).addClass("is_active");
  }
}

var isFllag = false;
function isActive(urlElementsA,urlElementsB){
  if(urlElementsA[urlElementsA.length - 1] === urlElementsB[urlElementsB.length -1]){
    return true;
  }
  if(!isFllag)return false;
  if(urlElementsA[urlElementsA.length - 1].endsWith("html")){
    urlElementsA.pop();
    isFllag = true;
    return isActive(urlElementsA,urlElementsB);
  }
    return false;
}
