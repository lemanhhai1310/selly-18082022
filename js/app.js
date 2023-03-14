console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const app = x('#app');

        const footer__nav = x('.footer__nav');
        if (footer__nav){
            const h_footer__nav = footer__nav ? footer__nav.offsetHeight + 'px' : 0;
            app.style.paddingBottom = h_footer__nav;
            console.log('paddingBottom App',h_footer__nav);
        }

        const giohang__bottomFixed = x('.giohang__bottomFixed');
        if (giohang__bottomFixed){
            const h_giohang__bottomFixed = giohang__bottomFixed ? giohang__bottomFixed.offsetHeight + 'px' : 0;
            app.style.paddingBottom = h_giohang__bottomFixed;
            console.log('paddingBottom App',h_giohang__bottomFixed);
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})


$(window).on("load", function (e) {

});