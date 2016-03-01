!function(e){"use strict";function n(t,i){if(!(this instanceof n)){var a=new n(e.extend({$source:t,$currentTarget:t.first()},i));return a.open(),a}e.featherlight.apply(this,arguments),this.chainCallbacks(o)}var t=function(e){window.console&&window.console.warn&&window.console.warn("FeatherlightGallery: "+e)};if("undefined"==typeof e)return t("Too much lightness, Featherlight needs jQuery.");if(!e.featherlight)return t("Load the featherlight plugin before the gallery plugin");var i="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,a=e.event&&e.event.special.swipeleft&&e,r=window.Hammer&&function(e){var n=new window.Hammer.Manager(e[0]);return n.add(new window.Hammer.Swipe),n},s=i&&(a||r);i&&!s&&t("No compatible swipe library detected; one must be included before featherlightGallery for swipe motions to navigate the galleries.");var o={afterClose:function(e,n){var t=this;return t.$instance.off("next."+t.namespace+" previous."+t.namespace),t._swiper&&(t._swiper.off("swipeleft",t._swipeleft).off("swiperight",t._swiperight),t._swiper=null),e(n)},beforeOpen:function(e,n){var t=this;return t.$instance.on("next."+t.namespace+" previous."+t.namespace,function(e){var n="next"===e.type?1:-1;t.navigateTo(t.currentNavigation()+n)}),s?t._swiper=s(t.$instance).on("swipeleft",t._swipeleft=function(){t.$instance.trigger("next")}).on("swiperight",t._swiperight=function(){t.$instance.trigger("previous")}):t.$instance.find("."+t.namespace+"-content").append(t.createNavigation("previous")).append(t.createNavigation("next")),e(n)},onKeyUp:function(e,n){var t={37:"previous",39:"next"}[n.keyCode];return t?(this.$instance.trigger(t),!1):e(n)}};e.featherlight.extend(n,{autoBind:"[data-featherlight-gallery]"}),e.extend(n.prototype,{previousIcon:"&#9664;",nextIcon:"&#9654;",galleryFadeIn:100,galleryFadeOut:300,slides:function(){return this.filter?this.$source.find(this.filter):this.$source},images:function(){return t("images is deprecated, please use slides instead"),this.slides()},currentNavigation:function(){return this.slides().index(this.$currentTarget)},navigateTo:function(n){var t=this,i=t.slides(),a=i.length,r=t.$instance.find("."+t.namespace+"-inner");return n=(n%a+a)%a,t.$currentTarget=i.eq(n),t.beforeContent(),e.when(t.getContent(),r.fadeTo(t.galleryFadeOut,.2)).always(function(e){t.setContent(e),t.afterContent(),e.fadeTo(t.galleryFadeIn,1)})},createNavigation:function(n){var t=this;return e('<span title="'+n+'" class="'+this.namespace+"-"+n+'"><span>'+this[n+"Icon"]+"</span></span>").click(function(){e(this).trigger(n+"."+t.namespace)})}}),e.featherlightGallery=n,e.fn.featherlightGallery=function(e){return n.attach(this,e)},e(document).ready(function(){n._onReady()})}(jQuery);