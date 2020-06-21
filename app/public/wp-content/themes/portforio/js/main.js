'use strict';

{
    const toggle = document.getElementById('navbar__toggle');
    const icon = document.getElementsByClassName('navbar__toggle__icon');
    const nav = document.getElementById('header__nav');
    let navItem = document.querySelectorAll('.header__nav__item');


    // nav.style.display= 'none';


    toggle.addEventListener('click', () => {
        for(let i=0; i<icon.length; i++) {
        icon[i].classList.toggle('open');
        nav.classList.toggle('show');
        }
    });


    document.addEventListener('DOMContentLoaded', () => {
        navItem.forEach(n => {
            n.addEventListener('click', () => {
                if(nav.classList.contains('show')) {
                toggle.click();
                }
            });
        });
    }, { once: true });

    
}


{   
    jQuery(function() {
        jQuery('.block .skills--page__language .skills--page__language__icon-name .skills--page__language__icon').eq(1).addClass('flex');
    })

}

{
    
    let clickOn = document.getElementsByClassName('click-on');
    let open =    document.getElementsByClassName('website-site__click');
    let close = document.getElementsByClassName('close-fa');
    let page = document.getElementsByClassName('page');
    let footer = document.getElementById('footer');


    for (let i = 0; i < clickOn.length; i++) {
    clickOn[i].addEventListener('click',() => {
        open[i].classList.add('fadein');
        open[i].classList.remove('fadeout');
        for (let i = 0; i < page.length; i++) {
            page[i].classList.add('hidden');
            footer.classList.add('hidden');
        }
    } 
    )
}

for (let i =0; i < close.length; i++) {
    close[i].addEventListener('click', () => {
        if(open[i].classList.contains('fadein')) {
            open[i].classList.remove('fadein');
            open[i].classList.add('fadeout');
            for (let i = 0; i < page.length; i++) {
                page[i].classList.remove('hidden');
                footer.classList.remove('hidden');

            }
        }
    })
}
}


{

const header = document.getElementById('header');
window.addEventListener('scroll',() => {
    let y = window.pageYOffset;
    if(y > 0) {
        header.classList.add('scloll');
    }else {
        header.classList.remove('scloll');
    }
});

}

{
jQuery(function(){

    var pageURL = location.pathname;
    var pageURLArr = pageURL.split('/');//パスを分割して配列化する
    var pageURLArrCategory = pageURLArr[1]; //パスから第1階層を取得
    
    jQuery('.nav ul li a').each(function (i, v) {
      var selfhref = jQuery(v).attr('href');
        var hrefArr = selfhref.split('/'); //href属性の値を分割して配列化する
        var hrefArrCategory = hrefArr[3]; //href属性の第1階層を取得
        
      //パスの第1階層とhref属性の第1階層を比較して同じ値であればcurrentを付与する
      if (pageURLArrCategory === hrefArrCategory) {
        
        jQuery(v).addClass('active');
      }
  
    });
  
  });
}


{
window.addEventListener('DOMContentLoaded' , () => {
        function scrollAnimation () {
            const fadeinTop = document.querySelectorAll('.block');
            for(let i = 0; i < fadeinTop.length; i++) {
                let margin = 30;
                if(window.innerHeight > fadeinTop[i].getBoundingClientRect().top + margin) {
                    fadeinTop[i].classList.add('active');
                }
            }
        }
        window.addEventListener('load',scrollAnimation);
        window.addEventListener('scroll',scrollAnimation);
    
    });
}

