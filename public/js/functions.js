/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function scrollToId(clickId, ScrollToid) {
    $(clickId).click(function() {
    $('html, body').animate({
        scrollTop: $(ScrollToid).offset().top
    }, 1500);
});
}


