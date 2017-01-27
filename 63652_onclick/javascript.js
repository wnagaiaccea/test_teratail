function javabook(el) {
   this.initialize(el);
}
javabook.prototype.initialize = function(el) {
         //表す場所を指定する＄で
   this.$el = el;
   this.$lemenu =$("leftmenu");
   this.$ribox = $(".rightmenu");
   this.$atomore = $(".atokara");
   this.$more = $(".more01");
   this.$moremore = $(".more02");
     this.handleEvents();
};

javabook.prototype.handleEvents = function() {
    var self = this;
      this.$more.on("click", function(){
        $(this).parents('aside').siblings('ul.atokara').show();

        return false;
        });
      this.$moremore.on("click", function(){
        $(this).parents('aside').siblings('ul.atokara').hide();

        return false;
        });
  };

new javabook($(".javabook a"));
