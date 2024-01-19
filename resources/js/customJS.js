export function initCustomJS() {

    function selectColor(obj) {
        var target = document.getElementById(obj);
        $('.door_variant.active').removeClass('active');
        target.classList.add('active');
    }
}
