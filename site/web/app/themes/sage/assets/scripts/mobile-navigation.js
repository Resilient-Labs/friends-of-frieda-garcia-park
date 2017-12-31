(function() {
    // select and target each empty p tag
    var emptyParagraphs = document.querySelectorAll('p:empty');
    // Remove all empty p tags on a page
    Array.prototype.forEach.call( emptyParagraphs, function( node ) {
        node.parentNode.removeChild( node );
    });
    // Event Handler
    document.querySelector(".mobile-navigation-hamburger").onclick = function(e) {
        e.preventDefault();
        this.classList.toggle('is-active');
    };
})();