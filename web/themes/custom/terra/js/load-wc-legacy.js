!function() {
    function e(e, t) {
        return new Promise((function(o, n) {
            document.head.appendChild(Object.assign(document.createElement("script"), {
                src: e,
                onload: o,
                onerror: n
            }, t ? {
                type: "module"
            } : void 0))
        }))
    }
    var t = [];

    function o() {
        "noModule" in HTMLScriptElement.prototype ? 
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-brand/dist/matter-brand.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-last-boja/dist/matter-last-boja.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-gallery/dist/matter-gallery.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-grid-list/dist/matter-grid-list.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-carousel/dist/matter-carousel.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-twitter/dist/matter-twitter.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-ajax-list/dist/matter-ajax-list.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-counter/dist/matter-counter.js") &&
        window.importShim("/themes/custom/terra/node_modules/@matter/matter-calendar/dist/matter-calendar.js")
        :
        System.import("/themes/custom/terra/node_modules/@matter/matter-brand/dist/legacy/matter-brand.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-last-boja/dist/legacy/matter-last-boja.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-gallery/dist/legacy/matter-gallery.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-grid-list/dist/legacy/matter-grid-list.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-carousel/dist/legacy/matter-carousel.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-twitter/dist/legacy/matter-twitter.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-ajax-list/dist/legacy/matter-ajax-list.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-counter/dist/legacy/matter-counter.js") &&
        System.import("/themes/custom/terra/node_modules/@matter/matter-calendar/dist/legacy/matter-calendar.js")
        
    }
    "fetch" in window || t.push(e("/themes/custom/terra/js/polyfills/fetch.js", !1)), "noModule" in HTMLScriptElement.prototype && !("importShim" in window) && 
    t.push(e("/themes/custom/terra/js/polyfills/dynamic-import.js", !1)), "attachShadow" in Element.prototype &&
     "getRootNode" in Element.prototype || t.push(e("/themes/custom/terra/js/polyfills/webcomponents.js", !1)), !("noModule" in HTMLScriptElement.prototype) &&
      "getRootNode" in Element.prototype && t.push(e("/themes/custom/terra/js/polyfills/custom-elements-es5-adapter.js", !1)), t.length ? Promise.all(t).then(o) : o()
}();