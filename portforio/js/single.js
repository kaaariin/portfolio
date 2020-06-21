{
    let menuLocation = document.querySelectorAll('.nav ul li a');
    let windowLocation = location.href;

    menuLocation.forEach(n => {
        if(n.href == windowLocation) {
            n.classList.add('active');
    } else {
        n.classList.remove('active');
    }
    

    })
}

