!function(e,t,n){"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=n:(e[t]=n,"function"==typeof define&&define.amd&&define(t,[],function(){return n}))}(this,"jRespond",function(e,t,f){"use strict";return function(e){var u=[],c=[],i=e,d="",h="",t=0,n=500,a=function(e){var t=e.breakpoint,n=e.enter||f;u.push(e),c.push(!1),p(t)&&(n!==f&&n.call(null,{entering:d,exiting:h}),c[u.length-1]=!0)},o=function(){for(var e=[],t=[],n=0;n<u.length;n++){var i=u[n].breakpoint,a=u[n].enter||f,o=u[n].exit||f;"*"===i?(a!==f&&e.push(a),o!==f&&t.push(o)):p(i)?(a===f||c[n]||e.push(a),c[n]=!0):(o!==f&&c[n]&&t.push(o),c[n]=!1)}for(var l={entering:d,exiting:h},r=0;r<t.length;r++)t[r].call(null,l);for(var s=0;s<e.length;s++)e[s].call(null,l)},p=function(e){if("object"==typeof e){if(0<=e.join().indexOf(d))return!0}else{if("*"===e)return!0;if("string"==typeof e&&d===e)return!0}},l=function(){var e="number"!=typeof window.innerWidth?0!==document.documentElement.clientWidth?document.documentElement.clientWidth:document.body.clientWidth:window.innerWidth;e!==t?(n=100,function(e){for(var t=!1,n=0;n<i.length;n++)if(e>=i[n].enter&&e<=i[n].exit){t=!0;break}t&&d!==i[n].label?(h=d,d=i[n].label,o()):t||""===d||(d="",o())}(e)):n=500,t=e,setTimeout(l,n)};return l(),{addFunc:function(e){!function(e){if(e.length===f)a(e);else for(var t=0;t<e.length;t++)a(e[t])}(e)},getBreakpoint:function(){return d}}}}(0,this.document)),function(F){jQuery.fn.extend({slimScroll:function(x){var S=F.extend({width:"auto",height:"250px",size:"3px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.1,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},x);return this.each(function(){var i,e,a,n,o,l,r,s,u="<div></div>",c=30,d=!1,h=F(this);if(h.parent().hasClass(S.wrapperClass)){var p=h.scrollTop();if(v=h.parent().find("."+S.barClass),g=h.parent().find("."+S.railClass),C(),F.isPlainObject(x)){if("height"in x&&"auto"==x.height){h.parent().css("height","auto"),h.css("height","auto");var f=h.parent().parent().height();h.parent().css("height",f),h.css("height",f)}if("scrollTo"in x)p=parseInt(S.scrollTo);else if("scrollBy"in x)p+=parseInt(S.scrollBy);else if("destroy"in x)return v.remove(),g.remove(),void h.unwrap();y(p,!1,!0)}}else{S.height="auto"==S.height?h.parent().height():S.height;var m=F(u).addClass(S.wrapperClass).css({position:"relative",overflow:"hidden",width:S.width,height:S.height});h.css({overflow:"hidden",width:S.width,height:S.height});var g=F(u).addClass(S.railClass).css({width:S.size,height:"100%",position:"absolute",top:0,display:S.alwaysVisible&&S.railVisible?"block":"none","border-radius":S.railBorderRadius,background:S.railColor,opacity:S.railOpacity,zIndex:90}),v=F(u).addClass(S.barClass).css({background:S.color,width:S.size,position:"absolute",top:0,opacity:S.opacity,display:S.alwaysVisible?"block":"none","border-radius":S.borderRadius,BorderRadius:S.borderRadius,MozBorderRadius:S.borderRadius,WebkitBorderRadius:S.borderRadius,zIndex:99}),b="right"==S.position?{right:S.distance}:{left:S.distance};g.css(b),v.css(b),h.wrap(m),h.parent().append(v),h.parent().append(g),S.railDraggable&&v.bind("mousedown",function(e){var n=F(document);return a=!0,t=parseFloat(v.css("top")),pageY=e.pageY,n.bind("mousemove.slimscroll",function(e){currTop=t+e.pageY-pageY,v.css("top",currTop),y(0,v.position().top,!1)}),n.bind("mouseup.slimscroll",function(e){a=!1,k(),n.unbind(".slimscroll")}),!1}).bind("selectstart.slimscroll",function(e){return e.stopPropagation(),e.preventDefault(),!1}),g.hover(function(){E()},function(){k()}),v.hover(function(){e=!0},function(){e=!1}),h.hover(function(){i=!0,E(),k()},function(){i=!1,k()}),h.bind("touchstart",function(e,t){e.originalEvent.touches.length&&(o=e.originalEvent.touches[0].pageY)}),h.bind("touchmove",function(e){(d||e.originalEvent.preventDefault(),e.originalEvent.touches.length)&&(y((o-e.originalEvent.touches[0].pageY)/S.touchScrollStep,!0),o=e.originalEvent.touches[0].pageY)}),C(),"bottom"===S.start?(v.css({top:h.outerHeight()-v.outerHeight()}),y(0,!0)):"top"!==S.start&&(y(F(S.start).position().top,null,!0),S.alwaysVisible||v.hide()),function(){window.addEventListener?(this.addEventListener("DOMMouseScroll",w,!1),this.addEventListener("mousewheel",w,!1),this.addEventListener("MozMousefalconScroll",w,!1)):document.attachEvent("onmousewheel",w)}()}function w(e){if(i){var t=0;(e=e||window.event).wheelDelta&&(t=-e.wheelDelta/120),e.detail&&(t=e.detail/3);var n=e.target||e.srcTarget||e.srcElement;F(n).closest("."+S.wrapperClass).is(h.parent())&&y(t,!0),e.preventDefault&&!d&&e.preventDefault(),d||(e.returnValue=!1)}}function y(e,t,n){d=!1;var i=e,a=h.outerHeight()-v.outerHeight();if(t&&(i=parseInt(v.css("top"))+e*parseInt(S.wheelStep)/100*v.outerHeight(),i=Math.min(Math.max(i,0),a),i=0<e?Math.ceil(i):Math.floor(i),v.css({top:i+"px"})),i=(r=parseInt(v.css("top"))/(h.outerHeight()-v.outerHeight()))*(h[0].scrollHeight-h.outerHeight()),n){var o=(i=e)/h[0].scrollHeight*h.outerHeight();o=Math.min(Math.max(o,0),a),v.css({top:o+"px"})}h.scrollTop(i),h.trigger("slimscrolling",~~i),E(),k()}function C(){l=Math.max(h.outerHeight()/h[0].scrollHeight*h.outerHeight(),c),v.css({height:l+"px"});var e=l==h.outerHeight()?"none":"block";v.css({display:e})}function E(){if(C(),clearTimeout(n),r==~~r){if(d=S.allowPageScroll,s!=r){var e=0==~~r?"top":"bottom";h.trigger("slimscroll",e)}}else d=!1;s=r,l>=h.outerHeight()?d=!0:(v.stop(!0,!0).fadeIn("fast"),S.railVisible&&g.stop(!0,!0).fadeIn("fast"))}function k(){S.alwaysVisible||(n=setTimeout(function(){S.disableFadeOut&&i||e||a||(v.fadeOut("slow"),g.fadeOut("slow"))},1e3))}}),this}}),jQuery.fn.extend({slimscroll:jQuery.fn.slimScroll})}(jQuery),function(p){"use strict";var f="animsition",m={init:function(n){return n=p.extend({inClass:"fade-in",outClass:"fade-out",inDuration:1500,outDuration:800,linkElement:".animsition-link",loading:!0,loadingParentElement:"body",loadingClass:"animsition-loading",unSupportCss:["animation-duration","-webkit-animation-duration","-o-animation-duration"],overlay:!1,overlayClass:"animsition-overlay-slide",overlayParentElement:"body"},n),m.supportCheck.call(this,n)?(m.optionCheck.call(this,n)&&m.addOverlay.call(this,n),n.loading&&m.addLoading.call(this,n),this.each(function(){var i=this,e=p(this),t=p(window);e.data(f)||(n=p.extend({},n),e.data(f,{options:n}),t.on("load."+f+" pageshow."+f,function(){m.pageIn.call(i)}),t.on("unload."+f,function(){}),p(n.linkElement).on("click."+f,function(e){e.preventDefault();var t=p(this),n=t.attr("href");2===e.which||e.metaKey||e.shiftKey||-1!==navigator.platform.toUpperCase().indexOf("WIN")&&e.ctrlKey?window.open(n,"_blank"):m.pageOut.call(i,t,n)}))})):("console"in window||(window.console={},window.console.log=function(e){return e}),console.log("Animsition does not support this browser."),m.destroy.call(this))},addOverlay:function(e){p(e.overlayParentElement).prepend('<div class="'+e.overlayClass+'"></div>')},addLoading:function(e){p(e.loadingParentElement).append('<div class="'+e.loadingClass+'"></div>')},removeLoading:function(){var e=p(this).data(f).options;p(e.loadingParentElement).children("."+e.loadingClass).fadeOut().remove()},supportCheck:function(e){var t=p(this),n=e.unSupportCss,i=n.length,a=!1;0===i&&(a=!0);for(var o=0;o<i;o++)if("string"==typeof t.css(n[o])){a=!0;break}return a},optionCheck:function(e){var t=p(this);return!(!e.overlay&&!t.data("animsition-overlay"))},animationCheck:function(e,t,n){var i=p(this).data(f).options,a=typeof e,o=!t&&"number"===a,l=t&&"string"===a&&0<e.length;return o||l?e=e:t&&n?e=i.inClass:!t&&n?e=i.inDuration:t&&!n?e=i.outClass:t||n||(e=i.outDuration),e},pageIn:function(){var e=this,t=p(this),n=t.data(f).options,i=t.data("animsition-in-duration"),a=t.data("animsition-in"),o=m.animationCheck.call(e,i,!1,!0),l=m.animationCheck.call(e,a,!0,!0),r=m.optionCheck.call(e,n);n.loading&&m.removeLoading.call(e),r?m.pageInOverlay.call(e,l,o):m.pageInBasic.call(e,l,o)},pageInBasic:function(e,t){var n=p(this);n.trigger("animsition.start").css({"animation-duration":t/1e3+"s"}).addClass(e).animateCallback(function(){n.removeClass(e).css({opacity:1}).trigger("animsition.end")})},pageInOverlay:function(e,t){var n=p(this),i=n.data(f).options;n.trigger("animsition.start").css({opacity:1}),p(i.overlayParentElement).children("."+i.overlayClass).css({"animation-duration":t/1e3+"s"}).addClass(e).animateCallback(function(){n.trigger("animsition.end")})},pageOut:function(e,t){var n=this,i=p(this),a=i.data(f).options,o=e.data("animsition-out"),l=i.data("animsition-out"),r=e.data("animsition-out-duration"),s=i.data("animsition-out-duration"),u=o||l,c=r||s,d=m.animationCheck.call(n,u,!0,!1),h=m.animationCheck.call(n,c,!1,!1);m.optionCheck.call(n,a)?m.pageOutOverlay.call(n,d,h,t):m.pageOutBasic.call(n,d,h,t)},pageOutBasic:function(e,t,n){p(this).css({"animation-duration":t/1e3+"s"}).addClass(e).animateCallback(function(){location.href=n})},pageOutOverlay:function(e,t,n){var i=p(this),a=i.data(f).options,o=i.data("animsition-in"),l=m.animationCheck.call(this,o,!0,!0);p(a.overlayParentElement).children("."+a.overlayClass).css({"animation-duration":t/1e3+"s"}).removeClass(l).addClass(e).animateCallback(function(){location.href=n})},destroy:function(){return this.each(function(){var e=p(this);p(window).unbind("."+f),e.css({opacity:1}).removeData(f)})}};p.fn.animateCallback=function(e){var t="animationend webkitAnimationEnd mozAnimationEnd oAnimationEnd MSAnimationEnd";return this.each(function(){p(this).bind(t,function(){return p(this).unbind(t),e.call(this)})})},p.fn.animsition=function(e){return m[e]?m[e].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof e&&e?void p.error("Method "+e+" does not exist on jQuery."+f):m.init.apply(this,arguments)}}(jQuery),function(){"use strict";var e="undefined"!=typeof module&&module.exports,n="undefined"!=typeof Element&&"ALLOW_KEYBOARD_INPUT"in Element,i=function(){for(var e,t,n=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],i=0,a=n.length,o={};i<a;i++)if((e=n[i])&&e[1]in document){for(i=0,t=e.length;i<t;i++)o[n[0][i]]=e[i];return o}return!1}(),t={request:function(e){var t=i.requestFullscreen;e=e||document.documentElement,/5\.1[\.\d]* Safari/.test(navigator.userAgent)?e[t]():e[t](n&&Element.ALLOW_KEYBOARD_INPUT)},exit:function(){document[i.exitFullscreen]()},toggle:function(e){this.isFullscreen?this.exit():this.request(e)},raw:i};i?(Object.defineProperties(t,{isFullscreen:{get:function(){return!!document[i.fullscreenElement]}},element:{enumerable:!0,get:function(){return document[i.fullscreenElement]}},enabled:{enumerable:!0,get:function(){return!!document[i.fullscreenEnabled]}}}),e?module.exports=t:window.screenfull=t):e?module.exports=!1:window.screenfull=!1}();