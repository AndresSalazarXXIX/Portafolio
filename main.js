window.sr=ScrollReveal();
sr.reveal('.navbar',{
    duration:2000,
    origin:'top',
    distance:'100px'

});

sr.reveal('.animateBottom',{
    duration:2000,
    origin:'bottom',
    distance:'100px'

});

sr.reveal('.animateLeft',{
    duration:2000,
    origin:'left',
    distance:'100px'

});
// animaciones de targetas

sr.reveal('.animateLeft1',{
    duration:2000,
    origin:'left',
    distance:'100px',
    delay: 1000
    

});

sr.reveal('.animateLeft2',{
    duration:2000,
    origin:'left',
    distance:'100px',
    delay: 1500

});

sr.reveal('.animateLeft3',{
    duration:2000,
    origin:'left',
    distance:'100px',
    delay: 2000

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

