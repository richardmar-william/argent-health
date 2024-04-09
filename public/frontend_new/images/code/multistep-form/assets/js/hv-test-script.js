let metaData = document.querySelector('meta[name="component-id"]').content;
let metaSplit = metaData.split(",");
metaSplit.forEach(element => {
    fetch(`./components/${element.trim()}/css/${element.trim()}.css`)
        .then((response) => response.text())
        .then((css) => {
        const style = document.createElement("style");
        style.innerHTML = css;
        document.head.appendChild(style);
        let pageLoad = document.querySelector(".page-loader");
        if(pageLoad != null){
            setTimeout(() => {
                pageLoad.remove();
            }, 500)
        }
    });
});