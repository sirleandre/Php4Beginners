!function(a){"object"==typeof exports&&"object"==typeof module?a(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],a):a(CodeMirror)}(function(a){"use strict";function b(b,c){function d(b){return e.parentNode?(e.style.top=Math.max(0,b.clientY-e.offsetHeight-5)+"px",void(e.style.left=b.clientX+5+"px")):a.off(document,"mousemove",d)}var e=document.createElement("div");return e.className="CodeMirror-lint-tooltip",e.appendChild(c.cloneNode(!0)),document.body.appendChild(e),a.on(document,"mousemove",d),d(b),null!=e.style.opacity&&(e.style.opacity=1),e}function c(a){a.parentNode&&a.parentNode.removeChild(a)}function d(a){a.parentNode&&(null==a.style.opacity&&c(a),a.style.opacity=0,setTimeout(function(){c(a)},600))}function e(c,e,f){function g(){a.off(f,"mouseout",g),h&&(d(h),h=null)}var h=b(c,e),i=setInterval(function(){if(h)for(var a=f;;a=a.parentNode){if(a&&11==a.nodeType&&(a=a.host),a==document.body)return;if(!a){g();break}}if(!h)return clearInterval(i)},400);a.on(f,"mouseout",g)}function f(a,b,c){this.marked=[],this.options=b,this.timeout=null,this.hasGutter=c,this.onMouseOver=function(b){r(a,b)},this.waitingFor=0}function g(a,b){return b instanceof Function?{getAnnotations:b}:(b&&b!==!0||(b={}),b)}function h(a){var b=a.state.lint;b.hasGutter&&a.clearGutter(s);for(var c=0;c<b.marked.length;++c)b.marked[c].clear();b.marked.length=0}function i(b,c,d,f){var g=document.createElement("div"),h=g;return g.className="CodeMirror-lint-marker-"+c,d&&(h=g.appendChild(document.createElement("div")),h.className="CodeMirror-lint-marker-multiple"),0!=f&&a.on(h,"mouseover",function(a){e(a,b,h)}),g}function j(a,b){return"error"==a?a:b}function k(a){for(var b=[],c=0;c<a.length;++c){var d=a[c],e=d.from.line;(b[e]||(b[e]=[])).push(d)}return b}function l(a){var b=a.severity;b||(b="error");var c=document.createElement("div");return c.className="CodeMirror-lint-message-"+b,"undefined"!=typeof a.messageHTML?c.innerHTML=a.messageHTML:c.appendChild(document.createTextNode(a.message)),c}function m(b,c,d){function e(){g=-1,b.off("change",e)}var f=b.state.lint,g=++f.waitingFor;b.on("change",e),c(b.getValue(),function(c,d){b.off("change",e),f.waitingFor==g&&(d&&c instanceof a&&(c=d),o(b,c))},d,b)}function n(b){var c=b.state.lint,d=c.options,e=d.options||d,f=d.getAnnotations||b.getHelper(a.Pos(0,0),"lint");if(f)if(d.async||f.async)m(b,f,e);else{var g=f(b.getValue(),e,b);if(!g)return;g.then?g.then(function(a){o(b,a)}):o(b,g)}}function o(a,b){h(a);for(var c=a.state.lint,d=c.options,e=k(b),f=0;f<e.length;++f){var g=e[f];if(g){for(var m=null,n=c.hasGutter&&document.createDocumentFragment(),o=0;o<g.length;++o){var p=g[o],q=p.severity;q||(q="error"),m=j(m,q),d.formatAnnotation&&(p=d.formatAnnotation(p)),c.hasGutter&&n.appendChild(l(p)),p.to&&c.marked.push(a.markText(p.from,p.to,{className:"CodeMirror-lint-mark-"+q,__annotation:p}))}c.hasGutter&&a.setGutterMarker(f,s,i(n,m,g.length>1,c.options.tooltips))}}d.onUpdateLinting&&d.onUpdateLinting(b,e,a)}function p(a){var b=a.state.lint;b&&(clearTimeout(b.timeout),b.timeout=setTimeout(function(){n(a)},b.options.delay||500))}function q(a,b){for(var c=b.target||b.srcElement,d=document.createDocumentFragment(),f=0;f<a.length;f++){var g=a[f];d.appendChild(l(g))}e(b,d,c)}function r(a,b){var c=b.target||b.srcElement;if(/\bCodeMirror-lint-mark-/.test(c.className)){for(var d=c.getBoundingClientRect(),e=(d.left+d.right)/2,f=(d.top+d.bottom)/2,g=a.findMarksAt(a.coordsChar({left:e,top:f},"client")),h=[],i=0;i<g.length;++i){var j=g[i].__annotation;j&&h.push(j)}h.length&&q(h,b)}}var s="CodeMirror-lint-markers";a.defineOption("lint",!1,function(b,c,d){if(d&&d!=a.Init&&(h(b),b.state.lint.options.lintOnChange!==!1&&b.off("change",p),a.off(b.getWrapperElement(),"mouseover",b.state.lint.onMouseOver),clearTimeout(b.state.lint.timeout),delete b.state.lint),c){for(var e=b.getOption("gutters"),i=!1,j=0;j<e.length;++j)e[j]==s&&(i=!0);var k=b.state.lint=new f(b,g(b,c),i);k.options.lintOnChange!==!1&&b.on("change",p),0!=k.options.tooltips&&"gutter"!=k.options.tooltips&&a.on(b.getWrapperElement(),"mouseover",k.onMouseOver),n(b)}}),a.defineExtension("performLint",function(){this.state.lint&&n(this)})});