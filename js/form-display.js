function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}
function open_form(){
    console.log('test');
    document.querySelector('.bg-modal').style.display = 'flex'; 
    disableScroll();
    
}
function close_form(){
    document.querySelector('.bg-modal').style.display = 'none';
    enableScroll();
}


