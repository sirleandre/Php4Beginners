!function(a){"object"==typeof exports&&"object"==typeof module?a(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],a):a(CodeMirror)}(function(a){"use strict";a.defineMode("mathematica",function(a,b){function c(a,b){var c;return c=a.next(),'"'===c?(b.tokenize=d,b.tokenize(a,b)):"("===c&&a.eat("*")?(b.commentLevel++,b.tokenize=e,b.tokenize(a,b)):(a.backUp(1),a.match(k,!0,!1)?"number":a.match(l,!0,!1)?"number":a.match(/(?:In|Out)\[[0-9]*\]/,!0,!1)?"atom":a.match(/([a-zA-Z\$]+(?:`?[a-zA-Z0-9\$])*::usage)/,!0,!1)?"meta":a.match(/([a-zA-Z\$]+(?:`?[a-zA-Z0-9\$])*::[a-zA-Z\$][a-zA-Z0-9\$]*):?/,!0,!1)?"string-2":a.match(/([a-zA-Z\$][a-zA-Z0-9\$]*\s*:)(?:(?:[a-zA-Z\$][a-zA-Z0-9\$]*)|(?:[^:=>~@\^\&\*\)\[\]'\?,\|])).*/,!0,!1)?"variable-2":a.match(/[a-zA-Z\$][a-zA-Z0-9\$]*_+[a-zA-Z\$][a-zA-Z0-9\$]*/,!0,!1)?"variable-2":a.match(/[a-zA-Z\$][a-zA-Z0-9\$]*_+/,!0,!1)?"variable-2":a.match(/_+[a-zA-Z\$][a-zA-Z0-9\$]*/,!0,!1)?"variable-2":a.match(/\\\[[a-zA-Z\$][a-zA-Z0-9\$]*\]/,!0,!1)?"variable-3":a.match(/(?:\[|\]|{|}|\(|\))/,!0,!1)?"bracket":a.match(/(?:#[a-zA-Z\$][a-zA-Z0-9\$]*|#+[0-9]?)/,!0,!1)?"variable-2":a.match(m,!0,!1)?"keyword":a.match(/(?:\\|\+|\-|\*|\/|,|;|\.|:|@|~|=|>|<|&|\||_|`|'|\^|\?|!|%)/,!0,!1)?"operator":(a.next(),"error"))}function d(a,b){for(var d,e=!1,f=!1;null!=(d=a.next());){if('"'===d&&!f){e=!0;break}f=!f&&"\\"===d}return e&&!f&&(b.tokenize=c),"string"}function e(a,b){for(var d,e;b.commentLevel>0&&null!=(e=a.next());)"("===d&&"*"===e&&b.commentLevel++,"*"===d&&")"===e&&b.commentLevel--,d=e;return b.commentLevel<=0&&(b.tokenize=c),"comment"}var f="[a-zA-Z\\$][a-zA-Z0-9\\$]*",g="(?:\\d+)",h="(?:\\.\\d+|\\d+\\.\\d*|\\d+)",i="(?:\\.\\w+|\\w+\\.\\w*|\\w+)",j="(?:`(?:`?"+h+")?)",k=new RegExp("(?:"+g+"(?:\\^\\^"+i+j+"?(?:\\*\\^[+-]?\\d+)?))"),l=new RegExp("(?:"+h+j+"?(?:\\*\\^[+-]?\\d+)?)"),m=new RegExp("(?:`?)(?:"+f+")(?:`(?:"+f+"))*(?:`?)");return{startState:function(){return{tokenize:c,commentLevel:0}},token:function(a,b){return a.eatSpace()?null:b.tokenize(a,b)},blockCommentStart:"(*",blockCommentEnd:"*)"}}),a.defineMIME("text/x-mathematica",{name:"mathematica"})});