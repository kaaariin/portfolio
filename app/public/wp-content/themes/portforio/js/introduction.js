/* page-introduction introduction */

'use script'

{
    const introduction = document.getElementById('introduction__contents');
    function introductionLoad () {
        introduction.classList.add('active');
    }

    window.addEventListener('scroll',introductionLoad);
    }