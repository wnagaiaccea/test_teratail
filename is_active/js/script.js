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
  console.log("target A : " + urlElementsA);
  console.log("target B : " + urlElementsB);
  console.log( " target A : " + urlElementsA[urlElementsA.length - 1]);
  console.log( " target B : " + urlElementsB[urlElementsB.length - 1]);
  console.log(urlElementsA[urlElementsA.length - 1] === "");
  console.log(urlElementsB[urlElementsB.length -1] === "");
  console.log(urlElementsA[urlElementsA.length - 1] === "" && urlElementsB[urlElementsB.length -1] === "");
  console.log( "*********");
  if(urlElementsA[urlElementsA.length - 1] === urlElementsB[urlElementsB.length -1]){
    return true;
  }
  // if(urlElementsB[urlElementsB.length - 1].endsWith("html")){
  //   urlElementsB.pop();
  //   return isActive(urlElementsA,urlElementsB);
  // }
  if(!isFllag)return false;
  if(urlElementsA[urlElementsA.length - 1].endsWith("html")){
    urlElementsA.pop();
    isFllag = true;
    return isActive(urlElementsA,urlElementsB);
  }

    return false;
}
