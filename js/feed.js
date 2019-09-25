var feed = document.getElementById("feed");

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
    var feed2 = this.responseText.split("{{SEPARATOR}}");
    for (let i = feed2.length-1; i >= 0; i--) {
      const element = feed2[i];
      var replaced = element.replace(/(https?:\/\/[^ ]*\.(?:gif|png|jpg|jpeg))/i, "<a href='$1' target='_blank'><img style='width:3rem;overflow:hidden;' src='$1'></a>").replace(/\r?\n/g, '<br />');
      feed.innerHTML += replaced
    }
	}
};
xhttp.open("GET", "ul.txt", true);
xhttp.send();
