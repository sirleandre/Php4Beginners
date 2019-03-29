!function(a){"object"==typeof exports&&"object"==typeof module?a(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],a):a(CodeMirror)}(function(a){"use strict";a.defineMode("xquery",function(){function a(a,b,c){return b.tokenize=c,c(a,b)}function b(b,g){var l=b.next(),n=!1,p=o(b);if("<"==l){if(b.match("!--",!0))return a(b,g,h);if(b.match("![CDATA",!1))return g.tokenize=i,"tag";if(b.match("?",!1))return a(b,g,j);var t=b.eat("/");b.eatSpace();for(var u,v="";u=b.eat(/[^\s\u00a0=<>\"\'\/?]/);)v+=u;return a(b,g,f(v,t))}if("{"==l)return q(g,{type:"codeblock"}),null;if("}"==l)return r(g),null;if(k(g))return">"==l?"tag":"/"==l&&b.eat(">")?(r(g),"tag"):"variable";if(/\d/.test(l))return b.match(/^\d*(?:\.\d*)?(?:E[+\-]?\d+)?/),"atom";if("("===l&&b.eat(":"))return q(g,{type:"comment"}),a(b,g,c);if(p||'"'!==l&&"'"!==l){if("$"===l)return a(b,g,e);if(":"===l&&b.eat("="))return"keyword";if("("===l)return q(g,{type:"paren"}),null;if(")"===l)return r(g),null;if("["===l)return q(g,{type:"bracket"}),null;if("]"===l)return r(g),null;var w=s.propertyIsEnumerable(l)&&s[l];if(p&&'"'===l)for(;'"'!==b.next(););if(p&&"'"===l)for(;"'"!==b.next(););w||b.eatWhile(/[\w\$_-]/);var x=b.eat(":");!b.eat(":")&&x&&b.eatWhile(/[\w\$_-]/),b.match(/^[ \t]*\(/,!1)&&(n=!0);var y=b.current();return w=s.propertyIsEnumerable(y)&&s[y],n&&!w&&(w={type:"function_call",style:"variable def"}),m(g)?(r(g),"variable"):("element"!=y&&"attribute"!=y&&"axis_specifier"!=w.type||q(g,{type:"xmlconstructor"}),w?w.style:"variable")}return a(b,g,d(l))}function c(a,b){for(var c,d=!1,e=!1,f=0;c=a.next();){if(")"==c&&d){if(!(f>0)){r(b);break}f--}else":"==c&&e&&f++;d=":"==c,e="("==c}return"comment"}function d(a,c){return function(e,f){var g;if(n(f)&&e.current()==a)return r(f),c&&(f.tokenize=c),"string";if(q(f,{type:"string",name:a,tokenize:d(a,c)}),e.match("{",!1)&&l(f))return f.tokenize=b,"string";for(;g=e.next();){if(g==a){r(f),c&&(f.tokenize=c);break}if(e.match("{",!1)&&l(f))return f.tokenize=b,"string"}return"string"}}function e(a,c){var d=/[\w\$_-]/;if(a.eat('"')){for(;'"'!==a.next(););a.eat(":")}else a.eatWhile(d),a.match(":=",!1)||a.eat(":");return a.eatWhile(d),c.tokenize=b,"variable"}function f(a,c){return function(d,e){return d.eatSpace(),c&&d.eat(">")?(r(e),e.tokenize=b,"tag"):(d.eat("/")||q(e,{type:"tag",name:a,tokenize:b}),d.eat(">")?(e.tokenize=b,"tag"):(e.tokenize=g,"tag"))}}function g(c,e){var f=c.next();return"/"==f&&c.eat(">")?(l(e)&&r(e),k(e)&&r(e),"tag"):">"==f?(l(e)&&r(e),"tag"):"="==f?null:'"'==f||"'"==f?a(c,e,d(f,g)):(l(e)||q(e,{type:"attribute",tokenize:g}),c.eat(/[a-zA-Z_:]/),c.eatWhile(/[-a-zA-Z0-9_:.]/),c.eatSpace(),(c.match(">",!1)||c.match("/",!1))&&(r(e),e.tokenize=b),"attribute")}function h(a,c){for(var d;d=a.next();)if("-"==d&&a.match("->",!0))return c.tokenize=b,"comment"}function i(a,c){for(var d;d=a.next();)if("]"==d&&a.match("]",!0))return c.tokenize=b,"comment"}function j(a,c){for(var d;d=a.next();)if("?"==d&&a.match(">",!0))return c.tokenize=b,"comment meta"}function k(a){return p(a,"tag")}function l(a){return p(a,"attribute")}function m(a){return p(a,"xmlconstructor")}function n(a){return p(a,"string")}function o(a){return'"'===a.current()?a.match(/^[^\"]+\"\:/,!1):"'"===a.current()&&a.match(/^[^\"]+\'\:/,!1)}function p(a,b){return a.stack.length&&a.stack[a.stack.length-1].type==b}function q(a,b){a.stack.push(b)}function r(a){a.stack.pop();var c=a.stack.length&&a.stack[a.stack.length-1].tokenize;a.tokenize=c||b}var s=function(){function a(a){return{type:a,style:"keyword"}}for(var b=a("operator"),c={type:"atom",style:"atom"},d={type:"punctuation",style:null},e={type:"axis_specifier",style:"qualifier"},f={",":d},g=["after","all","allowing","ancestor","ancestor-or-self","any","array","as","ascending","at","attribute","base-uri","before","boundary-space","by","case","cast","castable","catch","child","collation","comment","construction","contains","content","context","copy","copy-namespaces","count","decimal-format","declare","default","delete","descendant","descendant-or-self","descending","diacritics","different","distance","document","document-node","element","else","empty","empty-sequence","encoding","end","entire","every","exactly","except","external","first","following","following-sibling","for","from","ftand","ftnot","ft-option","ftor","function","fuzzy","greatest","group","if","import","in","inherit","insensitive","insert","instance","intersect","into","invoke","is","item","language","last","lax","least","let","levels","lowercase","map","modify","module","most","namespace","next","no","node","nodes","no-inherit","no-preserve","not","occurs","of","only","option","order","ordered","ordering","paragraph","paragraphs","parent","phrase","preceding","preceding-sibling","preserve","previous","processing-instruction","relationship","rename","replace","return","revalidation","same","satisfies","schema","schema-attribute","schema-element","score","self","sensitive","sentence","sentences","sequence","skip","sliding","some","stable","start","stemming","stop","strict","strip","switch","text","then","thesaurus","times","to","transform","treat","try","tumbling","type","typeswitch","union","unordered","update","updating","uppercase","using","validate","value","variable","version","weight","when","where","wildcards","window","with","without","word","words","xquery"],h=0,i=g.length;h<i;h++)f[g[h]]=a(g[h]);for(var j=["xs:anyAtomicType","xs:anySimpleType","xs:anyType","xs:anyURI","xs:base64Binary","xs:boolean","xs:byte","xs:date","xs:dateTime","xs:dateTimeStamp","xs:dayTimeDuration","xs:decimal","xs:double","xs:duration","xs:ENTITIES","xs:ENTITY","xs:float","xs:gDay","xs:gMonth","xs:gMonthDay","xs:gYear","xs:gYearMonth","xs:hexBinary","xs:ID","xs:IDREF","xs:IDREFS","xs:int","xs:integer","xs:item","xs:java","xs:language","xs:long","xs:Name","xs:NCName","xs:negativeInteger","xs:NMTOKEN","xs:NMTOKENS","xs:nonNegativeInteger","xs:nonPositiveInteger","xs:normalizedString","xs:NOTATION","xs:numeric","xs:positiveInteger","xs:precisionDecimal","xs:QName","xs:short","xs:string","xs:time","xs:token","xs:unsignedByte","xs:unsignedInt","xs:unsignedLong","xs:unsignedShort","xs:untyped","xs:untypedAtomic","xs:yearMonthDuration"],h=0,i=j.length;h<i;h++)f[j[h]]=c;for(var k=["eq","ne","lt","le","gt","ge",":=","=",">",">=","<","<=",".","|","?","and","or","div","idiv","mod","*","/","+","-"],h=0,i=k.length;h<i;h++)f[k[h]]=b;for(var l=["self::","attribute::","child::","descendant::","descendant-or-self::","parent::","ancestor::","ancestor-or-self::","following::","preceding::","following-sibling::","preceding-sibling::"],h=0,i=l.length;h<i;h++)f[l[h]]=e;return f}();return{startState:function(){return{tokenize:b,cc:[],stack:[]}},token:function(a,b){if(a.eatSpace())return null;var c=b.tokenize(a,b);return c},blockCommentStart:"(:",blockCommentEnd:":)"}}),a.defineMIME("application/xquery","xquery")});