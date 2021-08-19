window.sr=ScrollReveal();
sr.reveal('.navbar',{
    duration:2000,
    origin:'bottom'

});

sr.reveal('.animateLeft',{
    duration:2000,
    origin:'left',
    distance:'100px'

});
// animaciones de targetas

sr.reveal('.animateLeft1',{
    duration:4000,
    origin:'left',
    distance:'100px'

});

sr.reveal('.animateLeft2',{
    duration:3000,
    origin:'left',
    distance:'100px'

});

sr.reveal('.animateLeft3',{
    duration:2000,
    origin:'left',
    distance:'100px'

});
// fin animaciones de targetas

sr.reveal('.animateTop',{
    duration:3000,
    origin:'top',
    distance:'100px'

});

sr.reveal('.animateRight',{
    duration:3000,
    origin:'right',
    distance:'100px'

});

//evitamos el reenvio del fomulario
if(window.history.replaceState){
window.history.replaceState(null, null,window.location.href);
}

