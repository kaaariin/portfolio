/* top-page top */


{
    function upLoade() {
        const logo = document.getElementById('header__logo');
        logo.classList.add('logo-block');      
    }

    function typing() {
        const typing = (element, sentence) => {
            [...sentence].forEach((character, index) => {
                setTimeout(() => {
                document.querySelector(element).textContent += character;
              }, 100 * ++index);
            });
            }
        typing('#typing','Thanks for coming!!');
    }

    function nav() {
        const navBlock = document.getElementById('nav');
        navBlock.classList.add('nav-block');      

    }

    function onloade() {
    window.onload = function() {
            return new Promise(function(resolve) {
                setTimeout(function() {
                    resolve(upLoade());
                },500);
            })
        
    }
}
    function onloade2() {
        return new Promise(function(resolve) {
            setTimeout(function() {
                resolve(typing());
            },2500);
        })
    
}

function onloade3() {
            return new Promise(function(resolve) {
                setTimeout(function() {
                    resolve(nav());
                },4500);
            })
        
}


Promise.all([
onloade(),
onloade2(),
onloade3()

])

    
} 

