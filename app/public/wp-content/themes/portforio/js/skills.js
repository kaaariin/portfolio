{
    window.addEventListener('DOMContentLoaded',() => {
        
        function scrollAnimation () {
            let skillsPage = document.querySelectorAll('.skills--page__language');
            for(let i = 0; i < skillsPage.length; i++) {
                let margin = 50;
                if(window.innerHeight * 0.7 > skillsPage[i].getBoundingClientRect().top )
                 {
                    skillsPage[i].classList.add('active');
                }
            }
        }
        window.addEventListener('load',scrollAnimation);
        window.addEventListener('scroll',scrollAnimation);
        
        // if(window.pageYOffset > skillsPage[i].getBoundingClientRect().top + margin)
    });
    
}

