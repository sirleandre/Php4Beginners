!function(a){"object"==typeof exports&&"object"==typeof module?a(require("../../lib/codemirror"),require("htmlhint")):"function"==typeof define&&define.amd?define(["../../lib/codemirror","htmlhint"],a):a(CodeMirror,window.HTMLHint)}(function(a,b){"use strict";var c={"tagname-lowercase":!0,"attr-lowercase":!0,"attr-value-double-quotes":!0,"doctype-first":!1,"tag-pair":!0,"spec-char-escape":!0,"id-unique":!0,"src-not-empty":!0,"attr-no-duplication":!0};a.registerHelper("lint","html",function(d,e){var f=[];if(b&&!b.verify&&(b=b.HTMLHint),b||(b=window.HTMLHint),!b)return window.console&&window.console.error("Error: HTMLHint not found, not defined on window, or not available through define/require, CodeMirror HTML linting cannot run."),f;for(var g=b.verify(d,e&&e.rules||c),h=0;h<g.length;h++){var i=g[h],j=i.line-1,k=i.line-1,l=i.col-1,m=i.col;f.push({from:a.Pos(j,l),to:a.Pos(k,m),message:i.message,severity:i.type})}return f})});