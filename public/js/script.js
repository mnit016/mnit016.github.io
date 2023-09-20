
class HTMLInclude extends HTMLElement {
    constructor() {
        super();
        this.loadContent();
    }

    async loadContent() {
        const source = this.getAttribute("src");
        if (!source) {
            throw new Error("No src attribute  given.");
        }
        const response = await fetch(source);
        if (response.status !== 200) {
            throw new Error(`Could not load resource: ${source}`);
        }
        this.innerHTML = await response.text();
    }
}

window.customElements.define("html-include", HTMLInclude);

function expandMenu(e) {
    console.log(e)
    e.classList.toggle("active");
    const subList = e.nextElementSibling;
    if (subList.style.display == 'none') {
        subList.style.display = 'block';
    } else {
        subList.style.display = 'none';
    }
}

$(document).ready(function(){
    var width = document.getElementById('web-body').offsetWidth;
    var windowWidth = $(document).outerWidth();
    var r = windowWidth / width

    $('#web-body').css({
        '-webkit-transform': 'scale(' + r + ')',
        '-moz-transform': 'scale(' + r + ')',
        '-ms-transform': 'scale(' + r + ')',
        '-o-transform': 'scale(' + r + ')',
        'transform': 'scale(' + r + ')'
    });

});
