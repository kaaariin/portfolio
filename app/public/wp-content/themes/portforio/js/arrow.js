
/* top-page aroow */
{
    const uparrow = document.getElementById('uparrow');
    
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    window.addEventListener('scroll' , () => {
        let y  = window.pageYOffset;
        if(y > 250 ) {
            uparrow.style.display='block';
        } else {
            uparrow.style.display='none';
        }
    });
    uparrow.addEventListener('click' , () =>{
        scrollToTop();
    });

}
