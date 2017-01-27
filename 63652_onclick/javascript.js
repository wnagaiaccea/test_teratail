function javabook(el) {
   this.initialize(el);
}
javabook.prototype.initialize = function(el) {
         //表す場所を指定する＄で
   this.$el = el;
   this.$lemenu =$("leftmenu");
   this.$ribox = $(".rightmenu");
   this.$atomore = $(".atokara")
   this.$more = $(".more01");
   this.$moremore = $(".more02");
     this.handleEvents();
};

javabook.prototype.handleEvents = function() {
    var self = this;
      this.$more.on("click", function(){
    self.slide('$(this).find(".atokara")');
        // self.slide('$(this).next(".atokara")');
    //↑..これは弟要素の時、<aside>を作らなかった場合は問題なかった。

        return false;
        });
  };


new javabook($(".javabook a"));
