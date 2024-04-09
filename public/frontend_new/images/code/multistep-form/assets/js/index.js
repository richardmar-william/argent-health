const hv = {};
let metaData2 = document.querySelector('meta[name="component-id"]').content;
let metaSplit2 = metaData2.split(",");
metaSplit2.forEach(element => {
    import(`../../components/${element.trim()}/js/${element.trim()}.js`).then();
});
// let $componentId =  document.querySelectorAll("[data-component-id]");
// for(let i = 0; i < $componentId.length; i++){
//     let $getattr = $componentId[i].getAttribute("data-component-id");
//     import(`../../components/${$getattr}/${$getattr}.js`);
// }