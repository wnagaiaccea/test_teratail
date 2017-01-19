var activeUrls = location.pathname.split("/");
    navList = $(".side__navigation").find("a");
    navList.each(parse);

function parse(){
  var hrefs = $(this).attr("href").split("/")
  if( hrefs[1] == activeUrls[3] ) {
    if(hrefs.length > 2 && activeUrls[4] != hrefs[2]) return;
    $(this).addClass("is_active");
  }
}
