var ZakraNavHelper={getChildNodes:function(e){var t,n=[];for(t in e.childNodes)e.childNodes.hasOwnProperty(t)&&1===e.childNodes[t].nodeType&&n.push(e.childNodes[t]);return n},offset:function(e){var t=e.getBoundingClientRect(),n=window.pageXOffset||document.documentElement.scrollLeft,a=window.pageYOffset||document.documentElement.scrollTop;return{top:t.top+a,left:t.left+n}},dimension:function(e){return parseInt(document.defaultView.getComputedStyle(e,"").getPropertyValue("width"))+parseInt(document.defaultView.getComputedStyle(e,"").getPropertyValue("margin-left"))+parseInt(document.defaultView.getComputedStyle(e,"").getPropertyValue("padding-left"))+parseInt(document.defaultView.getComputedStyle(e,"").getPropertyValue("padding-right"))+parseInt(document.defaultView.getComputedStyle(e,"").getPropertyValue("margin-right"))},getOverflowItems:function(e){navigation.style.flex="0 0 "+navUlTempWidth+"px";for(var t=[],n=0;n<e.length;n++){var a,i,r;i=e[n],r=this.offset(i).top,0===n&&(a=r),r>a&&(i.classList.contains("tg-menu-item-search")||i.classList.contains("tg-menu-item-cart")||i.classList.contains("tg-header-button-wrap")||i.classList.contains("tg-menu-extras-wrap")||t.push(i))}return t}};window.zakraNavHelper=ZakraNavHelper,function(){var e,t,n,a,i;if(e=document.getElementById("site-navigation")){for((t=e.getElementsByTagName("ul")[0]).setAttribute("aria-expanded","false"),-1===t.className.indexOf("nav-menu")&&(t.className+=" nav-menu"),a=0,i=(n=t.getElementsByTagName("a")).length;a<i;a++)n[a].addEventListener("focus",r,!0),n[a].addEventListener("blur",r,!0);!function(e){var t,n,a=e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(t=function(e){var t,n=this.parentNode;if(n.classList.contains("focus"))n.classList.remove("focus");else{for(e.preventDefault(),t=0;t<n.parentNode.children.length;++t)n!==n.parentNode.children[t]&&n.parentNode.children[t].classList.remove("focus");n.classList.add("focus")}},n=0;n<a.length;++n)a[n].addEventListener("touchstart",t,!1)}(e)}function r(){for(var e=this;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}}(),function(){var e,t=document.querySelectorAll(".tg-primary-menu li.menu-item-has-children, .tg-primary-menu li.page_item_has_children"),n=t.length,a="ontouchstart"in window||navigator.maxTouchPoints?"touchstart":"mouseenter";for(e=0;e<n;e++)t[e].addEventListener(a,(function(e){var t,n,a=e.currentTarget;a&&(t=a.querySelectorAll(".sub-menu, .children")[0])&&(0<=(n=t.getBoundingClientRect()).left&&n.right<=(window.innerWidth-10||document.documentElement.clientWidth-10)||t.classList.add("tg-edge"))}),!1),t[e].addEventListener("mouseleave",(function(e){var t,n=e.currentTarget;n&&((t=n.querySelectorAll(".sub-menu, .children")[0]).classList.remove("tg-edge"),t.classList.contains("tg-edge")&&t.classList.remove("tg-edge"))}),!1)}(),function(){var e,t,n,a,i,r,s,o,l,d,c,u,m,g;navigation=document.getElementById("site-navigation"),null!==navigation&&navigation.classList.contains("tg-extra-menus")&&(e=navigation.getElementsByClassName("tg-menu-extras-wrap")[0],null!==(m=document.getElementById("tg-menu-extras"))&&(d=navigation.getElementsByClassName("nav-menu")[0],c=ZakraNavHelper.getChildNodes(d),g=navigation.offsetWidth,t=navigation.getElementsByClassName("tg-menu-item-search")[0],n=navigation.getElementsByClassName("tg-menu-item-cart")[0],a=navigation.getElementsByClassName("tg-header-button-wrap")[0],i=navigation.getElementsByClassName("tg-header-button-wrap")[1],r=t?ZakraNavHelper.dimension(t):0,s=n?ZakraNavHelper.dimension(n):0,o=a?ZakraNavHelper.dimension(a):0,o+=i?ZakraNavHelper.dimension(i):0,l=e?ZakraNavHelper.dimension(e):0,navUlTempWidth=g-(r+s+o+l),u=0,c.forEach((function(e,t){u+=ZakraNavHelper.dimension(e)})),u>g?ZakraNavHelper.getOverflowItems(c).forEach((function(e){m.appendChild(e)})):e.parentNode.removeChild(e),navigation.style.flex=""))}(),function(){for(var e=document.querySelectorAll("#mobile-navigation li a"),t=document.querySelector(".tg-mobile-toggle"),n=e.length,a=0;a<n;a++)e[a].addEventListener("click",(function(){t.click()}))}();