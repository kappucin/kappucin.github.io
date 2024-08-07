function bookmarksite(title,url){
if (window.sidebar) 
window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ 
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(document.all)
window.external.AddFavorite(url, title);
}
