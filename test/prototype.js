var Prototype = function() {
	this.vast = {};
};

Prototype.prototype.getHTTPObject = function() {
	if (typeof XMLHttpRequest != 'undefined') {
		return new XMLHttpRequest();
	} try {
		return new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			return new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e) {}
	}
	return false;
};

Prototype.prototype.setVast = function() {

	var http = protoType.getHTTPObject();
	http.open("GET", "http://prototype.local.com/src/vpaid2jslinear.xml", true);
	http.onreadystatechange = function() {
		if (http.readyState == 4) {
			this.vast = http.responseText;
			return this.vast;
		}
	}
	http.send(null);

};