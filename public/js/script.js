
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
