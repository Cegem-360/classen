export function initCustomJS() {

    function selectColor(obj) {
        var target = document.getElementById(obj);
        document.getElementsByClassName('color_variant active')[0].classList.remove('active');
        target.classList.add('active');
    }
}

 