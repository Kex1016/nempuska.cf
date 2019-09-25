function Load() {
    document.getElementById("hidden").style.visibility = "visible";
    document.getElementById("irodalomp").style.visibility = "hidden";
    document.getElementById("halop").style.visibility = "hidden";
    document.getElementById("progp").style.visibility = "hidden";
    document.getElementById("close").style.visibility = "hidden";
    Tagline();
}

function Tagline() {
    var taglineHTML = document.querySelector('#tagline');
    var tagline = ['Copyzod a CSS-em. - Zoli', 'Megbukás? Az mi?', 'Jobb, mint a Stack Overflow.', '10. B. number one', 'Vigyázz, mögötted a tanár!', 'SUBA EL FOG KAPNI!', 'Toljuk el.', 'Ha már itt jársz... Miért nem tanultál?', 'Ezt én nem értem.', 'Hát nem.'];
    taglineHTML.style.opacity="0";
    var tagRandom = Math.floor((Math.random() * 10) + 1);
    setTimeout(function () {
        document.getElementById("tagline").innerHTML = tagline[tagRandom];
        taglineHTML.style.opacity="1";
        Tagline();
    }, 4000);
}

function Close() {
    document.getElementById("hidden").style.visibility = "visible";
    document.getElementById("irodalomp").style.visibility = "hidden";
    document.getElementById("halop").style.visibility = "hidden";
    document.getElementById("progp").style.visibility = "hidden";
    document.getElementById("close").style.visibility = "hidden";
}

function Irodalom() {
    document.getElementById("hidden").style.visibility = "hidden";
    document.getElementById("irodalomp").style.visibility = "visible";
    document.getElementById("halop").style.visibility = "hidden";
    document.getElementById("progp").style.visibility = "hidden";
    document.getElementById("close").style.visibility = "visible";
}

function Halo() {
    document.getElementById("hidden").style.visibility = "hidden";
    document.getElementById("irodalomp").style.visibility = "hidden";
    document.getElementById("halop").style.visibility = "visible";
    document.getElementById("progp").style.visibility = "hidden";
    document.getElementById("close").style.visibility = "visible";

}

function Prog() {
    document.getElementById("hidden").style.visibility = "hidden";
    document.getElementById("irodalomp").style.visibility = "hidden";
    document.getElementById("halop").style.visibility = "hidden";
    document.getElementById("progp").style.visibility = "visible";
    document.getElementById("close").style.visibility = "visible";

}

function Lbclick() {
    alert("Hamarosan.")
}

function Lbclose() {
    document.getElementById("lightbox").style.visibility = "hidden";
}
