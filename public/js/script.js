
function expandMenu(e) {
    console.log(e)
    e.classList.toggle("active");
    const subList = e.nextElementSibling;
    if (subList.style.display == 'none') {
        subList.style.display = 'block';
    } else {
        subList.style.display = 'none';
    }
}

$(document).ready(function(){
    var width = document.getElementById('web-body').offsetWidth;
    var windowWidth = $(document).outerWidth();
    var r = windowWidth / width

    $('#web-body').css({
        '-webkit-transform': 'scale(' + r + ')',
        '-moz-transform': 'scale(' + r + ')',
        '-ms-transform': 'scale(' + r + ')',
        '-o-transform': 'scale(' + r + ')',
        'transform': 'scale(' + r + ')'
    });

});

function scrollToId(id) {
    var offset = $(id).offset();
    var scrollto = offset.top - 136; // minus fixed header height
    $('html, body').animate({scrollTop:scrollto}, 0);
}