
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

const expandIcons = document.querySelectorAll('.dropdown-custom-item');
    expandIcons.forEach(icon => {
      icon.addEventListener('click', () => {
        const subList = icon.nextElementSibling;
        if (subList.style.display == 'none') {
            subList.style.display = 'block';
        } else {
            subList.style.display = 'none';
        }
      });
    });
    