(function(){var a=window;a.dT_?a.console&&a.console.log("Duplicate agent injection detected, turning off redundant initConfig."):window.dT_||(window.dT_={cfg:"tp=500,50,0|instr=clk|lab=1|reportUrl=dynaTraceMonitor|agentUri=/dtagent_apqx_6000500001289.js|auto=#AUTO#|domain=#DOMAIN#|rid=RID_#REQUEST_ID#|rpid=#RESPONSE_ID#|app=Default Application"})})();(function(){function r(){var a=0;try{a=window.performance.timing.navigationStart+Math.floor(window.performance.now())}catch(b){}return 0>=a?(new Date).getTime():a}function Y(a,b){return Z(a,b)}function l(a,b){for(var c=1;c<arguments.length;c++)a.push(arguments[c])}function u(a,b){return parseInt(a,b||10)}function D(a){try{if(v)return v[a]}catch(b){}return null}function E(a,b){try{window.sessionStorage.setItem(a,b)}catch(c){}}function m(a,b){var c=-1;b&&(a&&a.indexOf)&&(c=a.indexOf(b));return c}function F(a){document.cookie=
a+'="";path=/'+(d.domain?";domain="+d.domain:"")+"; expires=Thu, 01-Jan-70 00:00:01 GMT;"}function G(a){a=encodeURIComponent(a);var b=[];if(a)for(var c=0;c<a.length;c++){var k=a.charAt(c),d=$[k];d?l(b,d):l(b,k)}return b.join("")}function w(a,b,c){b||0==b?(b=(""+b).replace(/[;\n\r]/g,"_"),b="DTSA"===a.toUpperCase()?G(b):b,a=a+"="+b+";path=/"+(d.domain?";domain="+d.domain:""),c&&(a+=";expires="+c.toUTCString()),document.cookie=a):F(a)}function q(a){var b,c,k,d=document.cookie.split(";");for(b=0;b<d.length;b++)if(c=
m(d[b],"="),k=d[b].substring(0,c),c=d[b].substring(c+1),k=k.replace(/^\s+|\s+$/g,""),k===a)return"DTSA"===a.toUpperCase()?decodeURIComponent(c):c;return""}function H(a){return/^[0-9A-Za-z_\$\+\/\.\-\*%\|]*$/.test(a)}function I(){var a=q(J);return a&&H(a)?a:""}function K(a){a=a||I();var b={sessionId:null,serverId:null};if(a){var c=m(a,"|"),d=a;-1!==c&&(d=a.substring(0,c));c=m(d,"$");-1!==c?(b.sessionId=d.substring(c+1),b.serverId=d.substring(0,c)):b.sessionId=d}return b}function aa(a){return K(a).serverId}
function ba(a){if(a)return K(a).sessionId;if(a=e.gSC()){var b=a.indexOf("|");-1!==b&&(a=a.substring(0,b))}return a}function L(a,b){return Math.floor(Math.random()*(b-a+1))+a}function M(a){var b=window.crypto||window.msCrypto,c;if(b)c=new Int8Array(a),b.getRandomValues(c);else{c=[];for(b=0;b<a;b++)c.push(L(0,N))}a=[];for(b=0;b<c.length;b++){var d=Math.abs(c[b]%N),d=9>=d?String.fromCharCode(d+48):String.fromCharCode(d+55);a.push(d)}return a.join("")}function O(a){return document.getElementsByTagName(a)}
function P(a){var b=a.length;if("number"===typeof b)a=b;else{for(var b=0,c=2048;a[c-1];)b=c,c+=c;for(var d=7;1<c-b;)d=(c+b)/2,a[d-1]?b=d:c=d;a=a[d]?c:b}return a}function ca(){var a=d.csu,a=(a.indexOf("dbg")==a.length-3?a.substr(0,a.length-3):a)+"_"+d.app+"_Store";try{if(x){var b=x.getItem(a);if(b){for(var a={},c=b.split("|"),b=0;b<c.length;b++){var e=c[b].split("=");2==e.length&&(a[e[0]]=decodeURIComponent(e[1]))}if(!d.lastModification||parseInt(a.lastModification.substr(0,13),10)>=parseInt(d.lastModification.substr(0,
13),10))for(var f in a)a.hasOwnProperty(f)&&("config"==f?y(a[f]):d[f]=a[f])}}}catch(g){}}function y(a){a=a.split("|");for(var b=0;b<a.length;b++){var c=m(a[b],"=");-1===c?d[a[b]]="1":d[a[b].substring(0,c)]=a[b].substring(c+1,a[b].length)}}function da(a,b){if(a){var c=/([a-zA-Z]*)[0-9]{0,3}_[a-zA-Z_0-9]*_[0-9]+/g.exec(a);if(c&&c.length){var k=c[0];d.csu=c[1];c=k.split("_");d.legacy="1";d.featureHash=c[1];d.dtVersion=e.version[0]+""+e.version[1]}}b&&y(b);c=location.hostname;k=d.domain;c=c&&k?c==k||
-1!==c.indexOf("."+k,c.length-("."+k).length)?!0:!1:!0;c||(delete d.domain,d.domainOverride="true")}function ea(){return J}function fa(){return ga}function ha(){return ia}function z(a){d[a]=0>m(d[a],"#"+a.toUpperCase())?d[a]:""}function ja(){return s}function Q(a){for(var b=R(),c=!1,d=0;d<b.length;d++)b[d].frameId===s&&(b[d].actionId=a,c=!0);c||l(b,{frameId:s,actionId:a});S(b)}function S(a,b){var c="";if(a){for(var c=[],d=0;d<a.length;d++)0<d&&0<c.length&&l(c,"p"),l(c,a[d].frameId),l(c,"h"),l(c,a[d].actionId);
c=c.join("")}c||(c="-");w(A,c)}function R(a){var b=q(A),c=[];if(b&&"-"!==b)for(var b=b.split("p"),d=0;d<b.length;d++){var e=b[d].split("h");if(2===e.length&&e[0]&&e[1]){var f=e[0],g;if(!(g=a)){g=f.split("_");g=u(g[0]);var h=r()%B;h<g&&(h+=B);g=g+9E5>h}g&&l(c,{frameId:f,actionId:e[1]})}}return c}function T(){var a=q(t);if(!a||""==a||a.length&&a.length!=U)a=D(t),a&&a.length==U||(V=!0,a=r()+M(ka));var b=a,c=new Date;c.setFullYear(c.getFullYear()+2);w(t,b,c);E(t,b);return a}function la(){return V}var f=
window;if(!f.dT_||!f.dT_.cfg||"string"!=typeof f.dT_.cfg||f.dT_.initialized)f.console&&f.console.log("Initconfig not found or agent already initialized! This is an injection issue.");else{var Z=window.setTimeout,v=window.sessionStorage,e={version:[6,5,0,"1289"],cfg:window.dT_&&window.dT_.cfg,ica:1};e.version[3]=parseInt(e.version[3],10);window.dT_=e;e.agentStartTime=r();e.nw=r;e.apush=l;e.st=Y;var N=32,$={"!":"%21","~":"%7E","*":"%2A","(":"%28",")":"%29","'":"%27",$:"%24",";":"%3B",",":"%2C"};e.gSSV=
D;e.sSSV=E;e.pn=u;e.iVSC=H;e.io=m;e.dC=F;e.sC=w;e.esc=G;e.gSId=aa;e.gDtc=ba;e.gSC=I;e.gC=q;e.cRN=L;e.cRS=M;e.gEL=P;e.gEBTN=O;var d={reportUrl:"dynaTraceMonitor",initializedModules:"",csu:"dtagent",domainOverride:"false",dataDtConfig:e.cfg},x;try{x=window.localStorage}catch(ma){}if(-1==m(d.dataDtConfig,"#CONFIGSTRING")&&(y(d.dataDtConfig),z("domain"),z("auto"),z("app"),(f=d.agentUri)&&-1<m(f,"_")))f=/([a-zA-Z0-9]*)[0-9]*_([a-zA-Z0-9]*)_[0-9]*/.exec(f),d.csu=f[1],d.featureHash=f[2],d.dtVersion=e.version[0]+
""+e.version[1];var f=O("script"),W=P(f);if(0<W)for(var h,X=d.csu+"_bootstrap.js",C=0;C<W;C++)if(h=f[C],h.attributes){var n=h.attributes.getNamedItem("data-dtconfig");h=h.src;if(n){da(h,n.value);break}if((n=h&&h.indexOf(X))&&0<=n)n=n+X.length+5,d.app=h.length>n?h.substr(n):"Default%20Application"}ca();try{var g=d.ign;if(g&&RegExp(g).test(window.location.href)){document.dT_=window.dT_=null;return}}catch(na){}var A="dtPC",J="dtCookie",ga="x-dtPC",ia="x-dtReferer";e.gSCN=ea;e.gPCHN=fa;e.gRHN=ha;e.pageContextCookieName=
A;e.latencyCookieName="dtLatC";e.cfg=d;var B=6E8,s=e.agentStartTime%B+"_"+u(1E3*Math.random());e.gFId=ja;e.frameId=s;Q(1);e.gPC=R;e.cPC=Q;e.sPC=S;var p;try{p=v.getItem("dtDisabled")}catch(oa){}!d.auto&&(!d.legacy&&!p)&&(g=d.agentname||d.csu||"dtagent",g=q("dtUseDebugAgent")?d.debugName||g+"dbg":d.name||g,p=d.agentUri||d.agentLocation+"/"+g+"_"+d.featureHash+"_"+d.buildNumber,d.async?(g=document.createElement("script"),g.setAttribute("src",p),d.async&&g.setAttribute("defer","true"),g.setAttribute("crossorigin",
"anonymous"),p=document.getElementsByTagName("script")[0],p.parentElement.insertBefore(g,p)):document.write('<script type="text/javascript" src="'+p+'">\x3c/script>'));var t="rxVisitor",ka=32,U=45,V=!1;T();e.iNV=la;e.gVID=T}})();
